<?php get_header() ?>
<div class="container">	
	<div class="row">
		<div id="sub_main" class="col-sm-12 col-md-8 col-lg-9">
			<h1 class="h1-page-title"><?php single_cat_title(); ?></h1>
					<?php
				while(have_posts()):the_post();
				global $more; $more = 0;
				get_template_part('list');
				endwhile; ?>		
					<div class="pagination"><?php 
						if ( get_next_posts_link() ): 
						next_posts_link('<span class="prev">&larr;</span>'.__('Older posts', 'sleepinglion' ) ); 
						endif;
						
						if ( get_previous_posts_link() ): 
						previous_posts_link( __( 'Newer posts', 'sleepinglion' ). '<span class="next">&rarr;</span>' ); 
						endif; ?>
					</div>
				<?php wp_link_pages(); ?>					
				</div>
			<?php get_sidebar(); ?>	
		</div>			
	</div>	
</div>
<?php get_footer() ?>
