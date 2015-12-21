<article>
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive"); ?>						
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('et-featured-small-thumb', $defalt_arg) ?></a>
		</div>
		<?php endif; ?>
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" ><?php the_title(); ?></a></h2>
		<p class="hidden-xs"><?php the_time('Y.m.d') ?></p>
</article>
