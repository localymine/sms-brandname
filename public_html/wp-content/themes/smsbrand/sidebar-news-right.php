<div class="col-xs-12 col-md-3 pr-bar nopadding">
    <?php get_template_part('part-news-banner-top') ?>
    <span class="service-title">TIN TỨC LIÊN QUAN</span>
    <div class="border-titile clearfix"></div>
    <?php
    global $posts__id;
    $arr_terms = array();
    
    if (is_single()) {
        //
        $terms = get_the_terms($post->ID, 'news-cat');
        $arr_terms[] = ($terms != FALSE) ? $terms[0]->slug : '';
        //
        $args = array(
            'post_type' => array('news'),
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'post_date',
            'post__not_in' => array($post->ID),
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-cat',
                    'field' => 'slug',
                    'terms' => $arr_terms,
                ),
                array(
                    'taxonomy' => 'news-cat',
                    'field' => 'slug',
                    'terms' => array('top', 'guide'),
                    'operator' => 'NOT IN',
                ),
            ),
        );
    } else {
        //
        $args = array(
            'post_type' => array('news'),
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'post_date',
            'post__not_in' => $posts__id,
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-cat',
                    'field' => 'slug',
                    'terms' => array('top', 'guide'),
                    'operator' => 'NOT IN',
                ),
            ),
        );
    }

    $loop = new WP_Query($args);
    if ($loop->have_posts()):
        while ($loop->have_posts()): $loop->the_post();
            $image = get_field('image');
            ?>
            <div class="col-xs-12 nopadding news-slide-row">
                <div class="col-xs-12 col-md-5 nopadding">
                    <a href="<?php the_permalink() ?>">
                        <img class="img-responsive" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                    </a>
                </div>
                <div class="col-xs-12 col-md-7 nopadding">
                    <a href="<?php the_permalink() ?>">
                        <h4>
                            <?php the_title() ?>
                            <!--<span>-->
                                <!--<h5>-->
                                <?php // echo wp_trim_words(get_the_excerpt(), 15, '...') ?>
                                <!--</h5>-->
                            <!--</span>-->
                        </h4>
                    </a>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
    
    <?php get_template_part('part-news-banner-bottom') ?>
</div>
