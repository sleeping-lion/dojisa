<div class="col-sm-4 col-md-4">
	<article>
		<?php if(has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>						
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', $defalt_arg) ?></a>
		</div>
		<?php endif; ?>
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" ><?php the_title(); ?></a></h2>
		<p><?php the_time('Y.m.d'); ?></p>
	</article>
</div>
