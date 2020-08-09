<?php
function load_css() {
	wp_register_style('css', get_template_directory_uri().'/assets/css/app.css', array(), false, 'all');
	wp_enqueue_style('css');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js() {
	wp_enqueue_script('jquery');
	wp_register_script('js', get_template_directory_uri().'/assets/js/app.js', 'jquery', false, true);
	wp_enqueue_script('js');
}
add_action('wp_enqueue_scripts', 'load_js');

/**
 * handle the process of sending contact form notification
 * 
 * @return 
 */
function contact_form() {

	if ( !wp_verify_nonce($_POST['nonce'], 'ajax-nonce') ) {
		wp_send_json_error('nonce is incorrect', 401);
		die();
	}

	$formData = [];
	wp_parse_str($_POST['contact'], $formData);

	$admin_email = 'agoiabeladeyemi@gmail.com';
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'From: agoiabeladeyemi@gmail.com';
	$headers[] = 'Reply-to:'.$formData['email'];

	$send_to = 'abel@hirefreehands.tech';
	// $send_to = $admin_email;
	$subject = 'Contact us '.$formData['name'];

	$message = '';
	foreach ($formData as $key => $field) {
		$message .= '<strong>'. $key .'</strong> '. $field .'<br />';
	}

	try {
		if (wp_mail($send_to, $subject, $message, $headers)) {
			wp_send_json_success('Thanks for reaching out, we will get intouch');
		} else {
			wp_send_json_error('Email error');
		}
	} catch (Exception $e) {
		wp_send_json_error($e->getMessage());
	}
}

add_action('wp_ajax_contact', 'contact_form');
add_action('wp_ajax_nopriv_contact', 'contact_form');


/**
 * Handle the process of sending career form
 * 
 * @return 
 */
function career_form() {

	if ( !wp_verify_nonce($_POST['nonce'], 'ajax-nonce') ) {
		wp_send_json_error('nonce is incorrect', 401);
		die();
	}

	$formData = [];
	wp_parse_str($_POST['career'], $formData);

	$admin_email = 'agoiabeladeyemi@gmail.com';
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'From: agoiabeladeyemi@gmail.com';
	$headers[] = 'Reply-to:'.$formData['email'];

	$send_to = 'abel@hirefreehands.tech';
	// $send_to = $admin_email;
	$subject = 'Career/Job Application '.$formData['name'];

	$message = '';
	foreach ($formData as $key => $field) {
		$message .= '<strong>'. $key .'</strong> '. $field .'<br />';
	}

	try {
		if (wp_mail($send_to, $subject, $message, $headers)) {
			wp_send_json_success('Thanks for reaching out, we will get intouch');
		} else {
			wp_send_json_error('Email error');
		}
	} catch (Exception $e) {
		wp_send_json_error($e->getMessage());
	}
}

add_action('wp_ajax_career', 'career_form');
add_action('wp_ajax_nopriv_career', 'career_form');




/**
 * Handle the process of sending scholarship
 * 
 * @return 
 */
function scholarship_form() {

	if ( !wp_verify_nonce($_POST['nonce'], 'ajax-nonce') ) {
		wp_send_json_error('nonce is incorrect', 401);
		die();
	}

	$formData = [];
	wp_parse_str($_POST['scholarship'], $formData);

	$admin_email = 'agoiabeladeyemi@gmail.com';
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'From: agoiabeladeyemi@gmail.com';
	$headers[] = 'Reply-to:'.$formData['email'];

	$send_to = 'abel@hirefreehands.tech';
	// $send_to = $admin_email;
	$subject = 'Scholarship Application '.$formData['name'];

	$message = '';
	foreach ($formData as $key => $field) {
		$message .= '<strong>'. $key .'</strong> '. $field .'<br />';
	}

	try {
		if (wp_mail($send_to, $subject, $message, $headers)) {
			wp_send_json_success('Thanks for reaching out, we will get intouch');
		} else {
			wp_send_json_error('Email error');
		}
	} catch (Exception $e) {
		wp_send_json_error($e->getMessage());
	}
}

add_action('wp_ajax_scholarship', 'scholarship_form');
add_action('wp_ajax_nopriv_scholarship', 'scholarship_form');