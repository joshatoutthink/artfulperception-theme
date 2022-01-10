<?php
/**
 * Artfulperception Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Artfulperception
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ARTFULPERCEPTION_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'artfulperception-css', get_stylesheet_directory_uri() . '/css/application.css',  '1.0.0', 'all' );
	wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() . '/style.css',  CHILD_THEME_ARTFULPERCEPTION_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 * TODO
 *
 * get styles working
 * header.php
 * footer.php
 * create page templates
 * replace the content with dynamic content
 *
 */

add_action( 'init', 'include_astra_template_functions', 15 );

function include_astra_template_functions(){
	require get_theme_root() . '/astra/inc/core/class-astra-icons.php';
	require get_theme_root() . '/astra/inc/core/theme-hooks.php';
	require get_theme_root() . '/astra/inc/core/class-theme-strings.php';
	require get_theme_root() . '/astra/inc/extras.php';
	require get_theme_root() . '/astra/inc/core/class-astra-attr.php';
}
define('ASTRA_THEME_SETTINGS','');
