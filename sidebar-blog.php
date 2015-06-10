<?php
/**
 * The sidebar containing widgets for blog only.
 *
 * @package Boot WP Starter
 */

?>

	<?php if ( is_active_sidebar( 'blog' ) ) : ?>

	<div id="sidebar" class="widget-area col-sm-4" role="complementary">
			<?php dynamic_sidebar( 'blog' ); ?>
	</div><!-- #sidebar -->

	<?php else : ?>

	<?php get_sidebar(); ?>

	<?php endif; ?>


