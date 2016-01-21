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
            
            <div class="col-xs-12 col-md-3 pr-bar">
                <span class="service-title">TIN TỨC LIÊN QUAN</span>
                <div class="border-titile"></div>
                <div>
                    <img src="images/window-layer.png" class="img-responsive center-block">
                </div>
                <div>
                    <img src="images/layer-2.png" class="img-responsive center-block">
                </div>
                <a href="#">
                    <span class="service-title">VIỄN THÔNG</span>
                </a><br>
                <div class="service-content"><span>Demo test test test test test<br>Demo test test test test test test test<br>Demo test test test test test</span></div>
            </div>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>