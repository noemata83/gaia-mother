<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gaia-mother
 */

?>

<div class="blog__post">
    <div class="post__frontmatter">
        <div class="post__category">
            <?php the_category();?>
        </div>
        <div class="post__title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </div>
        <hr class="blog__divider">
        <div class="post__author">
            <i class="fas fa-user"></i> By <?php the_author_posts_link(); ?>
        </div>
        <div class="post__comments">
            <i class="fas fa-comments"></i> <?php comments_number();?>
        </div>
    </div>
    <div class="post__content">
        <?php the_excerpt(); ?>
    </div>
</div>