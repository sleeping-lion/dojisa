<?php
/*
Plugin Name: Naver Blog API Plugin
Plugin URI: http://hints.co.kr/project/naverblogapi-plugin/
Description: 워드프레스에서 네이버 블로그 API를 통해 네이버 블로그에 포스팅이 가능합니다. 
Version: 1.0
Author: Hints
Author URI: http://hints.co.kr
Author Email: iloveiehe48@gmail.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'NaverBlogAPI_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

if ( ! class_exists( 'HintsNaverBlogAPI' ) ) {

	class HintsNaverBlogAPI {
        
        public $name = 'HintsNaverBlogAPI';
        public $XMLRPCURL = 'https://api.blog.naver.com/xmlrpc';
        public $options = array();
         
    
        function __construct() {
            $this->initialize();
                         
            if ( is_admin() ) {
                register_activation_hook( __FILE__ , array( get_class($this), 'activationBlogAPI' ) );
                register_uninstall_hook( __FILE__, array( get_class($this), 'uninstallBlogAPI' ) );
            }
            
        }
               
        /**************************************************************************
         * 플러그인 활성화
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        static function activationBlogAPI() {
            if ( version_compare( PHP_VERSION, '5.0.1', '<' ) ) { 
                deactivate_plugins( basename( __FILE__ ) ); // Deactivate ourself 
                wp_die( "PHP 5.0.1 이상에서만 사용이 가능합니다. (현재 PHP 버전: ".PHP_VERSION.")" );
            }
        }
        
        
        
        /**************************************************************************
         * 플러그인 삭제
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        static function uninstallBlogAPI() {
            if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
                exit();
            
            if ( !is_multisite() ) {
                delete_option( $this->name );
            } 
            else {
                global $wpdb;
                $blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
                $original_blog_id = get_current_blog_id();
                foreach ( $blog_ids as $blog_id ) 
                {
                    switch_to_blog( $blog_id );
                    delete_option( $this->name );  
                }
                switch_to_blog( $original_blog_id );
                delete_site_option( $this->name );  
            }
        }
        
        
        /**************************************************************************
         * 초기화
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function initialize() {
			
            $this->plugin_file = basename( __FILE__ );
            $this -> options = wp_parse_args(get_option($this->name), array( 'blogapi_id' => '', 'blogapi_pw' => '' ));
			add_option( $this->name, $this->options );
            add_action( 'admin_menu', array( &$this, 'registerSubmenuPage' ) );
                        
        }
                
        /**************************************************************************
         * 관리메뉴 등록
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function registerSubmenuPage() {

            if ( ! current_user_can( 'manage_options' ) ) return false; 
            add_submenu_page( 'options-general.php', 'NaverBlogAPI', 'Naver Blog API', 'manage_options', basename(__FILE__), array( &$this, 'displaySubmenuPage' ) );
            add_action( 'admin_init', array( &$this, 'registerOptions' ) );
            add_action( 'admin_init', array( &$this, 'naverblog_meta_box_init' ) );

        }
        
        
        /**************************************************************************
         * 관리페이지 출력
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function displaySubmenuPage() {

            $hidden_field_name = 'naverblog_submit_hidden';
            if ( isset( $_POST[$hidden_field_name] ) && $_POST[$hidden_field_name] == 'Y' ) {
                
				$this->options['blogapi_id'] = $_POST['blogapi_id'];
                $this->options['blogapi_pw'] = $_POST['blogapi_pw'];
                
                update_option( $this->name, $this->options );
?>
                <div class="updated"><p><strong><?php _e( 'settings saved.', 'blogapi_notice_save' ); ?></strong></p></div>
<?php
            }
            require_once NaverBlogAPI_PLUGIN_PATH . '/naverblogapi_admin_settings.php';
        }
        
        
        /**************************************************************************
         * 등록옵션
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function registerOptions() { register_setting( $this->name, $this->name, array( &$this, 'optionValidate' ) ); }
        
        
        /**************************************************************************
         * 피드 및 템플릿 연결
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function optionValidate($input) { return $input; }
        
        /**************************************************************************
         * 메타박스 초기화
         *
         * @since version 1.0
         * @return void
         * @access public
         **************************************************************************/
        function naverblog_meta_box_init() {

            add_action( 'add_meta_boxes', array( $this, 'naverblog_add_post_meta_boxes' ) );
            add_action( 'transition_post_status', array( $this, 'naverblog_meta_save' ), 10, 3 );
           
        }
        
        /**************************************************************************
         * 메타박스 생성
         *
         * @since version 1.0
         * @return void
         * @access public
         **************************************************************************/
        function naverblog_add_post_meta_boxes() {
            
            if ($this -> options['blogapi_id']){
                add_meta_box('naverblog-meta', __('Naver Blog Options', 'naverblog_meta_box'), array( $this, 'naverblog_meta_box' ), 'post', 'side', 'default');
            }

        }
        
        /**************************************************************************
         * 메타박스 필드
         *
         * @since version 1.0
         * @return void
         * @access public
         **************************************************************************/
        function naverblog_meta_box( $post, $box ) {
            
            wp_nonce_field( 'naverblog_meta_box', 'naverblog_meta_box_nonce' );
            $cheked = ($this -> options['blogapi_id']) ? 'checked="checked"' : '';
?>
                
                <table style="text-align: left; width:100%; ">
                    <tbody>
                        <tr valign="top">
                            <th scope="row" width="50%"><label for="enabled">NaverBlog Ping : </label></th>
                            <td><input name="enabled" type="checkbox" id="enabled" value="1" <?php echo $cheked; ?>/></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">출처 : </th>
                            <td>
                                <label for="origin_enable"><input name="origin_enable" type="radio" id="origin_enable" value="1"/>사용</label>
                                <label for="origin_disable"><input name="origin_enable" type="radio" id="origin_disable" value="0" checked="checked" />미사용</label>
                            </td>
                        </tr>
                        <tr valign="top" style="display: none;" class="origin_enable">
                            <th scope="row">출처위치 : </th>
                            <td>
                                <label for="origin_start"><input name="origin_posi" type="radio" id="origin_start" value="1"/>처음</label>
                                <label for="origin_end"><input name="origin_posi" type="radio" id="origin_end" value="0"/>끝</label>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">포스트 : </th>
                            <td>
                                <label for="excerpt_enable"><input name="excerpt_enable" type="radio" id="excerpt_enable" value="1"/>요약글</label><label for="excerpt_disable">
                                <input name="excerpt_enable" type="radio" id="excerpt_disable" value="0" checked="checked"/>전체글</label>
                            </td>
                        </tr>
                        <tr valign="top" style="display: none;" class="excerpt_enable">
                            <th scope="row"><label for="excerpt_lenth">요약글자수 : </label></th>
                            <td><input name="excerpt_lenth" type="text" id="excerpt_lenth"  value="700" style="width:120px;"/></label></td>
                        </tr>
                    </tbody>
                </table>
                <script>
                    jQuery('#excerpt_enable').click(function() {
                        jQuery('.excerpt_enable').show();
                    })
                    jQuery('#excerpt_disable').click(function() {
                        jQuery('.excerpt_enable').hide();
                    })
                    jQuery('#origin_enable').click(function() {
                        jQuery('.origin_enable').show();
                    })
                    jQuery('#origin_disable').click(function() {
                        jQuery('.origin_enable').hide();
                    })
                </script>
<?php
			
        }
        
        /**************************************************************************
         * 메타박스 필드 셋팅
         *
         * @since version 1.0
         * @param $new_status , $old_status , $post
         * @return void
         **************************************************************************/
        function naverblog_meta_save( $new_status, $old_status, $post  ) {
            
			if ( isset($_POST['enabled']) && 'publish' == $new_status && 'publish' != $old_status ) {
				add_action( 'publish_post', array( &$this, 'pingPublishPost' ), 10, 3 );
			}
                        
        }
        
         /**************************************************************************
         * 포스트 생성 및 업데이트시 액션 처리
         *
         * @since version 1.0
         * @return NULL
         * @access public
         **************************************************************************/
        function pingPublishPost(){
                
            require_once NaverBlogAPI_PLUGIN_PATH . '/lib/xmlrpc.inc';
            global $post;
            
            $NaverBlog_Options = get_option('HintsNaverBlogAPI');;     
            $UserName = $NaverBlog_Options['blogapi_id'];
            $PassWord = $NaverBlog_Options['blogapi_pw'];
            $blogid = $UserName;
            
            $c = new xmlrpc_client($this->XMLRPCURL); 
            $c->setSSLVerifyPeer(false);
            $GLOBALS['xmlrpc_internalencoding']='UTF-8'; 
            
            if($_POST['excerpt_enable']){	
                $content = wpautop(strip_tags(iconv_substr(strip_shortcodes($post->post_content), 0, $_POST['excerpt_lenth'] , 'utf-8')));
                $content .= ' ..... <br/>[ <a href='.get_permalink().'> 더보기 </a> ]';
            }else{
                $content = wpautop(iconv_substr(do_shortcode($post->post_content), 0, mb_strlen($post->post_content), 'utf-8'));
            }
            
            if($_POST['origin_enable']){	
				
				if($_POST['origin_posi']){	
                    $content = '[출처 : <a href='.get_permalink().'> '.get_option("blogname").' 원문 보기 </a> ] <br/>'.$content;    
                }else{
                    $content = $content.'<br/> [출처 : <a href='.get_permalink().'> '.get_option("blogname").' 원문 보기 </a> ]';
                }
                
            }
            
            $newpost = new xmlrpcval(array (
                'title' => new xmlrpcval($post->post_title, 'string'),
                'description' => new xmlrpcval($content, 'string')
            ), 'struct'); 
            
            $x = new xmlrpcmsg("metaWeblog.newPost");
            $x->addParam(new xmlrpcval($UserName, 'string'));
            $x->addParam(new xmlrpcval($blogid, 'string'));
            $x->addParam(new xmlrpcval($PassWord, 'string'));
            $x->addParam($newpost);
            $x->addParam(new xmlrpcval(true, 'boolean'));
            $x->request_charset_encoding = "UTF-8";   
            
            $c->return_type = 'phpvals'; 
            $r =$c->send($x, 3, 'https');
                        
        }
    }
}
$hintsnaverblogapi = new HintsNaverBlogAPI();
