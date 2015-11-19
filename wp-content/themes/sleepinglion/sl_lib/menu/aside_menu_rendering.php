<?php

$main_menu = '<nav id="gnb">';
$main_menu.=wp_nav_menu(array('theme_location'  => 'sleepinglion','menu' => 'aside_menu','fallback_cb' => false,'echo' => 0));
$main_menu .= '</nav>';

if (!file_put_contents(WP_CACHE_DIR . 'aside_menu.html', $main_menu))
	throw new Exception("Error Processing Request", 1);
