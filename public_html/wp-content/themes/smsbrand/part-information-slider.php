<!-- slideDesign -->
<?php
$args = array(
    'post_type' => 'info-slider',
    'posts_per_page' => -1,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
?>
<div class="row nopadding nomargin" style="min-height: 200px;">

    <div id="slideDesign" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $found_posts = $loop->found_posts;
            for (0; $i < $found_posts; $i++):
                ?>
                <li data-target="#slideDesign" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
                <?php
            endfor;
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            //
            $i = 0;
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    //
                    $avatar = get_field('avatar');
                    ?>

                    <div class="item <?php echo ($i == 0) ? 'active' : '' ?>">
                        <div class="article-img">
                            <div class="img-intro">
                                <img class="img-responsive img-circle" alt="" src="<?php echo $avatar['sizes']['large'] ?>">
                            </div>
                        </div>
                        <div class="article-content">
                            <h4><?php echo get_field('info') ?></h4>
                            <p class="mod-articles-category-introtext">
                                <?php echo get_field('quote') ?>
                            </p>
                        </div>
                    </div>

                    <?php
                    $i++;
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>

</div>
<!-- slideDesign end -->