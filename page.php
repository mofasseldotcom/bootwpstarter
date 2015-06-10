<?php
/**
 * The template for displaying all pages by default.
 *
 * @package Boot WP Starter
 */

get_header(); ?>

	<div id="main-content" class="content-area container">
		<div class="row">
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

		<?php get_sidebar(); ?>

		</div> <!-- /.row -->
	</div><!-- #main-content -->

<?php get_footer(); ?>
