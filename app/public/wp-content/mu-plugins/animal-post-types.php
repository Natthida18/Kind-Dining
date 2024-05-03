<?php
function create_custom_post_type() {
	// logo post type!
	register_post_type(
		'logo',
		array(
			'show_in_rest' => true,
			'public'       => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'labels'       => array(
				'name'          => 'Logos',
				'add_new'       => 'Add New Logo',
				'add_new_item'  => 'Add New Logo',
				'edit_item'     => 'Edit Logo',
				'all_items'     => 'All Logos',
				'singular_name' => 'Logo',
			),
			'menu_icon'    => 'dashicons-admin-post',
		)
	);
	// animal post type!
	register_post_type(
		'animal',
		array(
			'show_in_rest' => true,
			'public'       => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'labels'       => array(
				'name'          => 'Animals',
				'add_new'       => 'Add New Animal',
				'add_new_item'  => 'Add New Animal',
				'edit_item'     => 'Edit Animal',
				'all_items'     => 'All Animals',
				'singular_name' => 'Animal',
			),
			'menu_icon'    => 'dashicons-pets',
		)
	);

	// video post type!
	register_post_type(
		'video',
		array(
			'show_in_rest' => true,
			'public'       => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'labels'       => array(
				'name'          => 'Videos',
				'add_new'       => 'Add New Video',
				'add_new_item'  => 'Add New Video',
				'edit_item'     => 'Edit Video',
				'all_items'     => 'All Videos',
				'singular_name' => 'Video',
			),
			'menu_icon'    => 'dashicons-format-video',
		)
	);
}

add_action( 'init', 'create_custom_post_type' );
