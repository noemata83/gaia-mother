<div class="blog__post">
    <div class="post__frontmatter">
        <div class="post__category">
            <?php the_category();?>
        </div>
        <div class="post__title">
            <?php the_title();?>
        </div>
        <hr class="blog__divider">
        <div class="post__author">
            <i class="fas fa-user"></i> By <?php the_author(); ?>
        </div>
        <div class="post__comments">
            <i class="fas fa-comments"></i> <?php comments_number();?>
        </div>
    </div>
    <div class="post__content">
        <?php the_excerpt(); ?>
    </div>
</div>