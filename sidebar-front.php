<?php
/**
 * The sidebar containing widgets for front page blog only.
 *
 * @package Boot WP Framework
 */

?>

	<?php if ( is_active_sidebar( 'front' ) ) : ?>

	<div id="sidebar" class="widget-area col-sm-4" role="complementary">
			<?php dynamic_sidebar( 'front' ); ?>
	</div><!-- #sidebar -->

	<?php elseif ( is_active_sidebar( 'blog' ) ) : ?>

	<div id="sidebar" class="widget-area col-sm-4" role="complementary">
			<?php dynamic_sidebar( 'blog' ); ?>
	</div><!-- #sidebar -->

	<?php else : ?>

	<?php get_sidebar(); ?>

	<?php endif; ?>


