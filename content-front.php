<?php
/**
 * @package Boot WP Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('front-blog'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">	
			<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php the_excerpt(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->