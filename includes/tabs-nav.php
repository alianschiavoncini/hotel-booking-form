<?php
function hotel_booking_form_tabs_nav($panel) {

	// active tab class
	$active_class = 'nav-tab-active';

	echo '<nav class="nav-tab-wrapper">';

	echo '<a href="?page=hotel-booking-form&amp;tab=general" class="nav-tab ';
	if ($panel == 'general') { echo $active_class; }
	echo '">' . esc_html__('General') . '</a>';

	echo '<a href="?page=hotel-booking-form&amp;tab=form" class="nav-tab ';
	if ($panel == 'form') { echo $active_class; }
	echo '">' . esc_html__('Form Settings') . '</a>';

	echo '<a href="?page=hotel-booking-form&amp;tab=email" class="nav-tab ';
	if ($panel == 'email') { echo $active_class; }
	echo '">' . esc_html__('Email Settings') . '</a>';

	echo '</nav>';

}