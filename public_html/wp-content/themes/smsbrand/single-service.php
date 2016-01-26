<?php
/*
 * Author: KhangLe
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
                <!-- content detail -->
                <section id="content-detail" class="text-left">
                    <h2><?php the_title() ?></h2>
                    <!--<div class="social-network"><span>facebook-twister</span></div>-->
                    <div class="content">
                        <?php the_content() ?>
                    </div>
                </section>
                <!-- content detail end -->
            </div>
            <?php get_sidebar('service-right') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>