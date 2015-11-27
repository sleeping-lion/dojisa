<?php get_header() ?>
<?php the_post() ?>
<div id="sub_main_wrap">
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">		
			<?php get_template_part('single_content'); ?>
			<?php comments_template('',true); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
</div
<?php get_footer() ?>
