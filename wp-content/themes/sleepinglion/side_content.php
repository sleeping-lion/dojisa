<li>
	<?php if(has_post_thumbnail()): ?>
	<div class="img">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('100x100'), array('class' => "img-responsive" )) ?></a>
	</div>
		<?php endif ?>
	<div>	
		<p><?php the_date('Y.m.d') ?></p>		
		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" ><?php the_title(); ?></a></h4>
	</div>
</li>