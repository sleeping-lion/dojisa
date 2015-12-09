<?php

$main_menu =' <div id="small_menu"><a id="mobile_menu" href="" class="visible-xs"><span class="glyphicon glyphicon-menu-hamburger"></span><span class="text">메뉴</span></a>';
$main_menu .='<a id="search_btn" href="" class="visible-xs"><span class="glyphicon glyphicon-search"></span><span class="text">검색</span></a></div>';
$main_menu .= '<nav id="gnb">';
$main_menu.=wp_nav_menu(array('theme_location'  => 'sleepinglion','menu' => 'primary','menu_id'=>'menu-gnb','menu_class'=>'gnb','fallback_cb' => false,'echo' => 0));
$main_menu .= '</nav>';

if (!file_put_contents(WP_CACHE_DIR . 'main_menu.html', $main_menu))
	throw new Exception("Error Processing Request", 1);
