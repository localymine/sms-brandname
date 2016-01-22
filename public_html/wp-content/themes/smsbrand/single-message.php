<?php
/*
 * Author: KhangLe
 *
 */
get_header();
?>

<div id="news-page-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding">
                <h2><?php the_title() ?></h2>
                <div><?php echo get_field('content') ?></div>
            </div>
            
            <?php get_sidebar('message') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>