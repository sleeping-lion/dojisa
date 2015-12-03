<aside class="col-lg-3 visible-lg">
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
	<div id="side_banner">
		<a href="" title="">
			<img src="/wp-content/themes/sleepinglion/images/banner_invest.jpg" width="262" height="260" alt="" class="img-responsive" />
		</a>
		<br />
		<a href="http://www.gg.go.kr/vilage_making" title="새창으로 열림(따복 공동체)" target="_blank">
			<img src="/wp-content/themes/sleepinglion/images/banner_vilage.jpg" width="262" height="260" alt="" class="img-responsive" />
		</a>
	</div>
</aside>