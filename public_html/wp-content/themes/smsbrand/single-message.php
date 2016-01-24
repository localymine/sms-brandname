<?php
/*
 * Author: KhangLe
 *
 */
get_header();
?>
<section>
    <div class="col-xs-12 col-md-12 img-top">
        <div class="row">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/detail-1.png" />
        </div>
    </div>
</section>
<div id="message-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 content-message text-left nopadding">
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