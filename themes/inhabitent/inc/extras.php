<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


//Change login screen logo
function inhabitent_login_logo () {
	echo '<style type="text/css">
	#login h1 a { 
		background-image:url('.get_template_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important;
		height: 53px !important;
		width: 300px !important;
		background-size: 300px 53px !important;
		background-repeat: no-repeat;
	}
	#login .button.button-primary {
		background-color: #248A83;
	}                        
     </style>';
}
add_action('login_head', 'inhabitent_login_logo');

// Change url destination of login screen logo to site homepage
function inhabitent_login_logo_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );


// Change logo title on login screen
function inhabitent_login_title() {
	return 'Inhabitent';
} 
add_filter( 'login_headertitle', 'inhabitent_login_title');