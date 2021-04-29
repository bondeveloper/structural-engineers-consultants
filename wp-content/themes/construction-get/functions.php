<?php
/**
* Construction Get functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Construction Get

* Child theme Functions file
*
* @link http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme 
*
* Function to dequeue child theme style from parent theme and google font.
* Construction Get
* Since 1.0.0
*/

function construction_get_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style('construction-get-googleapis', '//fonts.googleapis.com/css?family=Alegreya:400,500,700,800', array(), null);
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'construction_get_enqueue_child_styles' );

/*Write here your own functions */
