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
            <div class="col-xs-12 col-md-4 text-center nopadding">
                <img class="img-responsive center-block" src="images/service-1.png"/>
                <a href="#">
                    <span class="service-title">VIỄN THÔNG</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br />Demo test test test test test test test<br />Demo test test test test test</span></div>
            </div>
            <div class="col-xs-12 col-md-4 text-center new-middle nopadding">
                <img class="img-responsive center-block" src="images/service-1.png"/>
                <a href="#">
                    <span class="service-title">CÔNG NGHỆ THÔNG TIN</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br />Demo test test test test test test test<br />Demo test test test test test</span></div>
            </div>
            <div class="col-xs-12 col-md-3 text-center nopadding">
                <img class="img-responsive center-block" src="images/service-1.png"/>
                <a href="#">
                    <span class="service-title">KINH DOANH</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br />Demo test test test test test test test<br />Demo test test test test test</span></div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- news end -->
<!-- body -->
<div id="news-page-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding">
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay"></span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay">Demo demo</span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay">Demo demo</span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay">Demo demo</span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay">Demo demo</span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="news-info">
                        <a href="#">
                            <h4>Demo demo demo demo</h4>
                            <span class="news-overlay">Demo demo</span>
                            <img class="img-responsive" src="images/img-new1.png"/>
                        </a>
                    </div>
                </div>
                <!-- pr-bar -->
                <div class="col-xs-12 col-md-12 text-left nopadding">
                    <div class="more-news">
                        <div class="title_box_category width_common style_02">
                            <div class="txt_main_category">
                                <span>Xem Them </span>
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




















<div class="container news margin-top-xl margin-bottom-xl">
    <div class="row">
        <div class="col-xs-12 col-md-9 nopadding">
            <?php
            $args = array(
                'post_type' => array('news'),
                'posts_per_page' => 12,
                'order' => 'DESC',
                'orderby' => 'post_date',
                'paged' => $paged,
            );
            $wp_query = new WP_Query($args);
            ?>
            <?php if ($wp_query->have_posts()): ?>
                <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                    <?php $image = get_field('image'); ?>
                    <div class="col-xs-12 col-md-3 padding-left-xs padding-right-xs margin-bottom-sm margin-top-xs">
                        <article class="box">
                            <a href="<?php the_permalink() ?>">
                                <figure>
                                    <img src="<?php echo $image['sizes']['thumbnail'] ?>" class="img-responsive center-block" />
                                </figure>
                                <h2><?php the_title() ?></h2>
                            </a>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-xs-12">
                <div class="paging-navigation text-center">
                    <?php
                    wpbeginner_numeric_posts_nav();
                    ?>
                </div>
            </div>
            <?php wp_reset_postdata() ?>
        </div>
        <div class="col-xs-12 col-md-3">

        </div>
    </div>
</div>

<?php get_footer(); ?>