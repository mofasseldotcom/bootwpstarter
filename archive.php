<?php
/**
 * The template for displaying archive pages.
 *
 * @package Boot WP Framework
 */

get_header(); ?>

	<div id="main-content" class="content-area container">
		<main id="main" class="site-main row" role="main">

		<div class="col-sm-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div> <!-- /.col-sm-8 -->
		
		<?php get_sidebar(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
