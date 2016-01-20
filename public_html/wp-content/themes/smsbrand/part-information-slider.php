<!-- slideDesign -->
<div class="row nopadding nomargin" style="min-height: 50px;">
    <div id="slideDesign">
        <!-- Jssor Slider Begin -->
        <div id="jssor_4">
            <!-- Loading Screen -->
            <div class="box-loading" u="loading">
                <div class="box-loading-overlay"></div>
                <div class="box-loading-img"></div>
            </div>
            <!-- Slides Container -->
            <div class="box-slider" u="slides">
                <?php
                $args = array(
                    'post_type' => 'info-slider',
                    'posts_per_page' => 1,
                    'orderby' => array('date' => 'DESC'),
                );
                $loop = new WP_Query($args);
                //
                if ($loop->have_posts()):
                    while ($loop->have_posts()):
                        $loop->the_post();
                        if (have_rows('images')):
                            while (have_rows('images')):
                                the_row();
                                //
                                $sub_image = get_sub_field('image');
                                ?>
                                <div>
                                    <img u="image" src2="<?php echo $sub_image['url'] ?>" />
                                </div>
                                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
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