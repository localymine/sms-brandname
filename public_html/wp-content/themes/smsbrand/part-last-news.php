<!-- news -->
<div id="news" class="lst-pj">
    <div class="container nopadding">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center" data-wow-delay="0.5s">
                <h2>Tin Tức</h2>
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
            $row_line = 1;
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    $image = get_field('image');
                    ?>
                    <div class="col-xs-12 col-md-4 text-center <?php if ($row_line == 2) {
                echo('line-news');
            } ?> wow fadeInUp" data-wow-delay="0.5s">
                        <div class="module-special">
                            <article class="item">
                                <img class="img-responsive center-block img-sim" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                                <span class="service-title"><?php the_title() ?></span>
                                <div class="item-author">
                                    <i class="fa fa-calendar"></i> <?php the_date('M jS', '<span>', '</span>', true) ?>
                                    <i class="fa fa-user"></i> <?php echo ucfirst(get_the_author()) ?>
                                </div>
                                <div class="service-content"><?php echo wp_trim_words(get_the_excerpt(), 35, '...') ?></div>
                                <div class="read-more">
                                    <a href="<?php the_permalink() ?>">
                                        Read More <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php
                    $row_line++;
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- news end -->