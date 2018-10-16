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
            <i class="fas fa-user"></i> By <a href="<?php the_author_posts_link(); ?>"><?php the_author(); ?></a>
        </div>
        <div class="post__comments">
            <i class="fas fa-comments"></i> <?php comments_number();?>
        </div>
    </div>
    <div class="post__content">
        <?php the_excerpt(); ?>
    </div>
</div>