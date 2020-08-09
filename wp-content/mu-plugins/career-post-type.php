<?php

function career_post_types() {
	register_post_type('career', [
		'public' => true,
		'supports' => ['title', 'editor'],
		'labels' => [
			'name' => 'Careers',
			'singular_name' => 'Career',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event'
		],
		'menu_icon' => 'dashicons-welcome-learn-more'
	]);
}

add_action('init', 'career_post_types');