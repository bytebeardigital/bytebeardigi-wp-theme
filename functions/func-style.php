<?php

/**
 * Style functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme styles.
 */
function gulp_wp_theme_styles()
{

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */


	$theme_handle_prefix = 'bytebeardigital';


	// // Bootstrap : load css part from cdn
	wp_enqueue_style('bootstrap-nav', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css');


	wp_enqueue_style($theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/' . $theme_handle_prefix . '.css');

	wp_enqueue_style('slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	// FontAwesome
	wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/de1f4c5b62.js');
}
add_action('wp_enqueue_scripts', 'gulp_wp_theme_styles');