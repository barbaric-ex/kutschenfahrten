<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' :';
									} ?> <?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">

	<link href="<?php echo get_template_directory_uri(); ?>/css/animsition.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/dzsparallaxer/dzsparallaxer.css" rel='stylesheet'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css">

	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
	<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
	<meta property="og:image" itemprop="image" content="<?php echo get_template_directory_uri(); ?>/img/og-img.jpg">
	<meta property="og:type" content="website" />

	<?php wp_head() ?>

	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

</head>

<body id="page-top" <?php body_class(); ?>>
	<div class="page-wrap">
		<nav class="navbar navbar-expand-lg navbar-default fixed-top " id="mainNav">
			<div class="menu_bar_nav"></div>
			<div class="left_logo_wrap">
				<div class="clipped_content">

				</div>
			</div>
			<div class="container">
				<div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
				<div class="logo animsition-link"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo/logo_main2.png" alt="Name"></a></div>
				<div class="collapse navbar-collapse " id="navbarResponsive">
					<?php
					wp_nav_menu(array(
						'theme_location'  => 'primary',
						'depth'           => 2,
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav ml-auto animsition-link',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					));
					?>
				</div>
			</div>
		</nav>

		<div class="animsition">