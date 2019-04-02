<?php  
	add_theme_support( 'post-thumbnails' );

	add_theme_support('menus');
	register_nav_menus( array(
		'header-menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	) );

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();

	}
?>