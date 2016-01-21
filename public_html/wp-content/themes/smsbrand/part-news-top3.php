<div id="news-page">
    <div class="container">
        <div class="row-gap-huge"></div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => array('news'),
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'post_date',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news-cat',
                        'field' => 'slug',
                        'terms' => array('top'),
                    ),
                ),
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                while ($loop->have_posts()): $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <div class="col-xs-12 col-md-4 text-center nopadding">
                        <img class="img-responsive center-block" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                        <a href="#">
                            <span class="service-title"><?php the_title() ?></span>
                        </a><br />
                        <div class="service-content"><?php the_excerpt() ?></div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
            <div class="col-md-1"></div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>