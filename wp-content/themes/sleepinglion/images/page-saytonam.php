<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
require_once($document_root.'/wp-config.php');
global $wpdb;
?>
<!DOCTYPE!>
<!--[if IE 6]>
<!--html id="ie6" <?php language_attributes(); ?>-->
<![endif]-->
<!--[if IE 7]>
<!--html id="ie7" <?php language_attributes(); ?>-->
<![endif]-->
<!--[if IE 8]>
<!--html id="ie8" <?php language_attributes(); ?>-->
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta property="og:image" content="https://www.gg.go.kr/wp-content/uploads/2014/06/wish.png" />
    <title><?php elegant_titles(); ?></title>
    <?php elegant_description(); ?>
    <?php elegant_keywords(); ?>
    <?php elegant_canonical(); ?>
    <?php do_action('et_head_meta'); ?>

    <?php
    if (strpos(strtolower($_SERVER["SCRIPT_URI"]), 'http://') === false) { // https 일때
        ?>
        <link rel="pingback" href="https://www.gg.go.kr/xmlrpc.php " />
    <?php
    } else {
        ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    }
    ?>
    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img#logo, span.overlay, a.zoom-icon, a.more-icon, #menu, #menu-right, #menu-content, ul#top-menu ul, #menu-bar, .footer-widget ul li, span.post-overlay, #content-area, .avatar-overlay, .comment-arrow, .testimonials-item-bottom, #quote, #bottom-shadow, #quote .container');</script>
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
	<script type="text/javascript" src="//101.livere.co.kr/js/livere8_lib.js" charset="utf-8"></script>
	<link type="text/css" rel="stylesheet" href="//101.livere.co.kr/css/default_livere8.css">
	<link type="text/css" rel="stylesheet" href="//101.livere.co.kr/css/default_actionwidzet8.css">
<?php
	if( is_user_logged_in() ){
		$logout_url = wp_logout_url();
		setcookie('logout_url', $logout_url, 0,'/','.gg.go.kr');
		if( strpos( get_url( 'current' ), "mypage" ) !== false ) 
			echo  '<li class="slimgn-logout head_line" style="display:none;"><a href="'.get_curProtocol_s(wp_logout_url("https://www.gg.go.kr/saytonam").'" id="btn-ggdo-logout').'"></a></li>';
		}
?>
    <script type="text/javascript">
        document.documentElement.className = 'js';
        function livereloggout() {
            location.href = jQuery('li.slimgn-logout a').attr('href');
        }
    </script>

    <style type="text/css">
        #eventInfo p {margin:0;padding:0;line-height:1;text-align:center;}
		#eventInfo p img, #eventInfo span img{width:100%}
        .eventBtn {width:32%;display:inline-block;z-index:100;position:absolute;right:8%;top:50%}
    </style>
    <style type="text/css" media="only screen and ( max-width: 820px )">
        .message {display:none;}
        .eventBtn {width:40%;display:inline-block;z-index:100;position:absolute;right:2%;top:50%}
        .eventInfo {width:95% !important}
    </style>
    
</head>
<body id="wrap" style="background:#fff;margin:0">
<div id="content" style="margin:0 auto;">

    <!-- 라이브리 적용 -->
    <div id="eventInfo">
        <p><img src="https://www.gg.go.kr/wp-content/uploads/2014/06/img_event01.jpg" /></p>
        <div style="position:relative">
            <span><img src="https://www.gg.go.kr/wp-content/uploads/2014/06/img_event02.jpg" style="text-align:center" /></span>
            <span class="eventBtn"><a href="#livere"><img src="https://www.gg.go.kr/wp-content/uploads/2014/06/btn_join.png" /></a></span>
        </div>
<!--        <p><img src="https://www.gg.go.kr/wp-content/uploads/2014/06/img_event03.jpg" class="message" /></p>-->
        <p><img src="https://www.gg.go.kr/wp-content/uploads/2014/06/img_event04.jpg" style="width:80%;" class="eventInfo" /></p>
    </div>

    <a name="livere"></a>
	<?php
         $result_livere = '	
         <script type="text/javascript">
         var consumer_seq = "732";
         var livere_seq = "18425";
         var smartlogin_seq = "862";
         var title = "'.get_the_title( $post_id ).'";
		 var refer = "'.urlencode( str_replace( 'http://', '', get_url("current") ) ).'";
         livereReply = new Livere( livere_seq , refer , title );
		 livereReply.description = "민선6기 경기도지사에게 전하고 싶은 바램,희망 및 정책,조언등의 메시지를 남겨주세요!";
         livereLib.start();
         </script>
         '; 
         echo '<div id="livereContainer" style="background:#eaeaea !important;padding:10px">'.$result_livere.'</div>';
	?>
</body>
</html>