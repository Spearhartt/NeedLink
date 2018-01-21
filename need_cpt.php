<?php
	// Define custom post type
	function nl_define_need_post() {

		$sing = 'Need';
		$plur = 'Needs';

		$labels = array(
			'name'               => $plur,
			'singular_name'      => $sing,
			'menu_name'          => $plur,
			'name_admin_bar'     => $sing,
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New '.$sing,
			'new_item'           => 'New '.$sing,
			'edit_item'          => 'Edit '.$sing,
			'view_item'          => 'View '.$sing,
			'all_items'          => 'All '.$plur,
			'search_items'       => 'Search '.$plur,
			'parent_item_colon'  => 'Parent '.$plur.':',
			'not_found'          => 'No '.$plur.' found.',
			'not_found_in_trash' => 'No '.$plur.' found in Trash.'
		);

		$args = array( 
			'labels'		=> $labels,
			'public'		=> true,
			'rewrite'		=> array( 'slug' => 'recipe' ),
			'has_archive'   => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-sos'
			// 'taxonomies'	=> array( 'post_tag', 'category' )
		);

		register_post_type('needs', $args);

	};
	
	add_action('init', nl_define_need_post);
?>