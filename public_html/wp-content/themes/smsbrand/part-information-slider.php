<!-- slideDesign -->
<div class="row nopadding nomargin" style="min-height: 50px;">
    <div id="slideDesign">
        <!-- Jssor Slider Begin -->
        <div id="jssor_info" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1200px; height: 330px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1200px; height: 330px; overflow: hidden;">
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
                                <div data-p="191.25" style="display: none;">
                                    <img data-u="image" src2="<?php echo $sub_image['url'] ?>" />
                                </div>
                                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb21" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype"></div>
            </div>
        </div>
        <!-- Jssor Slider End -->
    </div>
</div>
<!-- slideDesign end -->