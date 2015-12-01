<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">	
		<div class="row">
			<div id="sub_main" class="col-md-12 col-lg-9">		
				<?php the_post(); ?>
				<?php get_template_part('page_content'); ?>
			</div>				
			<?php get_sidebar() ?>	
		</div>			
	</div>			
</div>
<?php get_footer() ?>