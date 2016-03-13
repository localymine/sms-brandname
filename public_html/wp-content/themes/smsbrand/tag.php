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

<!-- list news -->
<div id="news-page-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center nopadding">
                <?php
                global $wp_query;

                if (is_tag()) {
                    $term_id = get_query_var('tag_id');
                    $taxonomy = 'post_tag';
                    $args = 'include=' . $term_id;
                    $terms = get_terms($taxonomy, $args);
                }

                $brand_name = $terms[0]->slug;


                if (get_query_var('paged')) {
                    $paged = get_query_var('paged');
                } elseif (get_query_var('page')) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }

                $args = array(
                    'post_type' => 'news',
                    'paged' => $paged,
                    'posts_per_page' => 24,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_tag',
                            'field' => 'slug',
                            'terms' => sanitize_title($brand_name)
                        )
                    )
                );
                $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()):
                    while ($wp_query->have_posts()): $wp_query->the_post();
                        $image = get_field('image');
                        ?>
                        <div class="col-xs-12 col-md-3 news-row text-center" style="margin-top: 20px;">
                            <div class="news-info" style="min-height: 230px">
                                <a href="<?php the_permalink() ?>">
                                    <h4><?php the_title() ?></h4>
                                    <span class="news-overlay"></span>
                                    <img class="img-responsive center-block" src="<?php echo $image['sizes']['large'] ?>"/>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-md-12">
                <?php
//                wpbeginner_numeric_posts_nav();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>