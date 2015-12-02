<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">	
		<div class="row">
			<div id="sub_main" class="col-xd-12">		
				<?php the_post(); ?>
				<?php get_template_part('page_content'); ?>
			</div>				
		</div>			
	</div>			
</div>
<?php get_footer() ?>