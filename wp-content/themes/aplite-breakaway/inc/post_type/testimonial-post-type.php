<?php
add_action('init', 'testimonial_post_type_call_back');

	function testimonial_post_type_call_back() {		
		$labels= array(
		        'name' => _x('Testimonial', 'testimonial'),
		        'singular_name' => _x('Testimonial', 'testimonial'),
		        'add_new' => _x('New Testimonial', 'testimonial'),
		        'add_new_item' => __('Add New Testimonial'),
		        'edit_item' => __('Edit Testimonial'),
		        'new_item' => __('New Testimonial'),
		        'all_items' => __('All Testimonial'),
		        'view_item' => __('View Testimonial'),
		        'search_items' => __('Search Testimonial'),
		        'not_found' => __('No Testimonial found'),
		        'not_found_in_trash' => __('No Testimonial found in the Trash'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Testimonial'
		    );
		$args= array(
		        'labels' => $labels,
		        'description' => 'Testimonial and testimonials related data will be hold in this',
		        'public' => true,
		        'menu_position' => 23,
		        'menu_icon' => 'dashicons-businessman',        
		        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		        'has_archive' => true,
		        'show_in_nav_menus' => true,
		        'show_ui' => true,
		        'taxonomies' => array('testimonial_category')  
		    );
		
		    $labels_tax = array(
		        'name'     => _x( 'Testimonial Category', 'Taxonomy General Name', 'testimonial' ),
		        'singular_name' => _x( 'Testimonial Category', 'Taxonomy Singular Name', 'testimonial' ),
		        'menu_name' => __( 'Testimonial Category', 'testimonial' ),
		        'all_items' => __( 'All Testimonial', 'testimonial' ),
		        'parent_item' => __( 'Parent Item', 'testimonial' ),
		        'parent_item_colon' => __( 'Parent Item:', 'testimonial' ),
		        'new_item_name' => __( 'New Testimonial', 'testimonial' ),
		        'add_new_item' => __( 'Add New', 'testimonial' ),
		        'edit_item' => __( 'Edit Item', 'testimonial' ),
		        'update_item' => __( 'Update Item', 'testimonial' ),
		        'view_item' => __( 'View Item', 'testimonial' ),
		        'separate_items_with_commas' => __( 'Separate items with commas', 'testimonial' ),
		        'add_or_remove_items' => __( 'Add or remove items', 'testimonial' ),
		        'choose_from_most_used' => __( 'Choose from the most used', 'testimonial' ),
		        'popular_items' => __( 'Popular Items', 'testimonial' ),
		        'search_items' => __( 'Search Items', 'testimonial' ),
		        'not_found'  => __( 'Not Found', 'testimonial' ),
		        'no_terms'  => __( 'No items', 'testimonial' ),
		        'items_list' => __( 'Items list', 'testimonial' ),
		        'items_list_navigation' => __( 'Items list navigation', 'testimonial' ),
		    );
			register_taxonomy(
			    'testimonial_category','testimonial',array(
			        'hierarchical'=>false,
			        'labels'=>$labels_tax,
			        'query_var'=>true,
			        'rewrite'=>true
			        )
			    );
		

		register_post_type('testimonial',$args);
	}