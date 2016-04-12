<?php
/*
 * Author: KhangLe
 * Template Name: Help
 */
get_header();
?>
<div class="row nopadding nomargin" style="min-height: 50px;">
    <div class="col-xs-12 col-md-12 nopadding">
        <img class="img-responsive nopadding" src="<?php echo get_banner_news() ?>"/>
    </div>
</div>

<!-- body -->
<div id="news-page-body">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding">
                <?php
                global $posts__id;
                $posts__id = '';
                $args = array(
                    'post_type' => array('news'),
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news-cat',
                            'field' => 'slug',
                            'terms' => array('guide'),
                        ),
                        array(
                            'taxonomy' => 'news-cat',
                            'field' => 'slug',
                            'terms' => array('top'),
                            'operator' => 'NOT IN',
                        ),
                    ),
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()): $loop->the_post();
                        $posts__id[] = get_the_ID();
                        $image = get_field('image');
                        ?>
                        <div class="col-xs-12 col-md-6 text-center">
                            <div class="news-info">
                                <a href="<?php the_permalink() ?>">
                                    <h4><span><?php the_title() ?></span></h4>
                                    <img class="img-responsive center-block" height="250" src="<?php echo $image['sizes']['large'] ?>"/>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <!-- pr-bar -->
                <?php get_template_part('part-news-more') ?>
            </div>
            <?php get_sidebar('news-right') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- body end -->
<?php get_footer(); ?>