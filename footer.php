<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Boot WP Framework
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
		      	<div class="site-info col-md-6">
					<a href="<?php echo esc_url( site_url() ); ?>">
					<?php printf( __( 'Copyright &copy;', 'bootwp-framework' ), '' ); ?> <?php echo date('Y'); ?>
					<span class="sep"> | </span>
					<?php printf( __( 'All rights reserved by', 'bootwp-framework' ), '' ); ?> <?php bloginfo('name'); ?></a>
				</div><!-- .site-info -->

		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'footer-links',
		                'theme_location'    => 'footer-links',
		                'depth'             => 1,
		                'container'         => 'div',
		                'container_class'   => 'col-md-6',
		        		'container_id'      => 'footer-links',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => '',
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
