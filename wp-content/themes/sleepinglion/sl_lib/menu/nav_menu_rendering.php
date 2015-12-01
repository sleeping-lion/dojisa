<?php

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2);
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu($sorted_menu_items, $args) {

	if (isset($args -> main_menu)) {
		if (is_single()) {
			$category=get_the_category($post->ID);
			$term_id=$category[0] -> term_id;
			
			foreach ($sorted_menu_items as $menu_item) {
				if ($menu_item -> object_id == $term_id) {
					$current_id = $menu_item -> menu_item_parent;
				}
			}
			
			foreach ($sorted_menu_items as $key=>$value) {
				if ($value -> menu_item_parent==0) {
					if($value -> ID==$current_id) {
						$sorted_menu_items[$key]->classes[] = 'current-menu-parent';
					}
				} else {
					unset($sorted_menu_items[$key]);
				}
			}
		} else {
			foreach ($sorted_menu_items as $key=>$value) {
				if ($value -> menu_item_parent!=0) {
					unset($sorted_menu_items[$key]);
				}
			}
		}
	}

	if (isset($args -> sub_menu)) {
		if(is_single()) {
			$category=get_the_category($post->ID);
			$term_id=$category[0] -> term_id;
			
			foreach ($sorted_menu_items as $menu_item) {
				if ($menu_item -> object_id == $term_id) {
					$current_id = $menu_item -> object_id;
					$parent_id = $menu_item -> menu_item_parent;					
				}
			}
			
			foreach ($sorted_menu_items as $key=>$value) {
				if ($value -> menu_item_parent!=0) {
					if($parent_id==$value->menu_item_parent) {					
						if($value -> ID==$current_id) {
							$sorted_menu_items[$key]->classes[] = 'current-menu-parent';
						}
					} else {
						unset($sorted_menu_items[$key]);
					}
				} else {
					unset($sorted_menu_items[$key]);
				}
			}				
			
		} else {
		$root_id = 0;

		// find the current menu item
		foreach ($sorted_menu_items as $menu_item) {
			if ($menu_item -> current) {
				// set the root id based on whether the current menu item has a parent or not
				$root_id = ($menu_item -> menu_item_parent) ? $menu_item -> menu_item_parent : $menu_item -> ID;
				break;
			}
		}

		// find the top level parent
		if (!isset($args -> direct_parent)) {
			$prev_root_id = $root_id;
			while ($prev_root_id != 0) {
				foreach ($sorted_menu_items as $menu_item) {
					if ($menu_item -> ID == $prev_root_id) {
						$prev_root_id = $menu_item -> menu_item_parent;
						// don't set the root_id to 0 if we've reached the top of the menu
						if ($prev_root_id != 0)
							$root_id = $menu_item -> menu_item_parent;
						break;
					}
				}
			}
		}
		$menu_item_parents = array();
		foreach ($sorted_menu_items as $key => $item) {
			// init menu_item_parents
			if ($item -> ID == $root_id)
				$menu_item_parents[] = $item -> ID;
			if (in_array($item -> menu_item_parent, $menu_item_parents)) {
				// part of sub-tree: keep!
				$menu_item_parents[] = $item -> ID;
			} else if (!(isset($args -> show_parent) && in_array($item -> ID, $menu_item_parents))) {
				// not part of sub-tree: away with it!
				unset($sorted_menu_items[$key]);
			}
		}
		}
	}

	return $sorted_menu_items;
}
?>

<div id="sub_top_nav_menu">
	<div class="container">
		<nav class="row">
			<ul class="col-sm-12 col-md-8 col-lg-9">
				<li class="sub_menu depth-home">
					<a href="<?php echo get_home_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="text">Home</span></a>
				</li>
				<li class="sub_menu">
					&nbsp;<?php wp_nav_menu(array('theme_location'  => 'sleepinglion','menu'=>'primary','menu_id'=>'primary_nav_menu','container' => 'li','fallback_cb'=>false,'main_menu'=>true)) ?>
					<span class="glyphicon glyphicon-chevron-down">&nbsp;</span>
				</li>
				<li class="sub_menu">
					&nbsp;<?php wp_nav_menu(array('theme_location'  => 'sleepinglion','menu'=>'primary','menu_id'=>'sub_nav_menu','container' => 'li','fallback_cb'=>false,'sub_menu' => true)) ?>
					<span class="glyphicon glyphicon-chevron-down">&nbsp;</span>
				</li>
			</ul>
		</nav>
	</div>
</div>