<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-span">
				
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
		<div class="blog-post-details">			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-time"></i>
				<a href="#">
					<?php the_date('j'); ?> <?php the_time('M , Y'); ?>, 
				</a>
			</div>
			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-user"></i>
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a>
			</div>
			
			<?php if(get_the_tag_list() != '') { ?>
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-tags"></i><?php the_tags('', ', ', '<br />'); ?>									
			</div>
			<?php } ?>
			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-comment"></i>
				
					<?php comments_number( 'No Comments', 'one comments', '% comments' ); ?>
				
			</div>			
		</div>
		
		<div class="space-sep20"></div>
		<div class="blog-post-body"><?php the_content( __( 'Read More' , 'sleepinglion' ) ); ?>
		<?php $defaults = array(
		'before'           => '<div class="pagination">' . __( 'Pages:','sleepinglion' ),
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
</article>