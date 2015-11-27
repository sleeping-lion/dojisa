<?php get_header() ?>
<div id="sub_main_wrap">
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">		
			<?php the_post(); ?>
			<?php get_template_part('page_content'); ?>
					</div>				
				<?php get_sidebar() ?>	
			</div>			
		</div>			
	</div>	
</div>
</div>
<?php get_footer() ?>
