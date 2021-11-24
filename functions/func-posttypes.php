<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "bytebeardigital" ),
		"singular_name" => __( "Service", "bytebeardigital" ),
		"menu_name" => __( "Services", "bytebeardigital" ),
		"all_items" => __( "All Services", "bytebeardigital" ),
		"add_new" => __( "Add new", "bytebeardigital" ),
		"add_new_item" => __( "Add new Service", "bytebeardigital" ),
		"edit_item" => __( "Edit Service", "bytebeardigital" ),
		"new_item" => __( "New Service", "bytebeardigital" ),
		"view_item" => __( "View Service", "bytebeardigital" ),
		"view_items" => __( "View Services", "bytebeardigital" ),
		"search_items" => __( "Search Services", "bytebeardigital" ),
		"not_found" => __( "No Services found", "bytebeardigital" ),
		"not_found_in_trash" => __( "No Services found in trash", "bytebeardigital" ),
		"parent" => __( "Parent Service:", "bytebeardigital" ),
		"featured_image" => __( "Featured image for this Service", "bytebeardigital" ),
		"set_featured_image" => __( "Set featured image for this Service", "bytebeardigital" ),
		"remove_featured_image" => __( "Remove featured image for this Service", "bytebeardigital" ),
		"use_featured_image" => __( "Use as featured image for this Service", "bytebeardigital" ),
		"archives" => __( "Service archives", "bytebeardigital" ),
		"insert_into_item" => __( "Insert into Service", "bytebeardigital" ),
		"uploaded_to_this_item" => __( "Upload to this Service", "bytebeardigital" ),
		"filter_items_list" => __( "Filter Services list", "bytebeardigital" ),
		"items_list_navigation" => __( "Services list navigation", "bytebeardigital" ),
		"items_list" => __( "Services list", "bytebeardigital" ),
		"attributes" => __( "Services attributes", "bytebeardigital" ),
		"name_admin_bar" => __( "Service", "bytebeardigital" ),
		"item_published" => __( "Service published", "bytebeardigital" ),
		"item_published_privately" => __( "Service published privately.", "bytebeardigital" ),
		"item_reverted_to_draft" => __( "Service reverted to draft.", "bytebeardigital" ),
		"item_scheduled" => __( "Service scheduled", "bytebeardigital" ),
		"item_updated" => __( "Service updated.", "bytebeardigital" ),
		"parent_item_colon" => __( "Parent Service:", "bytebeardigital" ),
	];

	$args = [
		"label" => __( "Services", "bytebeardigital" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "http://bytebeardigital.local/wp-content/uploads/2021/11/breifcase.png",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "page-attributes", "post-formats" ],
		"taxonomies" => [ "project_categories" ],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );

	/**
	 * Post Type: Portfolio.
	 */

	$labels = [
		"name" => __( "Portfolio", "bytebeardigital" ),
		"singular_name" => __( "Project", "bytebeardigital" ),
		"menu_name" => __( "Portfolio", "bytebeardigital" ),
		"all_items" => __( "All Project", "bytebeardigital" ),
		"add_new" => __( "Add new", "bytebeardigital" ),
		"add_new_item" => __( "Add new Project", "bytebeardigital" ),
		"edit_item" => __( "Edit Project", "bytebeardigital" ),
		"new_item" => __( "New Project", "bytebeardigital" ),
		"view_item" => __( "View Project", "bytebeardigital" ),
		"view_items" => __( "View Portfolio", "bytebeardigital" ),
		"search_items" => __( "Search Portfolio", "bytebeardigital" ),
		"not_found" => __( "No Portfolio found", "bytebeardigital" ),
		"not_found_in_trash" => __( "No Portfolio found in trash", "bytebeardigital" ),
		"parent" => __( "Parent Project:", "bytebeardigital" ),
		"featured_image" => __( "Featured image for this Project", "bytebeardigital" ),
		"set_featured_image" => __( "Set featured image for this Project", "bytebeardigital" ),
		"remove_featured_image" => __( "Remove featured image for this Project", "bytebeardigital" ),
		"use_featured_image" => __( "Use as featured image for this Project", "bytebeardigital" ),
		"archives" => __( "Project archives", "bytebeardigital" ),
		"insert_into_item" => __( "Insert into Project", "bytebeardigital" ),
		"uploaded_to_this_item" => __( "Upload to this Project", "bytebeardigital" ),
		"filter_items_list" => __( "Filter Portfolio list", "bytebeardigital" ),
		"items_list_navigation" => __( "Portfolio list navigation", "bytebeardigital" ),
		"items_list" => __( "Portfolio list", "bytebeardigital" ),
		"attributes" => __( "Portfolio attributes", "bytebeardigital" ),
		"name_admin_bar" => __( "Project", "bytebeardigital" ),
		"item_published" => __( "Project published", "bytebeardigital" ),
		"item_published_privately" => __( "Project published privately.", "bytebeardigital" ),
		"item_reverted_to_draft" => __( "Project reverted to draft.", "bytebeardigital" ),
		"item_scheduled" => __( "Project scheduled", "bytebeardigital" ),
		"item_updated" => __( "Project updated.", "bytebeardigital" ),
		"parent_item_colon" => __( "Parent Project:", "bytebeardigital" ),
	];

	$args = [
		"label" => __( "Portfolio", "bytebeardigital" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "projects", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "projects", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
