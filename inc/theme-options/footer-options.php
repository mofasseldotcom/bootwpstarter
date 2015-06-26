<?php

// Function 'bootwp_footer_options_page_data' starts
function bootwp_footer_options_page_data() {

	// Footer Options
	add_settings_section( 
		'footer_options', 
		'footer Options', 
		'bootwp_footer_options_callback', 
		'bootwp-footer-options' 
	);

	add_settings_field( 
		'bootwp_copyright_info', 
		'Copyright Info', 
		'bootwp_copyright_info_field_callback', 
		'bootwp-footer-options', 
		$section = 'footer_options' 
	);
	
	register_setting( 
		'footer_options', 
		'footer_options',
		'bootwp_options_sanitize_callback'
	);

} 
// Function 'bootwp_footer_options_page_data' ends


add_action( 'admin_menu', 'bootwp_footer_options_page_data' );
// Hook into the 'admin_menu' action


/*
* Callback functions
****************************/

// Function 'bootwp_footer_options_callback' starts
function bootwp_footer_options_callback() {

	echo "Footer sections options goes hoere...";

} 
// Function 'bootwp_footer_options_callback' ends

// Function 'bootwp_copyright_info_field_callback' starts
function bootwp_copyright_info_field_callback() {
?>
	<input type="text" name="footer_options[bootwp_copyright_info]" id="bootwp_copyright_info" value="<?php echo bootwp_get_option('bootwp_copyright_info'); ?>">
<?php
} 
// Function 'bootwp_copyright_info_field_callback' ends