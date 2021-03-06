<!DOCTYPE html>
<html class="blue" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width">
<meta name="mobile-web-app-capable" content="yes">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- <link rel="shortcut icon" sizes="196x196" href="http://www.broken-links.com/wp-content/themes/broken-links/images/broken-links-196.png">
<link rel="shortcut icon" sizes="128x128" href="<?php bloginfo('template_directory'); ?>/images/broken-links-128.png">
<link rel="apple-touch-icon" sizes="128x128" href="<?php bloginfo('template_directory'); ?>/images/broken-links-128.png"> -->

<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.blue.png">
<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/manifest.json">
<link rel="logo" type="image/svg" href="<?php bloginfo('template_directory'); ?>/images/broken-links.blue.svg">
<link href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold|Source+Sans+Pro:700" rel="stylesheet" media="screen and (min-width: 481px)">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<!--[if lt IE 8]>
<style>
h1 a, h2 a, h1 a *, h2 a * { color: black; }
header h2 a { color: white; }
</style>
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/legacy/style.ie6.css" media="screen">
<![endif]-->
<script src="<?php bloginfo('url'); ?>/mint/?js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body id="peter-gasston">
<div class="site-top">
	<div class="header" role="banner">
	  <div class="inside">
	    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
	  </div>
	</div>
	<div class="nav" role="navigation">
		<a href="#peter-gasston" class="nav-toggle">Navigation</a>
	  <div class="inside">
	<?php
		$navargs = array(
			'theme_location' => 'primary',
			'container' => '',
			'menu_class' => 'main-nav',
			'menu_id' => ''
		);
		wp_nav_menu($navargs);
	?>
	  </div>
	</div>
</div>
