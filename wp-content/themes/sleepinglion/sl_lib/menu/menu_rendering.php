<?php

$main_menu = '<nav id="gnb" class="hidden-xs">';
$main_menu.=wp_nav_menu(array('theme_location'  => 'sleepinglion','menu' => 'primary','menu_id'=>'menu-gnb','menu_class'=>'gnb','fallback_cb' => false,'echo' => 0));
$main_menu .= '</nav>';

if (!file_put_contents(WP_CACHE_DIR . 'main_menu.html', $main_menu))
	throw new Exception("Error Processing Request", 1);
