<?php

// Function 'bootwp_header_options_page_data' starts
function bootwp_header_options_page_data() {

	// Header section
	add_settings_section( 
		'header_options', 
		'Header Section', 
		'bootwp_header_options_callback', 
		'bootwp-header-options' 
	);

	add_settings_field( 
		'bootwp_site_logo', 
		'Site Title', 
		'bootwp_site_logo_field_callback', 
		'bootwp-header-options', 
		$section = 'header_options' 
	);

	add_settings_field( 
		'bootwp_site_favicon', 
		'Site description', 
		'bootwp_site_favicon_field_callback', 
		'bootwp-header-options', 
		$section = 'header_options' 
	);
	
	register_setting( 
		'header_options', 
		'header_options',
		'bootwp_options_sanitize_callback'
	);

} 
// Function 'bootwp_header_options_page_data' ends

add_action( 'admin_menu', 'bootwp_header_options_page_data' );
// Hook into the 'admin_menu' action


/*
* Callback functions
****************************/


// Function 'bootwp_header_options_callback' starts
function bootwp_header_options_callback() {

	echo "Header sections options goes hoere...";

} 
// Function 'bootwp_header_options_callback' ends

// Function 'bootwp_site_logo_field_callback' starts
function bootwp_site_logo_field_callback() {
?>
	<input type="file" name="header_options[bootwp_site_logo]" id="bootwp_site_logo" value="<?php echo bootwp_get_option('bootwp_site_logo'); ?>">
<?php
} 
// Function 'bootwp_site_logo_field_callback' ends

// Function 'bootwp_site_favicon_field_callback' starts
function bootwp_site_favicon_field_callback() {
?>
	<input type="text" name="header_options[bootwp_site_favicon]" id="bootwp_site_favicon" value="<?php echo bootwp_get_option('bootwp_site_favicon'); ?>">
<?php
} 
// Function 'bootwp_site_favicon_field_callback' ends