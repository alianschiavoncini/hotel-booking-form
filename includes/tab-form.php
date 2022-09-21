<form method="post" action="options.php">

<?php
	settings_fields('hotel-booking-form');
	do_settings_sections('hotel-booking-form');
?>

    <div class="section-wrapper">

        <!-- user -->
        <h2 id="user" class="title"><?php _e('User fields', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('First Name', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-firstname';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                    <fieldset>
                        <?php
						$field_label .= ' '. esc_html__('Mandatory', 'hotel-booking-form');
						$field_name .= '_mandatory';
						$field_value = get_option($field_name);
                        ?>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo __('Mandatory', 'hotel-booking-form'); ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field_label = esc_html__('Last Name', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-lastname';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                    <fieldset>
						<?php
						$field_label .= ' '. esc_html__('Mandatory', 'hotel-booking-form');
						$field_name .= '_mandatory';
						$field_value = get_option($field_name);
						?>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
								echo 'checked="checked"';
							} ?>><?php echo __('Mandatory', 'hotel-booking-form'); ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field_label = esc_html__('E-mail', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-email';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                    <fieldset>
						<?php
						$field_label .= ' '. esc_html__('Mandatory', 'hotel-booking-form');
						$field_name .= '_mandatory';
						$field_value = get_option($field_name);
						?>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
								echo 'checked="checked"';
							} ?>><?php echo __('Mandatory', 'hotel-booking-form'); ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field_label = esc_html__('Telephone', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-telephone';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                    <fieldset>
						<?php
						$field_label .= ' '. esc_html__('Mandatory', 'hotel-booking-form');
						$field_name .= '_mandatory';
						$field_value = get_option($field_name);
						?>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
								echo 'checked="checked"';
							} ?>><?php echo __('Mandatory', 'hotel-booking-form'); ?></label>
                    </fieldset>
                </td>
            </tr>

        </table>
        <!-- /user -->

        <hr>

        <!-- calendar settings -->
        <h2 id="calendar" class="title"><?php _e('Calendar settings', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Check-in', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-checkin';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field_label = esc_html__('Check-out', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-checkout';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

			<?php
			$field = array(
				'label' => esc_html__('Date format', 'hotel-booking-form'),
				'description' => 'dd=day, mm=month, yy=year',
				'name' => 'hotel-booking-form-date',
				'value' => get_option('hotel-booking-form-date'),
				'placeholder' => false
			);
			?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
						<?php
						$options = array('dd-mm-yy', 'mm-dd-yy', 'yy-mm-dd', 'yy-dd-mm', 'dd/mm/yy', 'mm/dd/yy', 'yy/mm/dd', 'yy/dd/mm');
						foreach ($options as $value) {
							$selected = '';
							if ($value == $field['value']) {
								$selected = ' selected="selected"';
							}
							?>
                            <option value="<?php echo $value; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
							<?php
						}
						?>
                    </select>
                    <p class="description"><?php echo $field['description']; ?></p>
                </td>
            </tr>

			<?php
			$field = array(
				'label' => esc_html__('Calendar theme', 'hotel-booking-form'),
				'description' => 'Graphic layout',
				'name' => 'hotel-booking-form-calendar',
				'value' => get_option('hotel-booking-form-calendar'),
				'placeholder' => false
			);
			?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
						<?php
						$options = array('base', 'black-tie', 'blitzer', 'cupertino', 'dark-hive', 'dot-luv', 'eggplant', 'excite-bike', 'flick', 'hot-sneaks', 'humanity', 'le-frog', 'mint-choc', 'overcast', 'pepper-grinder', 'redmond', 'smoothness', 'south-street', 'start', 'sunny', 'swanky-purse', 'trontastic', 'ui-darkness', 'ui-lightness', 'vader');
						foreach ($options as $value) {
							$selected = '';
							if ($value == $field['value']) {
								$selected = ' selected="selected"';
							}
							?>
                            <option value="<?php echo $value; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
							<?php
						}
						?>
                    </select>
                    <p class="description"><?php echo $field['description']; ?></p>
                </td>
            </tr>
        </table>
        <!-- /calendar settings -->

        <hr>

        <!-- treatment -->
        <h2 id="treatment" class="title"><?php _e('Treatment Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-treatment';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Treatment Options', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-treatment_options[]',
                'value' => get_option('hotel-booking-form-treatment_options'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row" rowspan="2"><?php _e('Options', 'hotel-booking-form'); ?></th>
                <td class="treatment-type">
                    <button class="button hotel-booking-form-add-field hotel-booking-form-treatment_options_add_field"><?php _e('Add option', 'hotel-booking-form'); ?></button>
                    <?php
                    $i = 1;
                    if ($field['value']) {
                        foreach ($field['value'] as $field_value) {
                            echo '<div class="hotel-booking-form-new-treatment-option">';
                            echo $i . ') <input type="text" name="' . $field['name'] . '" class="regular-text" value="' . esc_attr($field_value) .'">';
                            echo '<button class="button hotel-booking-form-treatment_options_delete_field">' . __('Delete', 'hotel-booking-form') . '</button>';
                            echo '</div>';
                            $i++;
                        }
                    }else{
                        ?>
                        <div class="hotel-booking-form-new-treatment-option"><?php echo $i; ?>) <input type="text" name="<?php echo $field['name']; ?>" class="regular-text" value=""></div>
                        <?php
                    }
                    ?>
                </td>
            </tr>

        </table>
        <!-- /treatment -->

        <hr>

        <!-- room types -->
        <h2 id="room" class="title"><?php _e('Room Types Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-room';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Room Options', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-room_options[]',
                'value' => get_option('hotel-booking-form-room_options'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row"><?php _e('Options', 'hotel-booking-form'); ?></th>
                <td class="room-type">
                    <button class="button hotel-booking-form-add-field hotel-booking-form-room_options_add_field"><?php _e('Add option', 'hotel-booking-form'); ?></button>
                    <?php
                    $i = 1;
                    if ($field['value']) {
                        foreach ($field['value'] as $field_value) {
                            echo '<div class="hotel-booking-form-new-room-option">';
                            echo $i . ') <input type="text" name="' . $field['name'] . '" class="regular-text" value="' . esc_attr($field_value) .'">';
                            echo '<button class="button hotel-booking-form-room_options_delete_field">' . __('Delete', 'hotel-booking-form') . '</button>';
                            echo '</div>';
                            $i++;
                        }
                    }else{
                        ?>
                        <div class="hotel-booking-form-new-room-option"><?php echo $i; ?>) <input type="text" name="<?php echo $field['name']; ?>" class="regular-text" value=""></div>
                        <?php
                    }
                    ?>
                </td>
            </tr>

        </table>
        <!-- /room types -->

        <hr>

        <!-- rooms -->
        <h2 id="rooms" class="title"><?php _e('Number of Rooms Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-rooms';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Max Rooms', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-rooms_max',
                'value' => get_option('hotel-booking-form-rooms_max'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            $selected = '';
                            if ($i == $field['value']) {
                                $selected = ' selected="selected"';
                            }
                            ?>
                            <option value="<?php echo $i; ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

        </table>
        <!-- /rooms -->

        <hr>

        <!-- adults -->
        <h2 id="adults" class="title"><?php _e('Adults Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-adults';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Max Adults', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-adults_max',
                'value' => get_option('hotel-booking-form-adults_max'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            $selected = '';
                            if ($i == $field['value']) {
                                $selected = ' selected="selected"';
                            }
                            ?>
                            <option value="<?php echo $i; ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

        </table>
        <!-- /adults -->

        <hr>

        <!-- children -->
        <h2 id="children" class="title"><?php _e('Children Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-children';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Max Children', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-children_max',
                'value' => get_option('hotel-booking-form-children_max'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            $selected = '';
                            if ($i == $field['value']) {
                                $selected = ' selected="selected"';
                            }
                            ?>
                            <option value="<?php echo $i; ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <!-- children -->

        <hr>

        <!-- children age -->
        <h2 id="childrenage" class="title"><?php _e('Children Age Drop-down list', 'hotel-booking-form'); ?></h2>
        <table class="form-table">

            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-children_age';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Max Children Years', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-children_age_max',
                'value' => get_option('hotel-booking-form-children_age_max'),
                'placeholder' => false
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td>
                    <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>">
                        <?php
                        for ($i = 0; $i <= 17; $i++) {
                            $selected = '';
                            if ($i == $field['value']) {
                                $selected = ' selected="selected"';
                            }
                            ?>
                            <option value="<?php echo $i; ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

        </table>
        <!-- /children age -->

        <hr>

        <!-- message -->
        <h2 id="message" class="title"><?php _e('Message Text Area', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-message';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Label', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-message_label',
                'value' => get_option('hotel-booking-form-message_label'),
                'placeholder' => __('More details', 'hotel-booking-form'),
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td><input type="text" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="regular-text" value="<?php echo $field['value']; ?>" placeholder="<?php echo $field['placeholder']; ?>"></td>
            </tr>

        </table>
        <!-- /message -->

        <hr>

        <!-- privacy -->
        <h2 id="privacy" class="title"><?php _e('Privacy Checkbox', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Enable/Disable', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-privacy';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field = array(
                'label' => esc_html__('Text', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-privacy_text',
                'value' => get_option('hotel-booking-form-privacy_text'),
                'placeholder' => __('I have read and agree to the Privacy Policy.', 'hotel-booking-form'),
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td><input type="text" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="regular-text" value="<?php echo $field['value']; ?>" placeholder="<?php echo $field['placeholder']; ?>"></td>
            </tr>

        </table>
        <!-- /privacy -->

        <hr>

        <!-- page data -->
        <h2 id="page_data" class="title"><?php _e('Page data', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field_label = esc_html__('Title', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-post_title';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

            <?php
            $field_label = esc_html__('URL', 'hotel-booking-form');
            $field_description = __('Check to enable', 'hotel-booking-form');
            $field_name = 'hotel-booking-form-post_url';
            $field_value = get_option($field_name);
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo $field_label; ?></span></legend>
                        <label for="<?php echo $field_name; ?>"><input id="<?php echo $field_name; ?>"
                                                                       name="<?php echo $field_name; ?>" type="checkbox"
                                                                       value="1" <?php if ($field_value == "1") {
                                echo 'checked="checked"';
                            } ?>><?php echo $field_description; ?></label>
                    </fieldset>
                </td>
            </tr>

        </table>
        <!-- /privacy -->

        <hr>

        <!-- submit button -->
        <h2 id="submit_button" class="title"><?php _e('Submit Button', 'hotel-booking-form'); ?></h2>
        <table class="form-table">
            <?php
            $field = array(
                'label' => esc_html__('Label', 'hotel-booking-form'),
                'description' => false,
                'name' => 'hotel-booking-form-button_label',
                'value' => get_option('hotel-booking-form-button_label'),
                'placeholder' => __('Send', 'hotel-booking-form'),
            );
            ?>
            <tr>
                <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label></th>
                <td><input type="text" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" class="regular-text" value="<?php echo $field['value']; ?>" placeholder="<?php echo $field['placeholder']; ?>"></td>
            </tr>

        </table>
        <!-- /submit button -->

    </div>

<?php
	submit_button();
?>

</form>
