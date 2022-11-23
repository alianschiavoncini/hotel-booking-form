<form method="post" action="options.php">

<?php
	settings_fields('hotel-booking-form');
	do_settings_sections('hotel-booking-form');
?>

    <div class="section-wrapper">

        <!-- email_settings -->
        <h2 id="email_settings" class="title"><?php _e('Email settings', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
			<?php
			$field = array(
				'label' => esc_html__('"To" email address', 'hotel-booking-form'),
				'description' => false,
				'name' => 'hotel-booking-form-to_address',
				'value' => get_option('hotel-booking-form-to_address'),
				'placeholder' => false,
                'required' => true,
			);

            if ($field['value'] == '') { $field['value'] = get_option('admin_email'); }
			?>
            <tr>
                <th scope="row"><label for="<?php echo esc_attr($field['name']); ?>"><?php echo $field['label']; ?></label></th>
                <td><input type="text" id="<?php echo esc_attr($field['name']); ?>" name="<?php echo esc_attr($field['name']); ?>" class="regular-text" value="<?php echo esc_attr($field['value']); ?>" placeholder="<?php echo esc_attr($field['placeholder']); ?>" <?php if ($field['required']) { echo 'required="required"'; }?>></td>
            </tr>

			<?php
			$field = array(
				'label' => esc_html__('Subject', 'hotel-booking-form'),
				'description' => false,
				'name' => 'hotel-booking-form-subject',
				'value' => get_option('hotel-booking-form-subject'),
				'placeholder' => false,
				'required' => true,
			);

			if ($field['value'] == '') { $field['value'] = __('Booking request for') . ' ' . get_option('blogname'); }
			?>
            <tr>
                <th scope="row"><label for="<?php echo esc_attr($field['name']); ?>"><?php echo esc_attr($field['label']); ?></label></th>
                <td><input type="text" id="<?php echo esc_attr($field['name']); ?>" name="<?php echo esc_attr($field['name']); ?>" class="regular-text" value="<?php echo esc_attr($field['value']); ?>" placeholder="<?php echo esc_attr($field['placeholder']); ?>" <?php if ($field['required']) { echo 'required="required"'; }?>></td>
            </tr>

        </table>
        <!-- /email_settings -->

    </div>

<?php
	submit_button();
?>

</form>
