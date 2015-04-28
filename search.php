<?php
/**
 * The template for displaying search results pages.
 *
 * @package Boot WP Framework
 */

get_header(); ?>

	<section id="main-content" class="content-area container">
		<div class="row">
		<main id="main" class="site-main col-sm-8" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootwp-framework' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main /.col-sm-8 -->

		<?php get_sidebar(); ?>

		</div> <!-- /.row -->
	</section><!-- #main-content -->

<?php get_footer(); ?>
