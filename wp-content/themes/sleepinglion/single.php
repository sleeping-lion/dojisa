<?php

add_filter('nav_menu_css_class', 'add_parent_url_menu_class', 10, 2 );

function add_parent_url_menu_class( $classes = array(), $item = false ) {
    // Get current URL
    $current_url = current_url();

    // Get homepage URL
    $homepage_url = trailingslashit( get_bloginfo( 'url' ) );

    // Exclude 404 and homepage
    if( is_404() or $item->url == $homepage_url ) return $classes;

    if ( strstr( $current_url, $item->url) ) {
        // Add the 'parent_url' class
        $classes[] = 'parent_url';
    }
    return $classes;
}

function current_url() {
    // Protocol
    $url = ( 'on' == $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
    $url .= $_SERVER['SERVER_NAME'];

    // Port
    $url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
    $url .= $_SERVER['REQUEST_URI'];
    return trailingslashit( $url );
}

?>
<?php get_header() ?>
<?php the_post() ?>
<div id="sub_main_wrap">
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">
			<?php get_template_part('single_content'); ?>
			<?php comments_template('',true); ?>
	<div id="content-foot" style="padding:7px 0 0 0;" data-id="<?php echo get_the_ID(); ?>">
		<div id="ttalk_rating_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"></div>
		<div id="ttalk_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"></div>
	</div>			
			
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
</div
<?php get_footer() ?>
<script src="http://v2.ttalk.co.kr/js/jquery.ttalk.min.js"></script>
<script src="http://v2.ttalk.co.kr/js/init.ttalk.min.js"></script>
<script type="text/javascript">
		try {
			ttparam = {
				sitekey : "d7a63e551a0ea0726b2ab2495e06bea78e68df4d",
				ttalkmaindiv : ["ttalk_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				ttalkratingdiv : ["ttalk_rating_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				article_uid : ["<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"],
				article_url : ["<?php echo get_permalink(); ?>"],
				article_catecd : [""],
				article_img : [""],
				article_title : ["<?php echo get_the_title(); ?>"],
				mobile : "n",
				list_view : ["a"]
				}
				var ttalk = new TTalkLoad();
				ttalk.init();
			} catch(e) {}
</script>