<aside class="col-md-4 col-lg-3 visible-md visible-lg">
	<div id="current_post">
		<h3>최신글</h3>
		<?php $query = new WP_Query(array('posts_per_page' => 5) ); ?>
		<?php if ( $query->have_posts()): ?>		
		<ul>
 		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
 			<?php get_template_part('side_content'); ?>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		<?php else: ?>
		<p><?php __('No Article','sleepinglion') ?></p>
		<?php endif ?>
	</div>
	<div id="menu_link">
		<h3>소통현장속으로</h3>
		<?php require ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'aside_menu.html' ?>   
	</div>
</aside>