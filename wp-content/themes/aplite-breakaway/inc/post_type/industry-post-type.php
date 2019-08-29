<?php
add_action('init', 'industry_post_type_call_back');

	function industry_post_type_call_back() {		
		$labels= array(
		        'name' => _x('Industry', 'industry'),
		        'singular_name' => _x('Industry', 'industry'),
		        'add_new' => _x('New Industry', 'industry'),
		        'add_new_item' => __('Add New Industry'),
		        'edit_item' => __('Edit Industry'),
		        'new_item' => __('New Industry'),
		        'all_items' => __('All Industry'),
		        'view_item' => __('View Industry'),
		        'search_items' => __('Search Industry'),
		        'not_found' => __('No Industry found'),
		        'not_found_in_trash' => __('No Industry found in the Trash'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Industry'
		    );
		$args= array(
		        'labels' => $labels,
		        'description' => 'Industry and Industries related data will be hold in this',
		        'public' => true,
		        'menu_position' =>23,
		        'menu_icon' => 'dashicons-money',        
		        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		        'has_archive' => true,
		        'show_in_nav_menus' => true,
		        'show_ui' => true,
		        'taxonomies' => array('industry_category')  
		    );
		
		    $labels_tax = array(
		        'name'     => _x( 'Industry Category', 'Taxonomy General Name', 'industry' ),
		        'singular_name' => _x( 'Industry Category', 'Taxonomy Singular Name', 'industry' ),
		        'menu_name' => __( 'Industry Category', 'industry' ),
		        'all_items' => __( 'All Industry', 'industry' ),
		        'parent_item' => __( 'Parent Item', 'industry' ),
		        'parent_item_colon' => __( 'Parent Item:', 'industry' ),
		        'new_item_name' => __( 'New Industry', 'industry' ),
		        'add_new_item' => __( 'Add New', 'industry' ),
		        'edit_item' => __( 'Edit Item', 'industry' ),
		        'update_item' => __( 'Update Item', 'industry' ),
		        'view_item' => __( 'View Item', 'industry' ),
		        'separate_items_with_commas' => __( 'Separate items with commas', 'industry' ),
		        'add_or_remove_items' => __( 'Add or remove items', 'industry' ),
		        'choose_from_most_used' => __( 'Choose from the most used', 'industry' ),
		        'popular_items' => __( 'Popular Items', 'industry' ),
		        'search_items' => __( 'Search Items', 'industry' ),
		        'not_found'  => __( 'Not Found', 'industry' ),
		        'no_terms'  => __( 'No items', 'industry' ),
		        'items_list' => __( 'Items list', 'industry' ),
		        'items_list_navigation' => __( 'Items list navigation', 'industry' ),
		    );
			register_taxonomy(
			    'industry_category','industry',array(
			        'hierarchical'=>false,
			        'labels'=>$labels_tax,
			        'query_var'=>true,
			        'rewrite'=>true
			        )
			    );
		

		register_post_type('industry',$args);
	}