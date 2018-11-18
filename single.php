<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
	<?php
		while ( have_posts() ) :
			the_post();?>
				<div class="post__frontmatter">
					<div class="post__category">
							<?php the_category();?>
					</div>
					<div class="post__title">
							<?php the_title();?>
					</div>
				</div>
			</div>
		<div class="blog__sidebar"></div>
		<div class="blog__post-column">
			<div class="post__frontmatter">
				<?php if (has_post_thumbnail()) { ?>
					<hr class="blog__divider" />
					<div class="post__thumbnail">
						<?php the_post_thumbnail('medium_large'); ?>
					</div>
					<hr class="blog__divider">
				<?php } ?>
				<div class="post__author">
					<i class="fas fa-user"></i> By <?php the_author_posts_link(); ?>
				</div>
				<div class="post__comments">
					<i class="fas fa-comments"></i> <?php comments_number();?>
				</div>
			</div>
    <div class="post__content">
        <?php the_content(); ?>
    </div>
			
	<?php
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
		<div class="blog__sidebar">
			<?	get_sidebar( 'blog' ); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
