<!-- project -->
<div id="project">
    <div class="container-fluid">
        <div class="row-gap-huge"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <h2>Latest Projects</h2><br />
                <span>Test demo Test demo, Test demo Test demo Test demo</span>
            </div>
        </div>
        <div class="row-gap-big"></div>
        <?php
        $args = array(
            'hide_empty' => 0
        );
        $terms = get_terms('project-cat', $args);
        $args_terms = array();
        foreach ($terms as $term) {
            $args_terms[] = $term->slug;
        }
        $args = array(
            'post_type' => 'last-project',
            'posts_per_page' => -1,
            'orderby' => array('date' => 'ASC'),
            'tax_query' => array(
                array(
                    'taxonomy' => 'project-cat',
                    'field' => 'slug',
                    'terms' => $args_terms,
                ),
            ),
        );
        $loop = new WP_Query($args);
        $count_all = $loop_all->found_posts;
        ?>
        <div id="tabs" class="row menu-tab-pro text-center nopadding">
            <ul class="list-inline">
                <?php foreach ($terms as $term) : ?>
                    <li><a href="#tabs-<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="row-gap-medium"></div>

            <?php foreach ($terms as $term) : ?>
                <?php
                if ($loop->have_posts()) :
                    while ($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div id="tabs-<?php echo $term->slug ?>" class="col-xs-12 col-md-12 text-center nopadding">
                            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                    <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                </div>
                                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1840px; height: 250px; overflow: hidden;">
                                    <?php
                                    if (have_rows('images')):
                                        while (have_rows('images')): the_row();
                                            ?>
                                             <?php
                                            $sub_image = get_sub_field('image');
                                            $img_size = $sub_image['sizes']['medium'];
                                            ?>
                                            <div style="display: none;">
                                                <img data-u="image" src="<?php echo $img_size ?>" />
                                            </div>
                                             <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora06l" style="top:0px;left:200px;width:45px;height:45px;" data-autocenter="2"></span>
                                <span data-u="arrowright" class="jssora06r" style="top:0px;right:200px;width:45px;height:45px;" data-autocenter="2"></span>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- project end -->