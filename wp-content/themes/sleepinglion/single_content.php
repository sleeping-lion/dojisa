<article id="single_content" class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_header">
		<h1 class="col-sm-10 col-xs-12"><?php the_title(); ?></h1>
		<div class="date col-sm-2 hidden-xs">
			<?php the_date('j'); ?> <?php the_time('M , Y'); ?>, 
		</div>
	</div>
	<div class="blog-post-body col-xs-12"><?php the_content( __( 'Read More' , 'sleepinglion' ) ); ?>
		<?php $defaults = array(
		'before'           => '<div class="pagination">' . __( 'Pages:','weblizar' ),
		'after'            => '</div>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page','weblizar' ),
		'previouspagelink' => __( 'Previous page','weblizar' ),
		'pagelink'         => '%',
		'echo'             => 1
		);
		wp_link_pages( $defaults );
		?>
		</div>
</article>