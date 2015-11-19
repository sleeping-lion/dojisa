<?php


$args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'submenu'=>0
     );

	if(count($amenu1)) {
		$a_sub_menu=array();
		foreach($amenu1 as $index=>$value) {
			
			if(empty($value))
				continue;
			
			$nav_menu='';

$args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'submenu' =>$value,
        'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );
			$a_sub_menu[$index]=wp_get_nav_menu_items('primary',$args);


			$submenu='<ul>';
			foreach($a_sub_menu[$index] as $index2=>$value2) {
				$submenu.'<li><a href="'.$value2->url.'">'.$value2->title.'</pre></li>';
			}
			$submenu.='<ul>';
			
			$nav_menu=$nav_menu_open.$menu1.$submenu.$nav_menu_close;

		}
	}
?>
<nav id="sub_top_menu">
	<div class="container">
		<li class="sub_menu depth-home"><a href="<?php echo get_home_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="text">Home</span></a></li>
		<?php wp_nav_menu(array('theme_location'  => 'sleepinglion','menu'=>'primary','container' => 'li','fallback_cb' => false,'echo' => 1,'depth'=>2)) ?>
	</div>
</nav>

