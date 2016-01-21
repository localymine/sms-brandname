<?php
/*
 * Author: KhangLe
 * Template Name: News
 */
get_header();
?>

<!-- news -->
<div id="news-page">
    <div class="container">
        <div class="row-gap-huge"></div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => array('news'),
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'post_date',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news-cat',
                        'field' => 'slug',
                        'terms' => array('top'),
                    ),
                ),
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                while ($loop->have_posts()): $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <div class="col-xs-12 col-md-4 text-center nopadding">
                        <img class="img-responsive center-block" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                        <a href="#">
                            <span class="service-title"><?php the_title() ?></span>
                        </a><br />
                        <div class="service-content"><?php the_excerpt() ?></div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
            <div class="col-md-1"></div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- news end -->

<!-- list news -->
<div id="news-page-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding">
                <?php
                $args = array(
                    'post_type' => array('news'),
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'tax_query' => array(
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
                        $image = get_field('image');
                        ?>
                        <div class="col-xs-12 col-md-6 text-center">
                            <div class="news-info">
                                <a href="<?php the_permalink() ?>">
                                    <h4><?php the_title() ?></h4>
                                    <span class="news-overlay"></span>
                                    <img class="img-responsive" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <!-- relation news -->
                <div class="col-xs-12 col-md-12 text-left nopadding">
                    <div class="more-news">
                        <div class="title_box_category width_common style_02">
                            <div class="txt_main_category">
                                <span class="news-rel-title">Tin tức liên quan</span>
                            </div>
                        </div>
                        <div class="content_box_category width_common">
                            <ul class="list_news_dot_3x3">
                                <li>
                                    <a href="">Thiết lập khu vực cấm bay, hạn chế bay</a> 
                                    <span class="txt_666">-Thứ 6 - 18/12/2015</span>
                                </li>
                                <li>
                                    <a href="">Thiết lập khu vực cấm bay, hạn chế bay</a> 
                                    <span class="txt_666">(14/12)</span>
                                </li>
                                <li>
                                    <a href="">Thiết lập khu vực cấm bay, hạn chế bay</a> 
                                    <span class="txt_666">(14/12)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 pr-bar">
                <span class="service-title">TIN TỨC LIÊN QUAN</span>
                <div class="border-titile"></div>
                <div>
                    <img class="img-responsive center-block" src="images/window-layer.png"/>
                </div>
                <div>
                    <img class="img-responsive center-block" src="images/layer-2.png"/>
                </div>
                <a href="#">
                    <span class="service-title">VIỄN THÔNG</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br />Demo test test test test test test test<br />Demo test test test test test</span></div>
            </div>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>