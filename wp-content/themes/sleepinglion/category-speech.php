<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">
		<div class="row">
			<div id="sub_main" class="col-md-12 col-lg-9">
				<h1 class="h1-page-title"><?php single_cat_title(); ?></h1>
					<?php
				while(have_posts()):the_post();
				get_template_part('speech_list');
				endwhile; ?>		
					<div class="pagination">
						<?php
						if ( get_next_posts_link()):
						echo '<span class="next">';
						next_posts_link(__('Older posts', 'sleepinglion' ).'<span>&rarr;</span>');
						echo '</span>';
						endif;
						?>
						
						<?php
						if ( get_previous_posts_link()): 
						echo '<span class="prev">';
						previous_posts_link('<span>&larr;</span>'.__( 'Newer posts', 'sleepinglion' ));
						echo '</span>'; 
						endif; 
						?>
					</div>
				<?php wp_link_pages(); ?>					
				</div>
			<?php get_sidebar(); ?>	
		</div>			
	</div>	
</div>
<?php get_footer() ?>
