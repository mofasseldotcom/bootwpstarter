<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Boot WP Starter
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div id="footer-top" class="clear">
				<?php get_sidebar('footer'); ?>		
		</div><!-- /#footer-top -->
		
		
		<nav id="footer-bottom" class="navbar navbar-inverse" role="navigation">
		  	<div class="container">
				<div class="row">

				<?php if ( get_theme_mod('copyright_text') ): ?>
				<div class="site-info col-md-6">
					<a href="<?php echo esc_url( site_url() ); ?>">
						<?php echo get_theme_mod('copyright_text'); ?>
					</a>
				</div><!-- .site-info -->
				<?php else : ?>
				<div class="site-info col-md-6">
					<?php $copyright_text = bootwp_get_option('bootwp_copyright_info'); ?>
					<?php if($copyright_text) : ?>
					<a href="<?php echo esc_url( site_url() ); ?>">
					<?php echo $copyright_text; ?>
					</a>
					<?php else : ?>
					<a href="<?php echo esc_url( site_url() ); ?>">
					<?php printf( __( 'Copyright &copy;', 'bootwpstarter' ), '' ); ?> <?php echo date('Y'); ?>
					<span class="sep"> | </span>
					<?php printf( __( 'All rights reserved by', 'bootwpstarter' ), '' ); ?> <?php bloginfo('name'); ?>
					</a>
					<?php endif; ?>
				</div><!-- .site-info -->
				<?php endif ?>
				

		      	




		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'footer-links',
		                'theme_location'    => 'footer-links',
		                'depth'             => 1,
		                'container'         => 'div',
		                'container_class'   => 'col-md-6',
		        		'container_id'      => 'footer-links',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                )
		            );
		        ?>
		        </div>
		    </div>
		</nav>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
