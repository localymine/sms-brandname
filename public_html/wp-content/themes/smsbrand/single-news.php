<?php
/*
 * Author: KhangLe
 */
get_header();
?>

<div class="row nopadding nomargin" style="min-height: 50px;">
    <div class="col-xs-12 col-md-12 nopadding">
        <img class="img-responsive nopadding" src="<?php echo get_banner_news() ?>"/>
    </div>
</div>

<?php
$terms = get_the_terms($post->ID, 'news-cat');
if ($terms && !is_wp_error($terms)) {

    $draught_links = array();

    foreach ($terms as $term) {
        $draught_links[] = $term->name;
    }

    $on_draught = join(", ", $draught_links);
}
?>
<!-- list news -->
<div id="news-page-body">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center nopadding single-news">
                <!-- content detail -->
                <section id="content-detail" class="text-left">
                    <h2><?php the_title() ?></h2>
                    <div class="time">
                        <span><i class="fa fa-star"></i> <?php echo $on_draught ?></span> | <?php the_date('H:i, d/m/Y', '<span>', '</span>', true) ?>
                        <span>
                            <i class="fa fa-user"></i> 
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php echo ucfirst(get_the_author()) ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <!-- social network -->
                    <?php get_template_part('part-social-share') ?>
                    <!-- social network end -->
                    <div class="content">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- content detail end -->

                <hr/>
                <?php
                if (get_the_tag_list()) {
                    echo get_the_tag_list('<ul class="hstag"><li>', '</li><li>', '</li></ul>');
                }
                ?>

                <hr/>
                <div class="col-md-12" style="text-align: left;">
                    <table>
                        <?php comments_template('', true); ?>
                    </table>
                </div>

                <hr/>
                <div class="comments">
                    <ul class="list-comments" style="text-align: left;list-style-type: none;">
                        <?php wp_list_comments(array('style' => 'ul')); ?> 
                    </ul>
                </div>

                <hr/>
                <?php
                global $post__id;
                $post__id[] = $post->ID;
                //
                $args = array(
                    'post_type' => array('news'),
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'post__not_in' => $post->ID,
                    'posts_per_page' => 6,
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
                        <div class="col-xs-12 col-md-6 text-center">
                            <div class="news-info">
                                <a href="<?php the_permalink() ?>">
                                    <h4><?php the_title() ?></h4>
                                    <span class="news-overlay"><?php the_content() ?>wer</span>
                                    <img class="img-responsive" src="<?php echo $image['sizes']['thumbnail'] ?>"/>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1405479576355526";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>  
                <fb:comments href="<?php the_permalink(); ?>"></fb:comments>
                <!-- more relation news -->
                <?php get_template_part('part-news-more') ?>
            </div>
            <?php get_sidebar('news-right') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>

<?php get_footer(); ?>