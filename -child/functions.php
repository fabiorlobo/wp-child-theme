<?php

/* 
 * Child Theme example by Fabio Lobo
 * 
 * More info and instructions: https://github.com/fabiorlobo/wp-child-theme
 * Not working at all? See WordPress instructions: https://developer.wordpress.org/themes/advanced-topics/child-themes
 * 
 * Tested with: `hello-elementor`, `rosebud`, `storefront`, `twentynineteen`, `twentytwenty` and `wpcast`
 * 
 * My post about it (pt_BR): https://www.fabiolobo.com.br/alteracoes-tema-wordpress.html
 * 
 */

/* * * * * * * * * * * * * *
	CSS
* * * * * * * * * * * * * */

add_action( 'wp_enqueue_scripts', function() {
	$parent_style = 'parent-style';

	/* PARENT STYLE */
	wp_enqueue_style( $parent_style,
		get_template_directory_uri() . '/style.css'
		// ^ Be sure that '/style.css' is the right path & file!
	);

	/* CHILD STYLE */
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
} );

/* * * * * * * * * * * * * *
	SCRIPTS
* * * * * * * * * * * * * */

/* HEADER */
add_action( 'wp_head', function() { ?>
	
	<!-- INSERT HERE -->

<?php } );

/* FOOTER */
add_action( 'wp_footer', function() { ?>
	
	<!-- INSERT HERE -->

<?php } );