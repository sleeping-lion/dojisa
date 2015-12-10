<article class="sl_post category_speech" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
	<p class="date"><?php the_date('Y.m.d'); ?></p>
	
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
	
	<?php if(get_the_tag_list() != ''): ?>
			<div class="tags">
				<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
			<?php the_tags('<span style="color:red">#</span>', '&nbsp; <span style="color:red">#</span>', '<br />'); ?>										
			</div>
	<?php endif ?>
	<?php include 'social_share.php' ?>
</article>