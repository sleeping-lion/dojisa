<article class="sl_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
	<p class="date"><?php the_date('Y.m.d'); ?></p>
	
	<?php if(get_the_tag_list() != ''): ?>
			<div class="tags">
				<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
			<?php the_tags('<span style="color:red">#</span>', '&nbsp; <span style="color:red">#</span>', '<br />'); ?>										
			</div>
	<?php endif ?>
	<?php include 'social_share.php' ?>
</article>