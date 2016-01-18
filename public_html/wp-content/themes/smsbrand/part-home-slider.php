<!-- silder -->
<?php
$args = array(
    'post_type' => 'home-slider',
    'posts_per_page' => 1,
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