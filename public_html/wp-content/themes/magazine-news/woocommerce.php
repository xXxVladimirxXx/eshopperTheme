<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main <?php if (get_option( 'animation_all_pages_and_posts' )) : ?> class="aniview article-pp site-main" data-av-animation="<?php echo get_option( 'animation_all_pages_and_posts' ); ?>" <?php endif; ?> id="main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
