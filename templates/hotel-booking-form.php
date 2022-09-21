<?php
//main option group
$option_group = 'hotel-booking-form';
$options = array(
                'method', 'url', 'target',
                'date',
                'checkin', 'checkout',
                'firstname', 'firstname_mandatory',
                'lastname', 'lastname_mandatory',
                'email', 'email_mandatory',
                'telephone', 'telephone_mandatory',
                'checkin', 'checkout',
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
                );

// Collect all options values
$my_options = array();
foreach ($options as $option) {
    $option_key = $option_group . '-' . $option;
	$my_options[$option] = get_option( $option_key );
}

// Variable to check if one field has been enable at least
$field_set = array();

$notice = hotel_booking_form_send();
if ($notice) {
?>
<div class="hotel-booking-form__notice hotel-booking-form__notice-<?php echo $notice[0]; ?>">
    <div class="hotel-booking-form__notice-inner"><?php echo $notice[1]; ?></div>
</div>
<?php
}
?>

<form class="hotel-booking-form" method="post" action="<?php echo get_permalink(); ?>#hotel-booking-form">

    <input type="hidden" name="hotel-booking-form-send" value="send">

    <?php
    $field = 'firstname';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('First Name', 'hotel-booking-form'); ?> <?php if ($my_options[$field.'_mandatory']) { ?><span class="<?php echo 'mandatory-field'; ?>">*</span><?php } ?></label>
        <input type="text" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="" <?php if ($my_options[$field.'_mandatory']) { echo 'required="required"'; } ?>>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'lastname';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Last Name', 'hotel-booking-form'); ?> <?php if ($my_options[$field.'_mandatory']) { ?><span class="<?php echo 'mandatory-field'; ?>">*</span><?php } ?></label>
        <input type="text" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="" <?php if ($my_options[$field.'_mandatory']) { echo 'required="required"'; } ?>>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'email';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('E-mail', 'hotel-booking-form'); ?> <?php if ($my_options[$field.'_mandatory']) { ?><span class="<?php echo 'mandatory-field'; ?>">*</span><?php } ?></label>
        <input type="text" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="" <?php if ($my_options[$field.'_mandatory']) { echo 'required="required"'; } ?>>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'telephone';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Telephone', 'hotel-booking-form'); ?> <?php if ($my_options[$field.'_mandatory']) { ?><span class="<?php echo 'mandatory-field'; ?>">*</span><?php } ?></label>
        <input type="text" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="" <?php if ($my_options[$field.'_mandatory']) { echo 'required="required"'; } ?>>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'checkin';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Check-in', 'hotel-booking-form'); ?></label>
        <input type="text" name="<?php echo $field; ?>" class="datepicker <?php echo $option_group . '__input-' . $field; ?>" data-date-format="<?php echo $my_options['date']; ?>" readonly>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'checkout';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Check-out', 'hotel-booking-form'); ?></label>
        <input type="text" name="<?php echo $field; ?>" class="datepicker <?php echo $option_group . '__input-' . $field; ?>" data-date-format="<?php echo $my_options['date']; ?>" readonly>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'treatment';
    if ($my_options[$field] && !empty($my_options[$field .'_options'][0])) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Treatment', 'hotel-booking-form'); ?></label>
        <select name="<?php echo $field; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
            <option value="" selected="selected">---</option>
        <?php
        foreach ($my_options[$field .'_options'] as $value) {
            if ($value != '') {
                ?><option value="<?php echo esc_attr($value); ?>"><?php echo $value; ?></option><?php
			}
		}
        ?>
        </select>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'room';
	if ($my_options[$field] && !empty($my_options[$field .'_options'][0])) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Room', 'hotel-booking-form'); ?></label>
        <select name="<?php echo $field; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
            <option value="" selected="selected">---</option>
        <?php
        foreach ($my_options[$field .'_options'] as $value) {
            if ($value != '') {
                ?><option value="<?php echo esc_attr($value); ?>"><?php echo $value; ?></option><?php
			}
		}
        ?>
        </select>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'rooms';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('N. Rooms', 'hotel-booking-form'); ?></label>
        <select name="<?php echo $field; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
        <?php for ($i = 1; $i <= $my_options[$field.'_max']; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'adults';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Adults', 'hotel-booking-form'); ?></label>
        <select name="<?php echo $field; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
        <?php for ($i = 1; $i <= $my_options[$field.'_max']; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'children';
    if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Children', 'hotel-booking-form'); ?></label>
        <select name="<?php echo $field; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
        <?php for ($i = 0; $i <= $my_options[$field.'_max']; $i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
    </div>
    <?php
    }
    ?>

    <?php
    $field = 'children_age';
    if ($my_options[$field] && $my_options['children']) {
		$field_set[] = $my_options[$field];
    ?>
    <div class="<?php echo $option_group . '__row'; ?>">
    <?php
	    for ($x = 1; $x <= $my_options['children_max']; $x++) {
	?>
        <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?> <?php echo $option_group . '__column-' . $field . '-' . $x; ?>">
            <label for="<?php echo $field . '-' . $x; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php _e('Children Age', 'hotel-booking-form'); ?> <?php echo $x; ?></label>
            <select name="<?php echo $field . '-' . $x; ?>" class="<?php echo $option_group . '__select-' . $field; ?>" size="1">
            <?php for ($i = 0; $i <= $my_options[$field.'_max']; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
            </select>
        </div>
    <?php
    	}
    ?>
    </div>
    <?php
    }
    ?>

	<?php
	$field = 'message';
	if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
        <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
            <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>"><?php echo $my_options[$field . '_label']; ?></label>
            <textarea name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>"></textarea>
        </div>
		<?php
	}
	?>

	<?php
	$field = 'privacy';
	if ($my_options[$field]) {
		$field_set[] = $my_options[$field];
    ?>
        <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
            <label for="<?php echo $field; ?>" class="<?php echo $option_group . '__label-' . $field; ?>">
                <input type="checkbox" id="<?php echo $field; ?>" name="<?php echo $field; ?>" value="1">
                <?php
                if ($my_options[$field . '_text']) {
                    echo $my_options[$field . '_text'];
				}else{
				    if (get_option('wp_page_for_privacy_policy') > 0) {
						$wp_page_for_privacy_policy = get_permalink(get_option('wp_page_for_privacy_policy'));
					}else{
						$wp_page_for_privacy_policy = '';
					}

					printf(
						'%s <a href="%s">%s</a>.',
						__( 'I have read and agree to the', 'hotel-booking-form'),
						$wp_page_for_privacy_policy,
						__( 'Privacy Policy', 'hotel-booking-form'),
					);
				}
                ?>
            </label>
        </div>
		<?php
	}
	?>

	<?php
	$field = 'post_title';
	if ($my_options[$field]) {
    	$field_set[] = $my_options[$field];
		$field_set = true;
    ?>
        <input type="hidden" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="<?php echo esc_attr(get_the_title()); ?>">
		<?php
	}
	?>

	<?php
	$field = 'post_url';
	if ($my_options[$field]) {
    ?>
        <input type="hidden" name="<?php echo $field; ?>" class="<?php echo $option_group . '__input-' . $field; ?>" value="<?php echo get_permalink(); ?>">
		<?php
	}
	?>

    <?php
    $field = 'button_label';
    if (!empty($field_set)) {
        $value = $my_options[$field];
        if ($value == '') {
            $value = __('Send', 'hotel-booking-form');
        }
    ?>
    <div class="<?php echo $option_group . '__column ' . $option_group . '__column-' . $field; ?>">
        <input type="submit" class="<?php echo $option_group . '__input-' . $field; ?>" value="<?php echo esc_attr($value); ?>" <?php if ($my_options['privacy']) { echo 'disabled'; } ?>>
    </div>
    <?php
	}elseif( empty($field_set) && user_can( wp_get_current_user(), 'administrator' ) && !$notice  ) {
		$plugin_settings_url = admin_url('options-general.php?page=hotel-booking-form');
        ?>
        <p><?php _e('This message is visible only to the site administrator.', 'hotel-booking-form'); ?></p>
        <p><?php _e('No fields have been enable. Setup the fields from the plugin <a href="'.$plugin_settings_url.'">settings page</a>.', 'hotel-booking-form'); ?></p>
       <?php
    }
    ?>

</form>
