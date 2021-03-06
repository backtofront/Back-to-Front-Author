<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Back to Front Author
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'back_to_front_author' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'search' ); ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>