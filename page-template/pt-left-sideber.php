<?php
/**
 * Template Name: Left Sidebar Page
 *
 * @package Boot WP Framework
 */

get_header(); ?>

	<div id="main-content" class="content-area container">
		<div class="row">

		<?php get_sidebar('left'); ?>

		<main id="main" class="site-main col-sm-8" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main /.col-sm-8 -->

		</div> <!-- /.row -->
	</div><!-- #main-content -->

<?php get_footer(); ?>
