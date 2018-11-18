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

get_header( );
		?>
		<?php
		while ( have_posts() ) :
			the_post(); ?>
	<div id="content" class="site-content">
    <main id="main">
      <div class="masthead" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_option('page_header_image');?>');">
				<div class="masthead__copy">
            <h1>
					<?php echo the_title();?>
			</h1>
				</div>
			</div>
			<div class="blog__content">

			<?php get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div> <!-- blog__content-->
		<?php if (get_field('footer_image')): 
				$image = get_field('footer_image');
				?>
				<div class="page__footerImage">
					<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>"	/>
				</div>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
