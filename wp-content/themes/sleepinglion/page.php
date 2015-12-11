<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">	
		<div class="row">
			<div id="sub_main" class="col-md-12 col-lg-9">		
				<?php the_post(); ?>
				<?php get_template_part('page_content'); ?>
				
	<div id="content-foot" style="padding:7px 0 0 0;" data-id="<?php echo get_the_ID(); ?>">

		<div id="ttalk_rating_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"></div>
		<div id="ttalk_div_<?php echo get_current_blog_id(); ?>_<?php global $post; echo $post->ID; ?>"></div>
	</div>
					
			</div>				
			<?php get_sidebar() ?>
		</div>			
	</div>			
</div>
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