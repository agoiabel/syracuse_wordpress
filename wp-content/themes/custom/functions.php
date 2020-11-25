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

	$message = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="format-detection" content="telephone=no"> 
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
		    <title>New Contact Form Field</title>
		    <style>		        
		        html body {
		            font-family: "Ubuntu", sans-serif;
		            background: #efefef !important;
		            width: 100%; 
		        }

		        h1{
		            font-size: 2em;
		            color: #0BC773;
		        }
		        
		        h2 {
		            font-size: 1.2em;
		            color: #fff;
		        }
		        
		        .btn{
		            padding: 16px 25px;
		            border:2px solid  #fff;
		            text-decoration: none;
		            
		        }
		    
		        .footer {
		            text-align: center;
		        }
		        
		        .footer a {
		            display: inline;
		            text-decoration: none;
		        }
		        
		        a {
		            text-decoration: none;
		        }
		        
		        p {
		            color: #111;
		            font-size: 1em;
		        }
		        
		        @media only screen and (max-device-width: 780px){
		          .mobile {
		              padding-top: 35px;
		            }
		        }

		    </style>
		</head>
		<body style="background: #efefef !important;  padding-top: 50px !important;">
		    <center>
		        <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding: 0px;">
		            <tr style="border-spacing: 3em;"> <!-- call to action-->
		                <td style="padding: 20px 70px; background-color: #E48A7F">
		                    <h2 style="color: #fff; margin-top:50px; padding-bottom:20px;">Hello Admin,</h2>
		                    <p>We have a new person use the contact us form, below are the information of the person</p>
	';

	foreach ($formData as $key => $field) {
		$message .= '<p style="color: #fff; margin-top:50px; padding-bottom:20px;">'. $key .'</p> '. $field .'<br />';
	}

	$message .= '
		                </td>
		            </tr><!--end here-->
		        </table>
		         <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding-top: 40px;">
		            <tr>
		                <td class="footer" style="text-align: center;">                    
		                    <tr>
		                        <td style="text-align:center">
		                            <p style="margin-bottom: 40px;  font-size: 10px; color: #999;">Need any help? Get in touch with us on <a href="mailto:mailto:help@urban24.ng" target="_top">syracuseafrica.co</a>
		                            <br>&copy; Syracuse 2020. All Rights Reserved</p>
		                        </td>
		                    </tr>
		                </td>
		            </tr>
		        </table>
		    </center>
		</body>
		</html>
	';

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

	$message = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="format-detection" content="telephone=no"> 
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
		    <title>New Contact Form Field</title>
		    <style>		        
		        html body {
		            font-family: "Ubuntu", sans-serif;
		            background: #efefef !important;
		            width: 100%; 
		        }

		        h1{
		            font-size: 2em;
		            color: #0BC773;
		        }
		        
		        h2 {
		            font-size: 1.2em;
		            color: #fff;
		        }
		        
		        .btn{
		            padding: 16px 25px;
		            border:2px solid  #fff;
		            text-decoration: none;
		            
		        }
		    
		        .footer {
		            text-align: center;
		        }
		        
		        .footer a {
		            display: inline;
		            text-decoration: none;
		        }
		        
		        a {
		            text-decoration: none;
		        }
		        
		        p {
		            color: #111;
		            font-size: 1em;
		        }
		        
		        @media only screen and (max-device-width: 780px){
		          .mobile {
		              padding-top: 35px;
		            }
		        }

		    </style>
		</head>
		<body style="background: #efefef !important;  padding-top: 50px !important;">
		    <center>
		        <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding: 0px;">
		            <tr style="border-spacing: 3em;"> <!-- call to action-->
		                <td style="padding: 20px 70px; background-color: #E48A7F">
		                    <h2 style="color: #fff; margin-top:50px; padding-bottom:20px;">Hello Admin,</h2>
		                    <p>We have a new person use the career form, below are the information of the person</p>
	';

	foreach ($formData as $key => $field) {
		$message .= '<p style="color: #fff; margin-top:50px; padding-bottom:20px;">'. $key .'</p> '. $field .'<br />';
	}

	$message .= '
		                </td>
		            </tr><!--end here-->
		        </table>
		         <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding-top: 40px;">
		            <tr>
		                <td class="footer" style="text-align: center;">                    
		                    <tr>
		                        <td style="text-align:center">
		                            <p style="margin-bottom: 40px;  font-size: 10px; color: #999;">Need any help? Get in touch with us on <a href="mailto:mailto:help@urban24.ng" target="_top">syracuseafrica.co</a>
		                            <br>&copy; Syracuse 2020. All Rights Reserved</p>
		                        </td>
		                    </tr>
		                </td>
		            </tr>
		        </table>
		    </center>
		</body>
		</html>
	';

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

	$message = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="format-detection" content="telephone=no"> 
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
		    <title>New Contact Form Field</title>
		    <style>		        
		        html body {
		            font-family: "Ubuntu", sans-serif;
		            background: #efefef !important;
		            width: 100%; 
		        }

		        h1{
		            font-size: 2em;
		            color: #0BC773;
		        }
		        
		        h2 {
		            font-size: 1.2em;
		            color: #fff;
		        }
		        
		        .btn{
		            padding: 16px 25px;
		            border:2px solid  #fff;
		            text-decoration: none;
		            
		        }
		    
		        .footer {
		            text-align: center;
		        }
		        
		        .footer a {
		            display: inline;
		            text-decoration: none;
		        }
		        
		        a {
		            text-decoration: none;
		        }
		        
		        p {
		            color: #111;
		            font-size: 1em;
		        }
		        
		        @media only screen and (max-device-width: 780px){
		          .mobile {
		              padding-top: 35px;
		            }
		        }

		    </style>
		</head>
		<body style="background: #efefef !important;  padding-top: 50px !important;">
		    <center>
		        <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding: 0px;">
		            <tr style="border-spacing: 3em;"> <!-- call to action-->
		                <td style="padding: 20px 70px; background-color: #E48A7F">
		                    <h2 style="color: #fff; margin-top:50px; padding-bottom:20px;">Hello Admin,</h2>
		                    <p>We have a new person use the scholarship form, below are the information of the person</p>
	';

	foreach ($formData as $key => $field) {
		$message .= '<p style="color: #fff; margin-top:50px; padding-bottom:20px;">'. $key .'</p> '. $field .'<br />';
	}

	$message .= '
		                </td>
		            </tr><!--end here-->
		        </table>
		         <table border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color: #e8e8e8; padding-top: 40px;">
		            <tr>
		                <td class="footer" style="text-align: center;">                    
		                    <tr>
		                        <td style="text-align:center">
		                            <p style="margin-bottom: 40px;  font-size: 10px; color: #999;">Need any help? Get in touch with us on <a href="mailto:mailto:help@urban24.ng" target="_top">syracuseafrica.co</a>
		                            <br>&copy; Syracuse 2020. All Rights Reserved</p>
		                        </td>
		                    </tr>
		                </td>
		            </tr>
		        </table>
		    </center>
		</body>
		</html>
	';

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