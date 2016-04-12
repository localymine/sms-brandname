<!-- project -->
<div id="project" class="lst-pj">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <h2>Chúng tôi hành động</h2>
                <span>“Giá trị tạo lập niềm tin”.</span>
            </div>
        </div>
        <?php
        $lst_i = 0;
        $args = array(
            'hide_empty' => 1
        );
        $terms = get_terms('project-cat', $args);
        $args_terms = array();
        foreach ($terms as $term) {
            $args_terms[] = $term->slug;
        }
        ?>
        <div class="row-gap-medium"></div>
        <div id="tabs" class="row menu-tab-pro text-center nopadding">
            <ul class="list-inline">
                <?php foreach ($terms as $term) : ?>
                    <li><a class="lst_active <?php echo ($lst_i == 0) ? 'active' : '' ?>" href="#tabs-<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
                    <?php $lst_i++ ?>
                <?php endforeach; ?>
            </ul>
            <div class="tabs_for_all">
            <?php
            $i = 1;
            foreach ($terms as $term):
                $jssor_id = 'jssor_' . $i;
                $jssor_last_project_ids[] = $jssor_id;
                //
                ?>
                <!--<div class="row-gap-medium"></div>-->
                <div id="tabs-<?php echo $term->slug ?>" class="col-xs-12 col-md-12 text-center nopadding" style="margin-top: 2em;">
                    <div id="<?php echo $jssor_id ?>" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1840px; height: 330px; overflow: hidden; visibility: hidden;">
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1840px; height: 330px; overflow: hidden;">
                            <?php
                            $args = array(
                                'post_type' => 'last-project',
                                'posts_per_page' => 12,
                                'orderby' => array('date' => 'ASC'),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'project-cat',
                                        'field' => 'slug',
                                        'terms' => array($term->slug),
                                    ),
                                ),
                            );
                            $loop = new WP_Query($args);
                            //
                            if ($loop->have_posts()) :
                                while ($loop->have_posts()):
                                    $loop->the_post();
                                    ?>
                                    <?php
                                    //
                                    $sub_image = get_field('image');
//                                    $img_size = $sub_image['sizes']['large'];
                                    $img_size = $sub_image['url'];
                                    ?>
                                    <div style="display: none;">
                                        <div class="m-last-pj">
                                            <img data-u="image" src="<?php echo $img_size ?>" class="center-block" />
                                            <div class="m-o-effect">
                                                <div class="m-lp-item">
                                                    <div class="m-lp-row">
                                                        <a href="<?php the_permalink() ?>">
                                                            <i class="fa fa-eye fa-2x m-circle"></i>
                                                            <h2><?php the_title() ?></h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:2%;width:75px;height:70px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:0px;right:2%;width:75px;height:70px;" data-autocenter="2"></span>
                    </div>
                </div>
                <?php
                $i++;
            endforeach;
            ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- project end -->
<script>
    jssor_last_project_ids = <?php echo json_encode($jssor_last_project_ids) ?>;
</script>