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
            <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'orderby' => array('date' => 'DESC'),
            );
            $loop = new WP_Query($args);
            //
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <div class="col-xs-12 col-md-4 text-center wow fadeInUp nopadding" data-wow-delay="0.5s">
                        <a href="<?php the_permalink() ?>">
                            <img class="img-responsive center-block" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                            <span class="service-title"><?php the_title() ?></span>
                            <div class="service-content"><?php the_excerpt() ?></div>
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
<!-- news end -->