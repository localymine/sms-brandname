<?php

define('ACF_LITE', true);

/*
 * This file is custom post type, custom taxonomy and custom fields
 * definition file.
 * 
 * Exported from CPT UI & Advanced Custom Fields
 */

/* ---------------------------------------------------------------------------- */
/* post type definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_cpts() {
    $labels = array(
        "name" => "Home Slider",
        "singular_name" => "Home Slider",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "home-slider", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h1.png',
        "supports" => array("title"),
    );
    register_post_type("home-slider", $args);

    $labels = array(
        "name" => "Message",
        "singular_name" => "Message",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "message", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h2.png',
        "supports" => array("title"),
    );
    register_post_type("message", $args);

    $labels = array(
        "name" => "Our Services",
        "singular_name" => "Our Services",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h3.png',
        "supports" => array("title"),
    );
    register_post_type("service", $args);

    $labels = array(
        "name" => "Last Projects",
        "singular_name" => "Last Projects",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "last-project", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h4.png',
        "supports" => array("title"),
    );
    register_post_type("last-project", $args);

    $labels = array(
        "name" => "Group logos",
        "singular_name" => "Group logos",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "group-logos", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h5.png',
        "supports" => array("title"),
    );
    register_post_type("group-logos", $args);







    $labels = array(
        "name" => "News",
        "singular_name" => "News",
        "menu_name" => "Tin tức",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "topic/%news-type%", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/images/ad-ico/h5.png',
        "supports" => array("title", "editor", "excerpt"),
    );
    register_post_type("news", $args);


// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* taxonomy definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_taxes');

function cptui_register_my_taxes() {

    $labels = array(
        "name" => "Project Category",
        "label" => "Project Category",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "label" => "Project Category",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'project-cat', 'with_front' => true),
        "show_admin_column" => true,
    );
    register_taxonomy("project-cat", array("last-project"), $args);

    $labels = array(
        "name" => "News",
        "label" => "News Category",
        "menu_name" => "News Category",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "label" => "News Type",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'news', 'with_front' => true),
        "show_admin_column" => true,
    );
    register_taxonomy("news-type", array("news"), $args);

// End cptui_register_my_taxes
}

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_home-slider',
        'title' => 'Home Slider',
        'fields' => array(
            array(
                'key' => 'field_5649e7ebdc0e1',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5649e7f9dc0e2',
                        'label' => 'image',
                        'name' => 'image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'home-slider',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_message',
        'title' => 'Message',
        'fields' => array(
            array(
                'key' => 'field_569c6e651860b',
                'label' => 'Icon Style',
                'name' => 'icon_style',
                'type' => 'select',
                'choices' => array(
                    15 => 'Question',
                    16 => 'Lightbulb',
                    17 => 'Flag',
                    18 => 'Microphone',
                    19 => 'Pencil',
                ),
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_569c6bc0522d1',
                'label' => 'Sub Title',
                'name' => 'sub_title',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_569c6c0c522d2',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_569c6c4f522d3',
                'label' => 'Short Content',
                'name' => 'short_content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'basic',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_569c6c5f522d4',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'message',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_our-services',
        'title' => 'Our Services',
        'fields' => array(
            array(
                'key' => 'field_569d7ae3b1d38',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_569d7afbb1d39',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_last-project',
        'title' => 'Last Project',
        'fields' => array(
            array(
                'key' => 'field_569d7f94a3342',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_569d7fb5a3343',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_569d810c50b1c',
                        'label' => 'Url',
                        'name' => 'url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'last-project',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_group-logo',
        'title' => 'Group Logo',
        'fields' => array(
            array(
                'key' => 'field_569e72f246e53',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_569e730046e54',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'group-logos',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_news',
        'title' => 'News',
        'fields' => array(
            array(
                'key' => 'field_5657396f9fdc8',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'news',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}

/* -------------------------------------------------------------------------- */

/* F1iltro per modificare il permalink */
add_filter('post_link', 'news_permalink', 1, 3);
add_filter('post_type_link', 'news_permalink', 1, 3);

function news_permalink($permalink, $post_id, $leavename) {
    //replace %news-type% with custom post type category slug
    if (strpos($permalink, '%news-type%') === FALSE)
        return $permalink;
    // Get post
    $post = get_post($post_id);
    if (!$post)
        return $permalink;

    // Get taxonomy terms
    $terms = wp_get_object_terms($post->ID, 'news-type');
    if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
        $taxonomy_slug = $terms[0]->slug;
    else
        $taxonomy_slug = 'no-type';

    return str_replace('%news-type%', $taxonomy_slug, $permalink);
}

/*
 * Replace Taxonomy slug with Post Type slug in url
 * Version: 1.1
 */
//function taxonomy_slug_rewrite($wp_rewrite) {
//    $rules = array();
//    // get all custom taxonomies
//    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
//    // get all custom post types
//    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');
//     
//    foreach ($post_types as $post_type) {
//        foreach ($taxonomies as $taxonomy) {
//         
//            // go through all post types which this taxonomy is assigned to
//            foreach ($taxonomy->object_type as $object_type) {
//                 
//                // check if taxonomy is registered for this custom type
//                if ($object_type == $post_type->rewrite['slug']) {
//             
//                    // get category objects
//                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));
//             
//                    // make rules
//                    foreach ($terms as $term) {
//                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
//                    }
//                }
//            }
//        }
//    }
//    // merge with global rules
//    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
//}
//add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');