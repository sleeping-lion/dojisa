<?php
add_action('admin_menu', 'menu_html_render');

function menu_html_render() {
	$page_title = '메뉴 HTML 생성';
	$menu_title = '메뉴 HTML 생성';
	$capability = 'manage_options';
	$menu_slug = 'menu-rendering';
	$function = 'menu_html_render_pages';
	add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);
}

function menu_html_render_pages() {
	try {
		define('WP_CACHE_DIR', WP_CONTENT_DIR . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR);
		include __DIR__ . DIRECTORY_SEPARATOR . 'menu_rendering.php';
		echo '<br/>';
		echo '<br/>';
		echo '메인 메뉴 변경사항이 ' . $html_file . '에 저장되었습니다.';
		echo '<br/>';
		include __DIR__ . DIRECTORY_SEPARATOR . 'nav_menu_rendering.php';
		echo '<br/>';
		echo '<br/>';
		echo '네비 메뉴 변경사항이 ' . $html_file . '에 저장되었습니다.';
		echo '<br/>';		
		include __DIR__ . DIRECTORY_SEPARATOR . 'aside_menu_rendering.php';
		echo '<br/>';
		echo '<br/>';
		echo '사이드 메뉴 변경사항이 ' . $html_file . '에 저장되었습니다.';
		echo '<br/>';
	} catch(Exception $e) {
		echo $e -> getMessage();
	}
}
