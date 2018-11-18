<?php
/**
 * Template Name: Page with Sidebar
 */
get_header( ); ?>
<div id="content" class="site-content">
    <main id="main">
      <div class="masthead" style="background-image: url('<?php echo get_theme_file_uri('assets/img/shop_header.jpg')?>');">
				<div class="masthead__copy">
            <p>
						<?php echo get_option('page_header_text');?>
					</p>
				</div>
			</div>
			<div class="blog__content">
<?php while ( have_posts() ) : 
    the_post();?>
<div class="blog__post-column">
    <h1 class="page__header"><?php echo get_field('header_copy_text');?></h1>
</div>
<div class="blog__sidebar"></div>
<div class="blog__post-column">
    <hr class="blog__divider" />
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <?php gaia_mother_post_thumbnail(); ?>
        <div class="entry-content">
		    <?php
		    the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gaia-mother' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gaia-mother' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article>

                        <?php

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                    ?>
                </div>
                <div class="blog__sidebar">
                    <?php get_sidebar('page'); ?>
                </div>
            </div>
<?php get_footer(); ?>