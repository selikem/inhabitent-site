<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<div class="logo"><a href=<?php echo esc_url( home_url()) ?> rel="home"><h1 class="site-title">Inhabitent</h1></a></div>
				</div><!-- .site-branding -->
				<div class="nav-and-search-container">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<div class="header-search">
						<form action="<?php echo get_site_url()?>" class="search-form" method="get">
							<a href="#" class="search-toggle">
								<i class="fa fa-search" aria-hidden="true"></i>
							</a>
							<input type="search" class="nav-search-field" placeholder="Type and hit enter..." name="s" title="Search for:">
						</form>
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
