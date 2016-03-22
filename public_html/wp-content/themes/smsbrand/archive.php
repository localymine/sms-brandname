<?php
/*
 * Author: KhangLe
 * Template Name: News
 */
get_header();
?>

<div class="row nopadding nomargin" style="min-height: 50px;">
    <div class="col-xs-12 col-md-12 nopadding">
        <img class="img-responsive nopadding" src="<?php echo get_banner_news() ?>"/>
    </div>
</div>

<!-- news -->
<?php get_template_part('part-news-top3') ?>
<!-- news end -->

<!-- list news -->
<div id="news-page-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding">
                <?php
                global $posts__id;
                $posts__id = '';
                $args = array(
                    'post_type' => array('news'),
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'paged' => $paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news-cat',
                            'field' => 'slug',
                            'terms' => array(get_query_var('news-cat')),
                        ),
                    ),
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()):
                    while ($wp_query->have_posts()): $wp_query->the_post();
                        $posts__id[] = get_the_ID();
                        $image = get_field('image');
                        ?>
                        <div class="col-xs-12 col-md-6 news-row text-center" style="margin-top: 20px;">
                            <div class="news-info" style="min-height: 200px;">
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
                <div class="col-xs-12 clear-fix">
                    <?php
                    wpbeginner_numeric_posts_nav();
                    ?>
                </div>
                <!-- more relation news -->
                <?php get_template_part('part-news-more') ?>
            </div>
            <?php get_sidebar('news-right-ar') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>