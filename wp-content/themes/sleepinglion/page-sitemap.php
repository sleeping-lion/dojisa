<?php get_header('nonav') ?>
<div id="sub_main_wrap">
	<div class="container">
		<div class="row">
			<div id="sub_main" class="col-md-12 col-lg-9">
				<section id="sitemap">		
				<?php remove_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu') ?>
				<?php wp_nav_menu(array('theme_location'  => 'sleepinglion','menu'=>'primary','menu_id'=>'primary_nav_menu','container' => 'li','fallback_cb'=>false)) ?>
				</section>
			</div>				
			<?php get_sidebar() ?>	
		</div>			
	</div>			
</div>
<?php get_footer() ?>
