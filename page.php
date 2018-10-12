<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gaia-mother
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="blog__header">
					<p class="blog__header-copy">
						<?php echo get_field('header_copy',  get_option('page_for_posts'));?>
					</p>
				</div>
			<div class="blog__content">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div> <!-- blog__content-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
