<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Boot WP Framework
 */
?>
<div class="container">
	<div class="row">

		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
				<div class="widget-area footer-widget">
					<?php dynamic_sidebar( 'footer_left' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'footer_mid' ) ) : ?>
				<div class="widget-area footer-widget">
					<?php dynamic_sidebar( 'footer_mid' ); ?>
				</div>					
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
				<div class="widget-area footer-widget">
					<?php dynamic_sidebar( 'footer_right' ); ?>
				</div>					
			<?php endif; ?>
		</div>

	</div> <!-- /.container -->
</div> <!-- /.row -->

