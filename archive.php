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
	<div id="content" class="site-content">
  <main id="main">
    <div class="masthead" style="background-image: url('<?php echo get_option('blog_header_image') ? get_option('blog_header_image') : get_theme_file_uri('assets/img/shop_header.jpg') ?>');">
				<div class="masthead__copy">
          <p>
						<?php echo get_option('blog_header_text'); ?>
					</p>
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
