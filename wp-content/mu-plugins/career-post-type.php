<?php

function career_post_types() {
	register_post_type('career', [
		'public' => true,
		'supports' => ['title'],
		'labels' => [
			'name' => 'Careers',
			'singular_name' => 'Career',
			'edit_item' => 'Edit Career',
			'add_new_item' => 'Add New Career',
		],
		'menu_icon' => 'dashicons-welcome-learn-more'
	]);
}

add_action('init', 'career_post_types');