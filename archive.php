<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gaia-mother
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog">
			<div class="masthead">
				<div class="masthead__copy">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
			</div>
			<div class="blog__content">
				<div class="blog__post-column">
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'get_post_type()' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
			<div class="blog__sidebar">
					<?php
					get_sidebar();
					?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
