<?php
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Project Categories.
	 */

	$labels = [
		"name" => __( "Project Categories", "bytebeardigital" ),
		"singular_name" => __( "Project Category", "bytebeardigital" ),
		"menu_name" => __( "Project Categories", "bytebeardigital" ),
		"all_items" => __( "All Project Categories", "bytebeardigital" ),
		"edit_item" => __( "Edit Project Category", "bytebeardigital" ),
		"view_item" => __( "View Project Category", "bytebeardigital" ),
		"update_item" => __( "Update Project Category name", "bytebeardigital" ),
		"add_new_item" => __( "Add new Project Category", "bytebeardigital" ),
		"new_item_name" => __( "New Project Category name", "bytebeardigital" ),
		"parent_item" => __( "Parent Project Category", "bytebeardigital" ),
		"parent_item_colon" => __( "Parent Project Category:", "bytebeardigital" ),
		"search_items" => __( "Search Project Categories", "bytebeardigital" ),
		"popular_items" => __( "Popular Project Categories", "bytebeardigital" ),
		"separate_items_with_commas" => __( "Separate Project Categories with commas", "bytebeardigital" ),
		"add_or_remove_items" => __( "Add or remove Project Categories", "bytebeardigital" ),
		"choose_from_most_used" => __( "Choose from the most used Project Categories", "bytebeardigital" ),
		"not_found" => __( "No Project Categories found", "bytebeardigital" ),
		"no_terms" => __( "No Project Categories", "bytebeardigital" ),
		"items_list_navigation" => __( "Project Categories list navigation", "bytebeardigital" ),
		"items_list" => __( "Project Categories list", "bytebeardigital" ),
		"back_to_items" => __( "Back to Project Categories", "bytebeardigital" ),
	];

	
	$args = [
		"label" => __( "Project Categories", "bytebeardigital" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'project_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "project_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "project_categories", [ "projects" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
