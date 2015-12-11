<?php get_header() ?>
<div id="sub_main_wrap">
	<div class="container">
		<div class="row">
			<div id="sub_main" class="col-sm-12 col-lg-9">		
				<h1 class="col-sm-12 col-md-6">공약실천계획</h1>
				<ul id="add_menu" class="visible-md visible-lg col-md-6">
				  <li class="col-md-6"><a href="http://ebook.gg.go.kr/20151103_165139" target="_blank" title="새창으로 열림(E-book으로 보기)">E-book으로 보기</a></li>
      		<li class="col-md-6"><a href="http://www.gg.go.kr/wp-content/uploads/2015/11/manifesto.pdf" target="_blank" title="새창으로열림(PDF 보기)">PDF 보기</a></li>
      	</ul>				
				<section id="management_card"  class="col-sm-12">				
<?php
$show=false;


 $terms = get_terms("manifesto-category", array( 	'hide_empty' => 0, 'parent' => 0 ) );
 if (count($terms)){
     echo '<ul class="category_list">';
     foreach ( $terms as $term ) {
       echo '<li class="category_name"><h2>' . $term->name . '</h2>';

$term_id = $term->term_id;
$taxonomy_name = 'manifesto-category';
$termchildren = get_term_children( $term_id, $taxonomy_name );

foreach ( $termchildren as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	$show=false;
	
	if(isset($_GET['mainfesto_category_id'])) {
	 	if($_GET['mainfesto_category_id']==$term->term_id) {
	 		$show=true;
		 } 
	}
?>	
<article class="mainfesto_category">
	<h3 id="mainfesto_category_<?php echo $term->term_id ?>"><a href="?mainfesto_category_id=<?php echo $term->term_id ?>#mainfesto_category_<?php echo $term->term_id ?>"><?php echo $term->name ?><span class="glyphicon <?php if($show): ?>glyphicon-chevron-up<?php else: ?>glyphicon-chevron-down<?php endif ?>">&nbsp;</span></h3></a>
	<div class="content" <?php if($show): ?>style="display:block"<?php endif ?>>
<?php	

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
	echo '</article>';
	
	
}

echo "</li>";
        
     }
     echo "</ul>";
 }


?>
</section>
			</div>				
			<?php get_sidebar() ?>	
		</div>			
	</div>			
</div>
<?php
	wp_enqueue_script('management-js', get_template_directory_uri() . '/js/management_card.js', '1.0.0', true); 
get_footer() 
?>
