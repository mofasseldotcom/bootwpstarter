<?php
/**
 * Template Name: Blog Page.
 *
 * @package Boot WP Framework
 */

get_header(); ?>

	<div id="main-content" class="content-area container">
		<div class="row">
		<main id="main" class="site-main col-sm-8" role="main">

		<?php $args = array (
					'post_type' => 'post',
					'posts_per_page' => 10,
			);
			$blog_temp = new WP_Query($args);
			
			if ( $blog_temp->have_posts() ) :
		?>

			<?php while ( $blog_temp->have_posts() ) : $blog_temp->the_post(); ?>

				<?php get_template_part( 'content', '' ); ?>

			<?php endwhile; ?>

		<?php endif; wp_reset_query(); ?>

		</main><!-- #main /.col-sm-8 -->

		<?php get_sidebar('blog'); ?>

		</div> <!-- /.row -->
	</div><!-- #main-content -->


<?php get_footer(); ?>
