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