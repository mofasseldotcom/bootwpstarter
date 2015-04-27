<?php
/**
 * Template Name: Front Page
 *
 * @package Boot WP Framework
 */

get_header(); ?>
<h1>Front Page</h1>
	<div id="main-content" class="content-area container">
		<div class="row">
		<main id="main" class="site-main col-sm-8" role="main">

		<?php $args = array (
					'post_type' => 'post',
					'posts_per_page' => 3,
					'category_name' => '',
			);
			$front_blog = new WP_Query($args);
			
			if ( $front_blog->have_posts() ) :
		?>

			<?php while ( $front_blog->have_posts() ) : $front_blog->the_post(); ?>

				<?php get_template_part('content', 'front'); ?>

			<?php endwhile; ?>

		<?php endif; wp_reset_postdata(); ?>

		</main><!-- #main /.col-sm-8 -->

		<?php get_sidebar('front'); ?>

		</div> <!-- /.row -->
	</div><!-- #main-content -->

<?php get_footer(); ?>
