<?php
/*
 * Author: KhangLe
 * Template Name: Default
 */
get_header();
?>

<div class="container margin-top-xl margin-bottom-lg">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>