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
        <!-- Slides Container -->
        <div class="box-slider" data-u="slides">
            <?php for ($i = 0; $i < count($home_slider); $i++): ?>
                <div>
                    <img data-u="image" src2="<?php echo $home_slider[$i]['image'] ?>" />
                </div>
            <?php endfor; ?>
        </div>

        <!--#region Bullet Navigator Skin Begin -->
        <!-- bullet navigator container -->
        <div data-u="navigator" class="jssorb21">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Arrow Left -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:2%;width:45px;height:45px;" data-autocenter="2"></span>
        <!-- Arrow Right -->
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:2%;width:45px;height:45px;" data-autocenter="2"></span>
        <!--#endregion Arrow Navigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
</div>
<!-- silder end -->