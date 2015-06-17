<?php
/*********************************
* Menu
**********************************/
// Function 'bootwp_theme_option_add_menu_page' starts
function bootwp_theme_option_add_menu_page() {

	add_menu_page( 
		'Theme Options', 
		'Theme Options', 
		'manage_options', 
		'bootwp-theme-options', 
		'bootwp_theme_option_add_menu_page_display', 
		'dashicons-admin-settings', 
		25
	);	

} 
// Function 'bootwp_theme_option_add_menu_page' ends

add_action( 'admin_menu', 'bootwp_theme_option_add_menu_page' );
// Hook into the 'admin_init' action


/*********************************
* Settings section, fileds, register settings
**********************************/



/*********************************
* options retrieving custom funtion
**********************************/



/*********************************
* options page
**********************************/
// Function 'bootwp_theme_option_add_menu_page_display' starts
function bootwp_theme_option_add_menu_page_display() {

	echo "To Do";

} 
// Function 'bootwp_theme_option_add_menu_page_display' ends