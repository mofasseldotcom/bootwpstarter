<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Boot WP Starter
 */
?>
<div class="container">
	<div class="row">

		<?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
			<div class="col-md-4 widget-area footer-widget">
				<?php dynamic_sidebar( 'footer_left' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer_mid' ) ) : ?>
			<div class="col-md-4 widget-area footer-widget">
				<?php dynamic_sidebar( 'footer_mid' ); ?>
			</div>					
		<?php endif; ?>


		<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
			<div class="col-md-4 widget-area footer-widget">
				<?php dynamic_sidebar( 'footer_right' ); ?>
			</div>					
		<?php endif; ?>

	</div> <!-- /.container -->
</div> <!-- /.row -->

