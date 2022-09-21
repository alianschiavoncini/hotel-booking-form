<?php
/**
 * Plugin Name: Hotel Booking Form
 * Plugin URI: https://wordpress.org/plugins/hotel-booking-form
 * Description: The Hotel Booking Form displays a user friendly reservation contact form. It is a useful plugin for Hotels, B&B and Hostels to increase the direct bookings.
 * Version: 0.0.1
 * Requires at least: 6.0.1
 * Requires PHP: 7.2
 * Author: Alian Schiavoncini
 * Author URI: https://www.alian.it
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://wordpress.org/plugins/hotel-booking-form
 * Text Domain: hotel-booking-form
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require_once(dirname(__FILE__) . '/hotel-booking-form-common.php');
require_once(dirname(__FILE__) . '/hotel-booking-form-class.php');

if ( is_admin() ) {
	require_once(dirname(__FILE__) . '/hotel-booking-form-admin.php');
}

/**
 * Enqueue plugin files.
 */
add_action('init', 'hotel_booking_form_enqueue_files');
function hotel_booking_form_enqueue_files() {

	wp_register_style( 'hotel-booking-form', plugin_dir_url( __FILE__ ) . 'css/hotel-booking-form.css' );
	wp_enqueue_style( 'hotel-booking-form' );
	wp_enqueue_script( 'hotel-booking-form', plugin_dir_url( __FILE__ ) . 'js/hotel-booking-form.js', array( 'jquery' )  );

	//jQuery UI
	//Ref. https://code.jquery.com/ui/
	wp_enqueue_script('jquery-ui-datepicker', array( 'jquery', 'hotel-booking-form' ) );

	//Get the calendar UI theme from booking form settings
	$jquery_ui_theme = get_option('hotel-booking-form-calendar');
	if (!$jquery_ui_theme) { $jquery_ui_theme = 'base'; }
	$jquery_ui_theme_url = '//code.jquery.com/ui/1.12.1/themes/'.$jquery_ui_theme.'/jquery-ui.min.css';
	wp_enqueue_style('jquery-ui-datepicker', $jquery_ui_theme_url);

}

/**
 * Add Settings Link.
 */
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'hotel_booking_form_add_plugin_page_settings_link');
function hotel_booking_form_add_plugin_page_settings_link( $links ) {
	array_unshift(
		$links,
		'<a href="' .
		admin_url('options-general.php?page=hotel-booking-form') .
		'">' . __('Settings') . '</a>'
	);
	return $links;
}

