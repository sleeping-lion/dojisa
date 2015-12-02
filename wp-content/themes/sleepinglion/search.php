<?php get_header('nonav') ?>
<div id="sub_main_wrap">
	<div class="container">	
		<div class="row">
			<div id="sub_main" class="col-md-12 col-lg-9">
			<h1><?php printf( __( 'Search Results for: %s', 'sleepinglion' ), '<span>' . get_search_query() . '</span>' ); ?></h1>									
							<?php if ( have_posts() ) : 
							while(have_posts()): the_post(); ?>							
							<div class="blog-span"><?php /* Start the Loop */ ?>			
								<?php get_template_part( 'content', get_post_format() ); ?>
								<div class="space-sep20"></div>
							</div>
							<?php endwhile; 
							else : ?>
							<div class="blog-span">	
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nothing Found', 'sleepinglion' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'sleepinglion' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
							</div>
						<?php endif; ?>
			</div>				
			<?php get_sidebar() ?>	
		</div>			
	</div>			
</div>
<?php get_footer() ?>