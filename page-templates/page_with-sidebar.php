<?php
/**
 * Template Name: Page with Sidebar
 */
get_header( 'page' );
 ?>
                <div class="blog__post-column">
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
                </div>
                <div class="blog__sidebar">
                    <?php get_sidebar('page'); ?>
                </div>
            </div>
<?php get_footer(); ?>