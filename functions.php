<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hody-rsgp
 * @since 1.0.1
 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * The theme version.
 *
 * @since 2.0.1
 */
define( 'HODY_RSGP_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue Parent Style
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hody_rsgp_styles() {
	wp_enqueue_style(
		'hody-rsgp-style',
		get_stylesheet_uri(),
		[],
		HODY_RSGP_VERSION
	);
	wp_enqueue_style(
		'hody-rsgp-parent-style',
		get_theme_file_uri( 'assets/css/style.min.css' ),
		[],
		HODY_RSGP_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'hody_rsgp_styles' );