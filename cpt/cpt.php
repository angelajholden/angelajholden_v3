<?php 

	function custom_post_type_skills() {
	    $labels = array(
	    'name'               => 'Services',
	    'singular_name'      => 'Service',
	    'add_new'            => 'Add a Service',
	    'add_new_item'       => 'Add New Service',
	    'edit_item'          => 'Edit Service',
	    'new_item'           => 'New Service',
	    'view_item'          => 'View Service',
	    'search_items'       => 'Search Services',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Services',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-coffee',
	    'rewrite'               => array('slug' => 'services'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'author', 'excerpt', 'thumbnail'),
	    'taxonomies'            => array('')
	  );
	  register_post_type( 'ajhskill' , $args );
	};
	add_action('init', 'custom_post_type_skills');

	function custom_post_type_projects() {
	    $labels = array(
	    'name'               => 'Projects',
	    'singular_name'      => 'Project',
	    'add_new'            => 'Add a Project',
	    'add_new_item'       => 'Add New Project',
	    'edit_item'          => 'Edit Project',
	    'new_item'           => 'New Project',
	    'view_item'          => 'View Project',
	    'search_items'       => 'Search Projects',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Projects',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-star-filled',
	    'rewrite'               => array('slug' => 'projects'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt'),
	    'taxonomies'            => array('post_tag')
	  );
	  register_post_type( 'ajhproject' , $args );
	};
	add_action('init', 'custom_post_type_projects');

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_projects();
		custom_post_type_skills();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );

?>