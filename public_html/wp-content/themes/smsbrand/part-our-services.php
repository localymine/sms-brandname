<!-- service -->
<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <h2>Chúng tôi có</h2>
                <span class="mess-title">Thiết kế sản phẩm dựa trên nguyên lý lấy khách hàng làm gốc</span>
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
                        <div class="module-special">
                            <article class="item">
                                <img class="img-responsive center-block img-sim" src="<?php echo $img_size ?>"/>
                                <a href="<?php echo get_field('url') ?>">
                                    <span class="service-title"><?php the_title() ?></span>
                                </a>
                                <div class="service-content"><?php echo wp_trim_words(get_field('description'), 35, '...') ?></div>
                                <div class="read-more">
                                    <a href="<?php echo get_field('url') ?>">
                                       Read More <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
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