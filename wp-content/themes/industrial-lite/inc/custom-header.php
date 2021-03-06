<?php
/**
 * @package Industrial Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses industrial_lite_header_style()
*/
function industrial_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'industrial_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 134,
		'wp-head-callback'       => 'industrial_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'industrial_lite_custom_header_setup' );

if ( ! function_exists( 'industrial_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see industrial_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'industrial_lite_header_style' );

function industrial_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'industrial-lite-basic-style', $custom_css );
	endif;
}
endif;