<!-- design -->
<div id="design">
    <div id="tabs-design" class="container">
        <div class="row-gap-big"></div>
        <?php
        $args = array(
            'post_type' => 'message',
            'posts_per_page' => 5,
        );
        $loop = new WP_Query($args);
        $i = 0;
        $selected = 0;
        ?>

        <div class="row">
            <div class="col-xs-12 col-md-12 text-center nopadding" data-wow-delay="0.5s">
                <h2>What makes us different?</h2>
                <span class="mess-title">Mang lại trãi nghiệm người dùng là cơ hội để chúng tôi bức phá</span>
            </div>
        </div>
        <div class="row-gap-big"></div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                if ($loop->have_posts()) :
                    while ($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="bg-item item <?php echo ($i == 0) ? ' active ' : '' ?>">
                            <div class="col-md-12">
                                <div class="col-xs-12 col-md-6 main-text-design nopadding" data-wow-delay="1s">
                                    <h4><?php the_title() ?></h4>
                                    <h5><?php echo get_field('sub_title') ?></h5>
                                    <p><?php echo get_field('short_content') ?></p>
                                    <a href="<?php the_permalink() ?>">
                                        <article id="item-1" class="item">
                                            <span> READ MORE </span>
                                            <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-md-6 main-img-design nopadding" data-wow-delay="1s">
                                    <?php
                                    $image = get_field('image');
                                    $url = $image['url'];
                                    $img_size = $image['sizes']['medium'];
                                    ?>
                                    <article id="item-1" class="item">
                                        <img class="img-responsive center-block" src="<?php echo $img_size ?>"/>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>

        <div class="row tab-item">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <ol class="ul-diff carousel-indicators">
                    <?php
                    $i = 0;
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()):
                            $loop->the_post();
                            ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>" id="<?php the_ID() ?>">
                                <span class="item-title hidden-xs"><?php the_title() ?></span>
                                <article id="item-<?php the_ID() ?>" class="c-anchor mico mico-<?php echo get_field('icon_style') ?> <?php echo ($i == $selected) ? ' selected ' : '' ?>"></article>
                            </li>
                            <?php
                            $i++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- design end -->