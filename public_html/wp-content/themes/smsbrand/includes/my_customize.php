<?php

/*
 * Author: KhangLe
 * 
 * 
 */

function omw_theme_customize_register($wp_customize) {

    /* GENERAL SECTION */
    $wp_customize->add_section('general', array(
        'title' => __('GENERAL'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('banner_news', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_news_c', array(
        'label' => __('Banner News'),
        'section' => 'general',
        'settings' => 'banner_news',
        'priority' => 1,
    )));

    $wp_customize->add_setting('banner_guide', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_guide_c', array(
        'label' => __('Banner Guide'),
        'section' => 'general',
        'settings' => 'banner_guide',
        'priority' => 1,
    )));

    $wp_customize->add_setting('banner_contact', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_contact_c', array(
        'label' => __('Banner Contact'),
        'section' => 'general',
        'settings' => 'banner_contact',
        'priority' => 1,
    )));
    
    $wp_customize->add_setting('banner_message_detail', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_message_detail_c', array(
        'label' => __('Banner Message Detail'),
        'section' => 'general',
        'settings' => 'banner_message_detail',
        'priority' => 1,
    )));
    
    $wp_customize->add_setting('banner_last_project_detail', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_last_project_detail_c', array(
        'label' => __('Banner Last Project Detail'),
        'section' => 'general',
        'settings' => 'banner_last_project_detail',
        'priority' => 1,
    )));
}

add_action('customize_register', 'omw_theme_customize_register');

//css generate
function generate_css() {
    ?>
    <style>

    </style>
    <?php

}

add_action('wp_head', 'generate_css');

/* GENERAL */

function get_banner_news() {
    return esc_url(get_theme_mod('banner_news'));
}

function get_banner_guide() {
    return esc_url(get_theme_mod('banner_guide'));
}

function get_banner_contact() {
    return esc_url(get_theme_mod('banner_contact'));
}

function get_banner_message_detail() {
    return esc_url(get_theme_mod('banner_message_detail'));
}

function get_banner_last_project_detail() {
    return esc_url(get_theme_mod('banner_last_project_detail'));
}
