<?php
/*
Plugin Name: Contact Form CFDB7 Hide Notice
Description: WordPress users (even subscribers) get the notice "Awesome, you've been using Contact Form CFDB7... May we ask you to give it a 5-star rating...". This plugin hides it for everyone.
Plugin URI: https://github.com/wwwmadis/wp-micro-plugins
Version: 1.01
Author: Madis
*/

function cc_remove_cfdb7_notice() {
	remove_action( 'admin_notices', 'cfdb7_admin_notice' );
}
add_action('admin_init','cc_remove_cfdb7_notice');
?>