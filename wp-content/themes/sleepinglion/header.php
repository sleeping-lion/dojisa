<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->	
  <meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php echo get_the_title() ?> | <?php bloginfo( 'name' ) ?></title>
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
  <link rel="shortcut icon" href="/wp-content/themes/sleepinglion/images/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/sleepinglion/css/ie.css" />  			
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body <?php body_class() ?>>
<header id="header">
	<div class="container">	
		<div class="row">
<div id="small_menu">
	<a id="mobile_menu" href=""><span class="glyphicon glyphicon-menu-hamburger"></span><span class="text">메뉴</span></a>
	<a id="search_btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span><span class="text">검색</span></a>
</div>
			<div class="col-xs-12">
				<h1><a href="<?php echo home_url('/') ?>" title="<?php echo get_bloginfo() ?>"><?php echo get_bloginfo() ?></a></h1>
				<?php require ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'main_menu.html' ?>
			</div>
			<div id="top_right">
				<div id="top_menu" class="col-lg-12">
					<ul>
						<li><a href="http://www.gg.go.kr" title="새창으로 열림(경기도 홈페이지)" target="_blank"><?php echo __('GG Home Page','sleepinglion') ?></a></li>
						<li><a href="/sitemap" title="사이트맵"><?php echo __('Site Map','sleepinglion') ?></a></li>
					</ul>
				</div>
				<div class="col-lg-12">
        	<form action="/">
      		<div class="input-group form-group-md">
      <input type="search" name="s" class="form-control" placeholder="검색어를 넣어주세요">
      <span class="input-group-btn">
      				<button class="btn btn-default btn-md" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      			</span>
      			</div>
      		</form>
      	</div>
			</div>
		</div>
	</div>
</header>
<!--- open mom -->
<div id="mom">
	<!--  open main -->
	<div id="main">
		<div id="top_image">&nbsp;</div>
		<?php require ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.'sleepinglion'.DIRECTORY_SEPARATOR.'sl_lib'.DIRECTORY_SEPARATOR.'menu'.DIRECTORY_SEPARATOR.'nav_menu_rendering.php' ?>