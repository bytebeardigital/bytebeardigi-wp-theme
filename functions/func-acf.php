<?php
/**
 * Advancded Custom Fields
 * 
 * 
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'global-theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Settings',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'global-theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Test Settings',
		'menu_title'	=> 'Test',
		'parent_slug'	=> 'global-theme-settings',
	));
	
}