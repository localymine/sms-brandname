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
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 3,
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()) :
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <?php
                    $image = get_field('image');
                    $url = $image['url'];
                    $img_size = $image['sizes']['medium'];
                    ?>
                    <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                        <a href="<?php the_permalink() ?>">
                            <img class="img-responsive center-block" src="<?php echo $img_size ?>"/>
                            <span class="service-title"><?php the_title() ?></span>
                            <div class="service-content"><?php echo get_field('description') ?></div>
                        </a>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- service end -->