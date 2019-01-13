<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anno Tasted Recipes
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/content', 'home' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
