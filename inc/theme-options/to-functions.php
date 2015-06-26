<?php
/*
* Menus
****************************/
// Function 'bootwp_options_add_menu_page' starts
function bootwp_options_add_menu_page() {

	add_menu_page( 
		'Theme Options', 
		'Theme Options', 
		'manage_options', 
		'bootwp-options', 
		'bootwp_options_page_display', 
		'dashicons-wordpress' 
	);

	add_submenu_page( 
		'bootwp-options', 
		'Header Options', 
		'Header Options', 
		'manage_options', 
		'bootwp-header-options', 
		'bootwp_options_page_display' 
	);

	add_submenu_page( 
		'bootwp-options', 
		'Content Options', 
		'Content Options', 
		'manage_options', 
		'bootwp-content-options', 
		'bootwp_options_page_display' 
	);

	add_submenu_page( 
		'bootwp-options', 
		'Footer Options', 
		'Footer Options', 
		'manage_options', 
		'bootwp-footer-options', 
		'bootwp_options_page_display' 
	);
	

} 
// Function 'bootwp_options_add_menu_page' ends

add_action( 'admin_menu', 'bootwp_options_add_menu_page' );
// Hook into the 'admin_menu' action


/*
* sections/fields/settings
****************************/

require_once('header-options.php');
require_once('content-options.php');
require_once('footer-options.php');

/*
* data retrieving fucntion
****************************/
// Function 'bootwp_get_option' starts
function bootwp_get_option( $option_name ) {

	$header_options = (array)get_option('header_options');
	$content_options = (array)get_option('content_options');
	$footer_options = (array)get_option('footer_options');
	$options = array_merge( $header_options, $content_options, $footer_options );
	if( !empty($options[$option_name]) ) {
		return $options[$option_name];
	} else {
		return $options[$option_name] = '';
	}
} 
// Function 'bootwp_get_option' ends


// Function 'bootwp_options_sanitize_callback' starts
function bootwp_options_sanitize_callback($options) {

	$sanitized_option;

		foreach ($options as $option_key => $option_val) {
			$sanitized_option[$option_key] = strip_tags($option_val);
		}

	return $sanitized_option;

} 
// Function 'bootwp_options_sanitize_callback' ends


/*
* Settings API Display Page
****************************/
// Function 'bootwp_options_page_display' starts
function bootwp_options_page_display() {
?>
	<div class="wrap">
		<h2>Boot WP Theme options</h2>
		<?php settings_errors(); ?>
		<?php 
			$active_page = 'bootwp-header-options';
			if( isset($_GET['page']) ) {
				$active_page = $_GET['page'];
			}
		?>
		<h2 class="nav-tab-wrapper">
			<a href="?page=bootwp-header-options" class="nav-tab <?php echo $active_page == 'bootwp-header-options' || $active_page == 'bootwp-options' ? 'nav-tab-active' : ''; ?>">Header Options</a>
			<a href="?page=bootwp-content-options" class="nav-tab <?php echo $active_page == 'bootwp-content-options' ? 'nav-tab-active' : ''; ?>">Content Options</a>
			<a href="?page=bootwp-footer-options" class="nav-tab <?php echo $active_page == 'bootwp-footer-options' ? 'nav-tab-active' : ''; ?>">Footer Options</a>
		</h2>
		<form action="options.php" method="POST">
			<?php
				if($active_page == 'bootwp-content-options') {
					settings_fields( 'content_options' );
					do_settings_sections( 'bootwp-content-options' );	
				} elseif ($active_page == 'bootwp-footer-options') {
					settings_fields( 'footer_options' );
					do_settings_sections( 'bootwp-footer-options' );
				} else {
  					settings_fields( 'header_options' );
					do_settings_sections( 'bootwp-header-options' );
				}
				
				submit_button();
			?>
		</form>
	</div> <!-- /.wrap -->
<?php
} 
// Function 'bootwp_options_page_display' ends