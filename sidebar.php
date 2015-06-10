<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Boot WP Starter
 */

if ( ! is_active_sidebar( 'default' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area col-sm-4" role="complementary">
	<?php dynamic_sidebar( 'default' ); ?>
</div><!-- #secondary -->
