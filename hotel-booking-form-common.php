<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get the Plugin Data.
 */
function hotel_booking_form_plugin_data($var = false) {
	$plugin_file = plugin_dir_path(__FILE__) . 'hotel-booking-form.php';
	if( !function_exists('get_plugin_data') ){
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	$get_plugin_data = get_plugin_data( $plugin_file );
	if ($var) { $get_plugin_data = $get_plugin_data[$var]; }
	return $get_plugin_data;
}

/**
 * Set the Booking Form options names.
 */
function hotel_booking_form_option_names() {
	$option_names = array(
		'firstname', 'firstname_mandatory',
		'lastname', 'lastname_mandatory',
		'email', 'email_mandatory',
		'telephone', 'telephone_mandatory',
		'checkin', 'checkout', 'date', 'calendar',
		'treatment', 'treatment_options',
		'room', 'room_options',
		'rooms', 'rooms_max',
		'adults', 'adults_max',
		'children', 'children_max',
		'children_age', 'children_age_max',
		'message', 'message_label',
		'privacy', 'privacy_text',
		'post_title', 'post_url',
		'button_label',

		'to_address', 'subject',
		'auto_reply', 'from_name', 'from_email',
		'header_image', 'footer_text',
		'base_color', 'background_color', 'body_background_color', 'body_text_color',
	);

	return $option_names;
}

/**
 * Unregister the option names if the plugin will be delete.
 */
register_uninstall_hook(__FILE__, 'hotel_booking_form_unregister_option_names');
function hotel_booking_form_unregister_option_names() {
	$option_group = hotel_booking_form_plugin_data('TextDomain');
	$option_names = hotel_booking_form_option_names();

	foreach ($option_names as $option_name) {
		$arr = array();
		if (strpos($option_name, '_options')) {
			$arr = array('type' => 'array');
		}
		register_setting( $option_group, $option_group . '-' . $option_name, array($arr) );
	}
}

/**
 * Return the Hotel Booking Form shortcode.
 */
function hotel_booking_form_shortcode_output() {
	// Get the Template
	$template_file = plugin_dir_path(__FILE__) . 'templates/hotel-booking-form.php';
	if (file_exists($template_file)) { // Template file exists.
		ob_start();
		include($template_file);
		$content = ob_get_clean();
		return $content;
	}
}
add_shortcode('hotel-booking-form', 'hotel_booking_form_shortcode_output');

/**
 * Send the hotel booking form.
 */
function hotel_booking_form_send() {

	if (isset($_POST['hotel-booking-form-send']) && ($_POST['hotel-booking-form-send'] == 'send')) {

		$to = get_option('hotel-booking-form-to_address');
		if (empty($to) || ($to == '') || !is_email($to)) {
			$to = sanitize_email(get_option('admin_email'));
		}

		$subject = wp_strip_all_tags(get_option('hotel-booking-form-subject'));
		if (empty($subject) || ($subject == '')) {
			$subject = __('Booking request for') . ' ' . get_option('blogname');
		}

		$message = '';
		$exclude_fields = array('hotel-bookig-form-action', 'hotel-booking-form-send', 'privacy');
		foreach ($_POST as $k => $v) {
			if (!in_array($k, $exclude_fields)) {
				$k = str_replace('_', ' ', $k);
				$k = ucfirst($k);
				$v = sanitize_text_field($v);
				$message .= $k . ': ' . $v . PHP_EOL;
			}
		}

		$result = wp_mail( $to, $subject, $message );

		if ($result) {
			$notice = 'success';
			$output = __('Thank you for your message. It has been sent.', 'hotel-booking-form');
		} else {
			$notice = 'error';
			$output = __('There was an error trying to send your message. Please try again later.', 'hotel-booking-form');
		}

		return array($notice, $output);
	}
	return false;
}
