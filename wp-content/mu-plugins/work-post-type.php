<?php

function work_post_types() {
	register_post_type('work', [
		'public' => true,
		'supports' => ['title'],
		'labels' => [
			'name' => 'Works',
			'singular_name' => 'Work',
			'add_new_item' => 'Add New Work',
			'edit_item' => 'Edit Work'
		],
		'menu_icon' => 'dashicons-welcome-learn-more'
	]);
}

add_action('init', 'work_post_types');