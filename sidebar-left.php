<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Boot WP Framework
 */

?>

	<?php if ( is_active_sidebar( 'left' ) ) : ?>

	<div id="sidebar" class="widget-area col-sm-4" role="complementary">
			<?php dynamic_sidebar( 'left' ); ?>
	</div><!-- #sidebar -->

	<?php else : ?>

	<?php get_sidebar(); ?>

	<?php endif; ?>


