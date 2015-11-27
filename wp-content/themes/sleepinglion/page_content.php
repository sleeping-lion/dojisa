<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-span">
				
		<h1><?php the_title(); ?></h1>
		<div class="space-sep20"></div>
		<div class="blog-post-body"><?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
		</div>
		
	</div>
</div>