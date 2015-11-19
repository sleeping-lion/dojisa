<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1><?php echo __('Detail','sleepinglion') ?></h1>
		</div>
	</div>
</div>

<?php the_post() ?>
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">
			<?php get_template_part('content'); ?>
			<?php comments_template('',true); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer() ?>
