<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-span">
				
		<h1><?php the_title(); ?></h1>
		<div class="blog-post-details">			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-time"></i>
				<a href="#">
					<?php the_date('j'); ?> <?php the_time('M , Y'); ?>, 
				</a>
			</div>
			
		</div>
		
		<div class="space-sep20"></div>
		<div class="blog-post-body"><?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
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
		
	</div>
</div>