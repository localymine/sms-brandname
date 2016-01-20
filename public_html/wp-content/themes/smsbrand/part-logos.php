<!-- sliderLogo -->
<div id="sliderLogo">
    <div class="container">
        <div class="row-gap-huge"></div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'group-logos',
                'posts_per_page' => 5,
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()) :
                while ($loop->have_posts()):
                    $loop->the_post();
                    while (have_rows('images')):
                        the_row();
                        //
                        $image = get_sub_field('image');
                        $img_size = $image['sizes']['large'];
                        ?>
                        <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <img class="img-responsive center-block" src="<?php echo $img_size ?>"/>
                        </div>
                        <?php
                    endwhile;
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="row-gap-huge"></div>
    </div>
</div>
<!-- sliderLogo end -->