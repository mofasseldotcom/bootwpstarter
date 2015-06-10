<?php
/**
 * The sidebar containing widgets for left sidebar template only.
 *
 * @package Boot WP Starter
 */

?>

	<?php if ( is_active_sidebar( 'left' ) ) : ?>

	<div id="sidebar" class="widget-area col-sm-4" role="complementary">
			<?php dynamic_sidebar( 'left' ); ?>
	</div><!-- #sidebar -->

	<?php else : ?>

	<?php get_sidebar(); ?>

	<?php endif; ?>


