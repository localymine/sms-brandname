<div class="col-xs-12 col-md-3 pr-bar">
    <span class="service-title">
        <i class="fa">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/dif-detail-3.png" />
        </i> TIN TỨC LIÊN QUAN
    </span>
    <div></div>
    <?php
    $args = array(
        'post_type' => array('news'),
        'posts_per_page' => 6,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'tax_query' => array(
            array(
                'taxonomy' => 'news-cat',
                'field' => 'slug',
                'terms' => array('top'),
                'operator' => 'NOT IN',
            ),
        ),
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
        while ($loop->have_posts()): $loop->the_post();
            $image = get_field('image');
            ?>
            <div class="border-title">
                <h2><?php the_title() ?></h2>
                <div><?php the_excerpt() ?></div>
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>
