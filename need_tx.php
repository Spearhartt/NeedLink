<?php

	function nl_define_need_taxonomies() {

		$sing = 'Need Type';
		$plur = 'Need Types';

		$labels = array(
			'name'					=> $plur,
			'singular_name'			=> $sing,
			'search_items'			=> 'Search '.$plur,
			'popular_items'			=> 'Popular '.$plur,
			'all_items'				=> 'All '.$plur,
			'parent_item'			=> 'Parent '.$sing,
			// 'parent_item_colon'		=> 'Parent '.$sing,
			'edit_item'				=> 'Edit '.$sing,
			'update_item'			=> 'Update '.$sing,
			'add_new_item'			=> 'Add New '.$sing,
			'new_item_name'			=> 'New '.$sing.' Name',
			'add_or_remove_items'	=> 'Add or remove '.$plur,
			'choose_from_most_used'	=> 'Choose from most used '.$plur,
			'menu_name'				=> $sing
		); 	

		$args = array(
			'labels'			=> $labels,
			'public' 			=> true,
			'show_in_nav_menus'	=> true,
			'hierarchical'		=> true,
			'show_tagcloud'		=> true,
			'show_ui'			=> true,
			'query_var'			=> true,
			'rewrite'			=> true,
			'query_var'			=> true
		);

		register_taxonomy( 'type', 'need', $args);	

	};

	add_action('init', 'nl_define_need_taxonomies');

?>