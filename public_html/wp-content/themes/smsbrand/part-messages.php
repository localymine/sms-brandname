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
        $i = 2;
        $selected = 2;
        $countLine = 1;
        ?>
        <?php
        if ($loop->have_posts()) :
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <div id="tabs-<?php the_ID() ?>" <?php echo ($i == $selected) ? ' style="display:block;" aria-hidden="false" ' : '' ?>>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center nopadding" data-wow-delay="0.5s">
                            <h2><?php the_title() ?></h2>
                            <span><?php echo get_field('sub_title') ?></span>
                        </div>
                    </div>
                    <div class="row-gap-big"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 main-text-design nopadding" data-wow-delay="1s">
                            <?php echo get_field('short_content') ?>
                            <a href="<?php the_permalink() ?>">
                                <article id="item-1" class="item">
                                    <span> READ MORE </span>
                                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                                </article>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-6 main-img-design nopadding" data-wow-delay="1s">
                            <?php
                            $image = get_field('image');
                            $url = $image['url'];
                            $img_size = $image['sizes']['medium'];
                            ?>
                            <!--<a href="#">-->
                            <article id="item-1" class="item">
                                <img class="img-responsive pull-right" src="<?php echo $img_size ?>"/>
                            </article>
                            <!--</a>-->
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            endwhile;
        endif;
        ?>
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <ul class="list-inline ul-diff">
                    <?php
                    $i = 0;
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()):
                            $loop->the_post();
                            ?>
                            <?php if ($countLine == 1) : ?>
                                <li>
                                    <div class='middle-item'></div>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="#tabs-<?php the_ID() ?>">
                                    <article id="item-<?php the_ID() ?>" class="item mico mico-<?php echo get_field('icon_style') ?> <?php echo ($i == $selected) ? ' selected ' : '' ?>"></article>
                                </a>
                            </li>
                            <li>
                                <div class='middle-item'></div>
                            </li>
                            <?php
                            $countLine++;
                            $i++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- design end -->