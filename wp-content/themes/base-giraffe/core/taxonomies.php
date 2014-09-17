<?php
	$name_function_taxo = 'taxo_articulos_interest';

	add_action('init', 'taxo_projects');
	function taxo_projects(){
		$labelp = array(
			'name' => _x('Proyectos','post type general name')
		);
		$args = array(
			'labels' => $labelp,
			'public' => true,
			'taxonomies' => array('category', 'post_tag'), 
			'exclude_from_search' => false,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'_builtin' => false,
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => array("slug" => "proyectos-giraffe"),
			'supports' => array('title', 'editor', 'thumbnail', 'comments','excerpt', 'custom-fields', 'cats')
		);
		
		register_post_type('sc-projects', $args);
		flush_rewrite_rules();
	}

	add_action('init', 'taxo_videos');
	function taxo_videos(){
		$labelp = array(
			'name' => _x('SnapVideos','post type general name')
		);
		$args = array(
			'labels' => $labelp,
			'public' => true,
			'taxonomies' => array('category', 'post_tag'), 
			'exclude_from_search' => false,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'_builtin' => false,
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => array("slug" => "snapvideos"),
			'supports' => array('title', 'editor', 'thumbnail', 'comments','excerpt', 'custom-fields', 'cats')
		);
		
		register_post_type('sc-videos', $args);
		flush_rewrite_rules();
	}
?>