<article id="single_content" class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_header">
		<h1 class="col-sm-10 col-xs-12"><?php the_title(); ?></h1>
		<div class="date col-sm-2 hidden-xs">
			<?php the_date('Y.m.d'); ?>
		</div>
	</div>
	<div class="blog-post-body col-xs-12"><?php the_content( __( 'Read More' , 'sleepinglion' ) ); ?></div>
	<div id="sl_bottom_link" class="col-xs-12">
		<div class="col-xs-6 prev">		
		<?php previous_post_link(); ?>
		</div>
		<div class="col-xs-6 next">
		<?php next_post_link(); ?>
		</div>			
	</div>
</article>