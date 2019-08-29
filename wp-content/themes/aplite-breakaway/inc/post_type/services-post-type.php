<?php
add_action('init', 'our_services_post_type_call_back');

	function our_services_post_type_call_back() {		
		$labels= array(
		        'name' => _x('Our Services', 'services'),
		        'singular_name' => _x('Services', 'services'),
		        'add_new' => _x('New service', 'services'),
		        'add_new_item' => __('Add New service'),
		        'edit_item' => __('Edit service'),
		        'new_item' => __('New service'),
		        'all_items' => __('All Services'),
		        'view_item' => __('View Services'),
		        'search_items' => __('Search Service'),
		        'not_found' => __('No services found'),
		        'not_found_in_trash' => __('No services found in the Trash'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Our Service'
		    );
		$args= array(
		        'labels' => $labels,
		        'description' => 'service and services related data will be hold in this',
		        'public' => true,
		        'menu_position' => 24,
		        'menu_icon' => 'dashicons-products',        
		        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		        'has_archive' => true,
		        'show_in_nav_menus' => true,
		        'show_ui' => true,
		        'taxonomies' => array('services_category')  
		    );
		
		    $labels_tax = array(
		        'name'     => _x( 'Service Category', 'Taxonomy General Name', 'text_domain' ),
		        'singular_name' => _x( 'Services Category', 'Taxonomy Singular Name', 'text_domain' ),
		        'menu_name' => __( 'Service Category', 'text_domain' ),
		        'all_items' => __( 'All Category', 'text_domain' ),
		        'parent_item' => __( 'Parent Item', 'text_domain' ),
		        'parent_item_colon' => __( 'Parent Item:', 'text_domain' ),
		        'new_item_name' => __( 'New Category Name', 'text_domain' ),
		        'add_new_item' => __( 'Add New', 'text_domain' ),
		        'edit_item' => __( 'Edit Item', 'text_domain' ),
		        'update_item' => __( 'Update Item', 'text_domain' ),
		        'view_item' => __( 'View Item', 'text_domain' ),
		        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		        'add_or_remove_items' => __( 'Add or remove items', 'text_domain' ),
		        'choose_from_most_used' => __( 'Choose from the most used', 'text_domain' ),
		        'popular_items' => __( 'Popular Items', 'text_domain' ),
		        'search_items' => __( 'Search Items', 'text_domain' ),
		        'not_found'  => __( 'Not Found', 'text_domain' ),
		        'no_terms'  => __( 'No items', 'text_domain' ),
		        'items_list' => __( 'Items list', 'text_domain' ),
		        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		    );
			register_taxonomy(
			    'services_category','service',array(
			        'hierarchical'=>false,
			        'labels'=>$labels_tax,
			        'query_var'=>true,
			        'rewrite'=>true
			        )
			    );
		

		register_post_type('service',$args);
	}