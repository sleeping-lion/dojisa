<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">
		<div class="row">
			<div id="sub_main" class="col-sm-12 col-lg-9">
<?php

 $terms = get_terms("manifesto-category", array( 	'hide_empty' => 0, 'parent' => 0 ) );
 $count = count($terms);
 
 if ( $count > 0 ){
     echo '<ul class="man-root-cat">';
     foreach ( $terms as $term ) {
       echo '<li><h3 class="man-root-cat-title">' . $term->name . '</h3>';



$term_id = $term->term_id;
$taxonomy_name = 'manifesto-category';
$termchildren = get_term_children( $term_id, $taxonomy_name );

foreach ( $termchildren as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	echo '<div class="et-learn-more clearfix">';
	echo '		<h3 class="heading-more">'.$term->name.'<span class="et_learnmore_arrow"><span></span></span></h3>';
	echo '		<div class="learn-more-content" style="visibility: visible; display: none;">';
	

			$args = array(
				'post_type' => 'manifesto',
				'tax_query' => array( array(
						'taxonomy' => 'manifesto-category',
						'field' => 'id',
						'terms' => $term->term_id
						)
				),
										'orderby' => 'post_title',
						'order'	=> 'ASC',

			);
			$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
			
			
		
			echo '<ul class="">';
			while ( $query->have_posts() ) : $query->the_post();
				echo '<li>';
				echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
				echo '</li>';
			endwhile;
			echo '</ul>';
		else :
			echo wpautop( '죄송합니다 등록된 공약이 없습니다.' );
		endif;

		wp_reset_query();

			echo '</div>';
	echo '</div>';
	
	
}

echo "</li>";
        
     }
     echo "</ul>";
 }


?>
			</div>				
			<?php get_sidebar() ?>	
		</div>			
	</div>			
</div>
<?php
	wp_enqueue_script('profile-js', get_template_directory_uri() . '/js/profile.js', '1.0.0', true); 
get_footer() 
?>
