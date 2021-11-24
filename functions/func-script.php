<?php
/**
 * Script functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme scripts
 */
function gulp_wp_theme_scripts() {

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	$theme_handle_prefix = 'bytebeardigital';
	wp_enqueue_script('jquery');
		/**
	 * Enqueue common scripts.
	 */
	    // Bootstrap : load js part from cdn
		wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');

		//Slick Carousel
		wp_enqueue_script('slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	// FontAwesome
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/de1f4c5b62.js');

	wp_enqueue_script( $theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_scripts' );
