<?php
/*
 * Author: KhangLe
 * Template Name: SMS 8x77
 */
get_header();
?>

<?php
$args = array(
    'post_type' => array('sms'),
    'post_per_page' => 1,
    'tax_query' => array(
        array(
            'taxonomy' => 'sms-type',
            'field' => 'slug',
            'terms' => array('sms-8x77'),
        ),
    ),
);
$loop = new WP_Query($args);
if ($loop->have_posts()):
    while ($loop->have_posts()): $loop->the_post();
        $banner_image = get_field('banner_image');
        ?>

        <section>
            <div class="col-xs-12 col-md-12 img-top">
                <div class="row">
                    <img class="img-responsive nopadding" src="<?php echo $banner_image['url'] ?>" />
                </div>
            </div>
        </section>

        <!-- content -->
        <?php
        $counter = 0;
        //
        if (have_rows('block_information')):
            while (have_rows('block_information')): the_row();
                $class = ($counter % 2 == 0) ? 'even' : 'odd';
                //
                if (get_sub_field('set_position') == 0):

                    if (have_rows('set_image_left')):
                        while (have_rows('set_image_left')): the_row();
                            $image = get_sub_field('image');
                            ?>

                            <div id="marketing-<?php the_ID() ?>" class="marketing <?php echo $class ?>">
                                <div class="container">
                                    <div class="row-gap-big"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 text-center wow fadeInDown" data-wow-delay="0.5s">
                                            <h2 class="market-titile"><?php echo get_sub_field('sub_title') ?></h2>
                                        </div>
                                        <div class="col-xs-12 col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
                                            <img class="img-responsive pull-left" src="<?php echo $image['url'] ?>"/>
                                        </div>
                                        <div class="col-xs-12 col-md-6 text-left wow fadeInRight" data-wow-delay="0.5s">
                                            <p><?php echo get_sub_field('content') ?></p>
                                        </div>
                                    </div>
                                    <div class="row-gap-big"></div>
                                </div>
                            </div>

                            <?php
                        endwhile;
                    endif;

                else:

                    if (have_rows('set_image_right')):
                        while (have_rows('set_image_right')): the_row();
                            $image = get_sub_field('image');
                            ?>

                            <div id="marketing-<?php the_ID() ?>" class="marketing <?php echo $class ?>">
                                <div class="container">
                                    <div class="row-gap-big"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 text-center wow fadeInDown" data-wow-delay="0.5s">
                                            <h2 class="market-titile"><?php echo get_sub_field('sub_title') ?></h2>
                                        </div>
                                        <div class="col-xs-12 col-md-6 text-left wow fadeInRight" data-wow-delay="0.5s">
                                            <p><?php echo get_sub_field('content') ?></p>
                                        </div>
                                        <div class="col-xs-12 col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
                                            <img class="img-responsive pull-left" src="<?php echo $image['url'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-gap-big"></div>
                                </div>
                            </div>

                            <?php
                        endwhile;
                    endif;

                endif;
                //
                $counter++;
            endwhile;
        endif;
        ?>
        <!-- content end -->

        <?php
    endwhile;
endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>