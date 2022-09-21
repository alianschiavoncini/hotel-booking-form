<?php
if( ! is_admin() ) {
	return;
}

/**
 * Add the plugin link to the admin menu.
 */
add_action( 'admin_menu', 'hotel_booking_form_menu' );

/**
 * Add the config for the admin menu.
 */
function hotel_booking_form_menu() {
    // change the function if you would like to show the link in another menu
    // see more at https://codex.wordpress.org/Administration_Menus
    add_options_page( 'Hotel Booking Form Options', 'Hotel Booking Form', 'manage_options', 'hotel-booking-form', 'hotel_booking_form_options' );
}

/**
 * Load Admin files.
 */
function hotel_booking_form_load_admin_files() {
    if(!is_admin_bar_showing()) return;
    wp_enqueue_style ( 'hotel-booking-form-admin-styles', plugins_url('/css/admin.css', __FILE__), array(), hotel_booking_form_plugin_data('Version') );

	wp_register_script( 'hotel-booking-form-admin-scripts', plugins_url('/js/admin.js', __FILE__), array('jquery'), hotel_booking_form_plugin_data('Version'), true );
	wp_enqueue_script( 'hotel-booking-form-admin-scripts' );

	/**
	 * Include WP Iris color picker.
	 */
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script(
		'iris',
		admin_url( 'js/iris.min.js' ),
		array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ),
		false,
		1
	);
	wp_enqueue_script(
		'wp-color-picker',
		admin_url( 'js/color-picker.min.js' ),
		array( 'iris' ),
		false,
		1
	);
	$colorpicker_l10n = array(
		'clear' => __( 'Clear', 'hotel-booking-form' ),
		'defaultString' => __( 'Default', 'hotel-booking-form' ),
		'pick' => __( 'Select Color', 'hotel-booking-form' ),
		'current' => __( 'Current Color', 'hotel-booking-form' ),
	);
	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n );


	/**
     * Include the plugin files.
     */
    include( plugin_dir_path( __FILE__ ) . 'includes/tabs-nav.php' );
}
add_action( 'admin_enqueue_scripts', 'hotel_booking_form_load_admin_files' );

/**
 * Register options settings.
 */
function hotel_booking_form_register_settings() {

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
add_action( 'admin_init', 'hotel_booking_form_register_settings' );

/**
 * Print the plugin panel to do define the settings.
 */
function hotel_booking_form_options() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.', 'hotel-booking-form' ) );
    }

    ?>
    <div class="wrap">
        <h1><?php echo hotel_booking_form_plugin_data('Name'); ?></h1>
        <?php

        $tab  = 'general'; // default panel
        if (isset($_REQUEST['tab']) && !empty($_REQUEST['tab'])) {
            $tab  = $_REQUEST['tab'];
        }

		hotel_booking_form_tabs_nav($tab);

        include( plugin_dir_path( __FILE__ ) . 'includes/tab-' . $tab .'.php' );

        ?>
    </div>
    <?php
}
