<?php
// Booking Form Class
class hotel_booking_form extends WP_Widget {

	// The construct part
	function __construct() {
		parent::__construct(

		// Base ID of your widget
			'hotel_booking_form',

			// Widget name will appear in UI
			__('Hotel Booking Form', 'hotel-booking-form'),

			// Widget description
			array( 'description' => __( 'The Hotel Booking Form plugin displays a user friendly and responsive reservation form.', 'hotel-booking-form' ), )
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
        // before and after widget arguments are defined by themes
		echo $args['before_widget'];

		$title = apply_filters( 'widget_title', $instance['title'] );
		if (!empty($title)) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		echo do_shortcode('[hotel-booking-form]');

		// This is where you run the code and display the output
		echo $args['after_widget'];

       return $instance;
	}

	// Creating widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}else{
			$title = __( 'New title', 'hotel-booking-form' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
        <?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	// Class hotel_booking_form ends here
}

// Register and load the widget class
function hotel_booking_form_registration() {
	register_widget( 'hotel_booking_form' );
}
add_action( 'widgets_init', 'hotel_booking_form_registration' );