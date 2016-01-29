<div class="col-xs-11 col-md-12 text-left nopadding">
    <div class="more-news">
        <div class="title_box_category width_common style_02">
            <div class="txt_main_category">
                <span class="news-rel-title">Có thể bạn chưa xem</span>
            </div>
        </div>
        <div class="content_box_category width_common">
            <ul class="list_news_dot_3x3">
                <?php
                global $post__id;
                $post__id[] = $post->ID;
                //
                $args = array(
                    'post_type' => array('news'),
                    'order' => 'DESC',
                    'orderby' => 'rand',
                    'post__not_in' => $post__id,
                    'posts_per_page' => 10,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news-cat',
                            'field' => 'slug',
                            'terms' => array('top', 'guide'),
                            'operator' => 'NOT IN',
                        ),
                    ),
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()): $loop->the_post();
                        $post__id[] = $post->ID;
                        $image = get_field('image');
                        ?>
                        <li>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                            <span class="txt_666">-<?php the_date('l, H:i, d/m/Y', '<span>', '</span>', true) ?></span>
                        </li>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</div>