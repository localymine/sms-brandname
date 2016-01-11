<?php
/*
 * Author: KhangLe
 *
 */
get_header();
?>

<!-- silder -->
<?php
$args = array(
    'post_type' => 'home-slider',
    'posts_per_page' => -1,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
$home_slider = array();
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        while (have_rows('images')) {
            the_row();
            $image = get_sub_field('image');
            $full = $image['url'];
            $home_slider[]['image'] = $full;
        }
    }
}
//
wp_reset_postdata();
?>
<div class="row nopadding nomargin" style="min-height: 50px;">
    <!-- Jssor Slider Begin -->
    <div id="slider1_container">
        <!-- Loading Screen -->
        <div class="box-loading" u="loading">
            <div class="box-loading-overlay"></div>
            <div class="box-loading-img"></div>
        </div>
        <!-- Slides Container -->
        <div class="box-slider" u="slides">
            <?php for ($i = 0; $i < count($home_slider); $i++): ?>
                <div>
                    <img u="image" src2="<?php echo $home_slider[$i]['image'] ?>" />
                </div>
            <?php endfor; ?>
        </div>

        <!--#region Bullet Navigator Skin Begin -->
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top:158px;left:230px;width:40px;height:40px;"></span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top:158px;right:230px;width:40px;height:40px;"></span>
        <!--#endregion Arrow Navigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
</div>
<!-- silder end -->
<!-- design -->
<div id="design">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <h2>What makes us different</h2>
                <span>Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo</span>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-6 main-text-design wow fadeInLeft nopadding" data-wow-delay="1s">
                <span class="title">Unique & Fresh Design</span><br /><br />
                <span>It is a long established fact that a reader will be distracted by.</span><br /><br />
                <a href="#">
                    <article id="item-1" class="item">
                        <span> READ MORE </span>
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </article>
                </a>
            </div>
            <div class="col-xs-12 col-md-6 wow fadeInRight nopadding" data-wow-delay="1s">
                <a href="#">
                    <article id="item-1" class="item">
                        <img class="img-responsive pull-right" src="<?php echo get_template_directory_uri(); ?>/images/prod-p2.jpg"/>
                    </article>
                </a>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="1.5s">
                <span>Unique & Fresh Design</span>
                <a href="#">
                    <article id="item-1" class="item">
                        <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/bg-img.png"/>
                    </article>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- design end -->
<!-- service -->
<div id="service">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <h2>Our Services</h2>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div class="row-gap-medium"></div>
        <div class="row">
            <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">WEB DESIGN</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br /> test test test test test 
                test test test test <br /> test test test test test.</span></div>
            </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">WEB DESIGN</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br /> test test test test test 
                test test test test <br /> test test test test test.</span></div>
            </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">WEB DESIGN</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test<br /> test test test test test 
                test test test test <br /> test test test test test.</span></div>
            </div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- service end -->
<!-- project -->
<div id="project">
    <div class="container-fluid">
        <div class="row-gap-huge"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <h2>Latest Projects</h2><br />
                <span>Test demo Test demo, Test demo Test demo Test demo</span>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div id="tabs" class="row menu-tab-pro text-center nopadding">
            <ul class="list-inline">
                <li><a href="#tabs-1">Nunc tincidunt</a></li>
                <li><a href="#tabs-2">Proin dolor</a></li>
                <li><a href="#tabs-3">Aenean lacinia</a></li>
            </ul>
            <div class="row-gap-medium"></div>
            <div id="tabs-1" class="col-xs-12 col-md-12 text-center nopadding">
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri(); ?>/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden;">
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/005.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/006.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/011.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/013.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/014.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/019.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/020.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/021.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/022.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/024.jpg" />
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora06l" style="top:0px;left:200px;width:45px;height:45px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora06r" style="top:0px;right:200px;width:45px;height:45px;" data-autocenter="2"></span>
                </div>
            </div>
            <div id="tabs-2" class="col-xs-12 col-md-12 text-center nopadding">
                <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri(); ?>/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden;">
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/024.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/022.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/021.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/019.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/014.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/013.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/020.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/011.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/006.jpg" />
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/005.jpg" />
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora06l" style="top:0px;left:200px;width:45px;height:45px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora06r" style="top:0px;right:200px;width:45px;height:45px;" data-autocenter="2"></span>
                </div>
            </div>
            <div id="tabs-3" class="col-xs-12 col-md-12 text-center nopadding">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">WEB DESIGN</span>
                </a><br />
                <div class="service-content"><span>Demo test test 3333<br /> test test test test test 
                test test test test <br /> test test test test test.</span></div>
            </div>
        </div>
    </div>
</div>
<!-- project end -->
<!-- sliderLogo -->
<div id="sliderLogo">
    <div class="container">
        <div class="row-gap-huge"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/slide-logo.png"/>
            </div>
        </div>
        <div class="row-gap-huge"></div>
    </div>
</div>
<!-- sliderLogo end -->
<!-- slideDesign -->
<div class="row nopadding nomargin" style="min-height: 50px;">
    <div id="slideDesign">
    <!-- Jssor Slider Begin -->
        <div id="jssor_3">
            <!-- Loading Screen -->
            <div class="box-loading" u="loading">
                <div class="box-loading-overlay"></div>
                <div class="box-loading-img"></div>
            </div>
            <!-- Slides Container -->
            <div class="box-slider" u="slides">
                <div>
                    <img u="image" src2="<?php echo get_template_directory_uri(); ?>/images/slider-3.png" />
                </div>
                <div>
                    <img u="image" src2="<?php echo get_template_directory_uri(); ?>/images/slide-4.png" />
                </div>
            </div>

            <!--#region Bullet Navigator Skin Begin -->
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    </div>
</div>
<!-- slideDesign end -->
<!-- news -->
<div id="news">
    <div class="container nopadding">
        <div class="row-gap-huge"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center" data-wow-delay="0.5s">
                <h2>News</h2>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">No-IP regains control of some<br /> domains seized by Microsoft</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test</span></div>
            </div>
            <div class="col-xs-12 col-md-4 text-center new-middle wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">No-IP regains control of some<br /> domains seized by Microsoft</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test</span></div>
            </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/service-1.png"/>
                <a href="#">
                    <span class="service-title">No-IP regains control of some<br /> domains seized by Microsoft</span>
                </a><br />
                <div class="service-content"><span>Demo test test test test test</span></div>
            </div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- news end -->

<?php get_footer(); ?>