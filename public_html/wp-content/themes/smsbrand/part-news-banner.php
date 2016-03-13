<div class="border-titile clearfix"></div>
<?php
$args = array(
    'post_type' => array('news-banner'),
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'post_date',
);

$loop = new WP_Query($args);
if ($loop->have_posts()):
    while ($loop->have_posts()): $loop->the_post();
        if (have_rows('banner')):
            while (have_rows('banner')): the_row();
                $image = get_sub_field('image');
                ?>
                <div class="col-xs-12 nopadding news-slide-row">
                    <div class="col-xs-12 col-md-12 nopadding">
                        <a href="<?php echo get_sub_field('url') ?>">
                            <img class="img-responsive" src="<?php echo $image['sizes']['large'] ?>"/>
                        </a>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
    endwhile;
endif;
wp_reset_postdata();
?>
