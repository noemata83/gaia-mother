<?php
get_header();
?>
<main id="about">
    <div class="hero">
        <div class="hero__text">
            <p class="hero__lead">
                <?php the_field('hero_bold_text'); ?>
            </p>
            <div class="hero__copy">
                <?php the_field('hero_copy_text'); ?>
            </div>
        </div>
    </div>
    <section class="mobile-copy">
        <p>
            Few things are more important than our planet. The name Gaia (pronounced GUY-YA) comes from the gnostic term for Mother Earth, symbolic of our unyielding approach to developing safe and effective products for people, pets, and property.
        </p>
    </section>
    <?php if (have_rows('about_content')): 

    while (have_rows('about_content')): the_row();?>
        <?php if( get_row_layout() == 'image_right'): ?>
        <section style="margin-top: 4rem;">
            <div class="row">
                <div class="col">
                    <?php the_sub_field('image_right_text'); ?>
                </div>
                <div class="col flex-col">
                    <?php $image = get_sub_field('image_right_image') ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
                </div>
            </div>
        </section>
        <?php elseif (get_row_layout() == 'image_left'): ?>
        <section style="margin-top: 4rem;">
            <div class="row">
                <div class="col flex-col">
                    <?php $image = get_sub_field('image_left_image'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
                </div>
                <div class="col">
                    <?php the_sub_field('image_left_text'); ?>
                </div>
            </div>
        </section>
        <?php elseif (get_row_layout() == 'full_width_text'): ?>
        <section style="margin-top: 4rem;">
            <div class="row">
                <div class="col-full-width">
                    <?php the_sub_field('text'); ?>
                </div>
            </div>
        </section>
        <?php elseif (get_row_layout() == 'floating_text_with_image'):
            $bgImage = get_sub_field('background_image');
            $mobileImage = get_sub_field('mobile_fallback_image');
            ?>
        <section style="margin-top: 4rem;">
            <div class="floating" style="background-image: url('<?php echo $bgImage['url'] ?>');">
                <div class="floating__text">
                    <?php the_sub_field('copy'); ?>
                </div>
            </div>
            <div class="floating__mobile">
                <div class="floating__text">
                    <?php the_sub_field('copy'); ?>
                </div>
                <img class="floating__mobile-graphic" src="<?php echo $mobileImage['url'] ?>" />
            </div>
        </section>
        <?php elseif (get_row_layout() == 'full_width_image'): 
            $image = get_sub_field('image');
            ?>
            <div class="graphic" style="background-image: url('<?php echo $image['url'] ?>')"></div>
        <?php endif;?>
    <?php endwhile;
endif;    

get_footer();?>   