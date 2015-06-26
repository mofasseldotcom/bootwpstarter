<?php

// Function 'bootwp_content_options_page_data' starts
function bootwp_content_options_page_data() {

	// Content Options
	add_settings_section( 
		'content_options', 
		'Content Options', 
		'bootwp_content_options_callback', 
		'bootwp-content-options' 
	);

	add_settings_field( 
		'bootwp_select_field', 
		'Select field example', 
		'bootwp_select_field_callback', 
		'bootwp-content-options', 
		$section = 'content_options' 
	);

	register_setting( 
		'content_options', 
		'content_options',
		'bootwp_options_sanitize_callback'
	);

} 
// Function 'bootwp_content_options_page_data' ends


add_action( 'admin_menu', 'bootwp_content_options_page_data' );
// Hook into the 'admin_menu' action


/*
* Callback functions
****************************/

// Function 'bootwp_content_options_callback' starts
function bootwp_content_options_callback() {

	echo "Content section options goes here...";

} 
// Function 'bootwp_content_options_callback' ends
// Function 'bootwp_select_field_callback' starts
function bootwp_select_field_callback() {
$selected = bootwp_get_option('bootwp_select_field');
?>
	<select name="content_options[bootwp_select_field]" id="bootwp_select_field">
		<option value="One" <?php echo selected($selected, 'One'); ?>>One</option>
		<option value="Two" <?php echo selected($selected, 'Two'); ?>>Two</option>
		<option value="Three" <?php echo selected($selected , 'Three'); ?>>Three</option>
	</select>	
<?php
} 
// Function 'bootwp_select_field_callback' ends