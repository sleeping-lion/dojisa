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
  <link rel="shortcut icon" href="/wp-content/themes/ggdo/images/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
    <!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	  
</head>
<body <?php body_class() ?>>
<header id="header">
	<div class="container-fluid">	
		<div class="row">
			<div class="col-md-12 col-lg-9">
				<h1><a href="<?php echo home_url('/') ?>" title="<?php echo get_bloginfo() ?>"><?php echo get_bloginfo() ?></a></h1>
				<?php require ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'main_menu.html' ?>
			</div>
			<div id="top_right" class="visible-lg col-lg-3">
				<div id="top_menu" class="col-lg-12">
					<ul>
						<li><a href="" title=""><?php echo __('GG Home Page','sleepinglion') ?></a></li>
						<li><a href="" title=""><?php echo __('Site Map','sleepinglion') ?></a></li>
					</ul>
				</div>
				<div class="col-lg-12">
					<div class="btn-group btn-group-sm" style="float:right">
						<button aria-label="Left Align" class="btn btn-default" type="button">T</button>
						<button aria-label="Center Align" class="btn btn-default" type="button">F</button>
						<button aria-label="Justify" class="btn btn-default" type="button">B</button>
        	</div>
        	<form action="" style="float:right">
      		<div class="input-group form-group-sm">
      			<input type="search" class="form-control" placeholder="검색어를 넣어주세요" style="width:140px">
      			<span class="input-group-btn">
      				<button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
		<?php include ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.'sleepinglion'.DIRECTORY_SEPARATOR.'sl_lib'.DIRECTORY_SEPARATOR.'menu'.DIRECTORY_SEPARATOR.'nav_menu_rendering.php' ?>