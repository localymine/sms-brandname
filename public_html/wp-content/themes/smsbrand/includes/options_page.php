<?php

//function register_my_menus() {
//    register_nav_menus(
//            array(
//                'header-menu', __('Header Menu'),
//                'sales-menu' => __('Sales Menu'),
//    ));
//}
//
//add_action('init', 'register_my_menus');
//
//
//unregister_nav_menu('header-menu');

/* ---------------------------------------------------------------------Title */
function omw_set_wp_title($title, $sep) {
    global $page, $paged;
    if (is_feed()) {
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo('name');
    //
    return $title;
}

add_filter('wp_title', 'omw_set_wp_title', 10, 2);

/* -------------------------------------------------------------- Active Menu */
global $omw_active_menu;

function omw_active_menu() {

    global $wp_query;
    global $omw_active_menu;

    $query = $wp_query->query;
    $pagename = isset($query['pagename']) ? $query['pagename'] : '';
    $post_type = isset($query['post_type']) ? $query['post_type'] : '';
    
    $req_uri = explode('/', $_SERVER['REQUEST_URI']);
    $term = isset($req_uri[1]) ? $req_uri[1] : '';

    $omw_active_menu = array(
        'home' => '',
        'sms-brandname' => '',
        'sms-otp' => '',
        'sms-marketing' => '',
        'sms-8x77' => '',
        'news' => '',
        'help' => '',
        'contact' => '');

    $active = ' active ';

    if (is_home() || is_front_page()) {
        $omw_active_menu['home'] = $active;
    } elseif ($pagename == 'sms-brandname') {
        $omw_active_menu['sms-brandname'] = $active;
    } elseif ($pagename == 'sms-otp') {
        $omw_active_menu['sms-otp'] = $active;
    } elseif ($pagename == 'sms-marketing') {
        $omw_active_menu['sms-marketing'] = $active;
    } elseif ($pagename == 'sms-8x77') {
        $omw_active_menu['sms-8x77'] = $active;
    } elseif (is_post_type_archive('news') || is_page('news') || is_tax('news-type')|| $term == 'topic') {
        $omw_active_menu['news'] = $active;
    } elseif ($pagename == 'help') {
        $omw_active_menu['help'] = $active;
    } elseif ($pagename == 'contact') {
        $omw_active_menu['contact'] = $active;
    }
}

add_action('template_redirect', 'omw_active_menu');

/* ------------------------------------------------------------ Theme Support */

function omw_load_script_footer() {
    global $omw_theme_settings;
    $script = '';

    if (isset($omw_theme_settings->ct_google_analytics)) {
        $script .= $omw_theme_settings->ct_google_analytics;
    }

    if (isset($omw_theme_settings->ct_google_tag_manager)) {
        $script .= $omw_theme_settings->ct_google_tag_manager;
    }

    if (isset($omw_theme_settings->ct_facebook_script)) {
        $script .= $omw_theme_settings->ct_facebook_script;
    }

    if (isset($omw_theme_settings->ct_google_plus_script)) {
        $script .= $omw_theme_settings->ct_google_plus_script;
    }

    if (isset($omw_theme_settings->ct_twitter_script)) {
        $script .= $omw_theme_settings->ct_twitter_script;
    }

    if ($omw_theme_settings->ct_use_script) {
        $script .= '<script>' . $omw_theme_settings->ct_custom_script . '</script>';
    }
    
    echo $script;
}

add_action('wp_footer', 'omw_load_script_footer');

/* ----------- Change Admin Default Logo & Url -------------------------------- */

function my_login_logo() {
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logo.png);
            width: 326px;
            height: 56px;
            background-size: auto;
        }
    </style>
    <?php
}

add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url() {
    return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title() {
    return 'Power by <a href="http://onmyway.vn">On My Way Solutions</a>';
}

add_filter('login_headertitle', 'my_login_logo_url_title');

/* ----------------------------------------------------------------------- Menu */

function remove_menus() {

    global $user_ID;

    $user = new WP_User($user_ID);
    $roles = $user->roles;
    $role = $roles[0];
    $arr_roles = array('administrator');

    if (in_array($role, $arr_roles)) {
//        remove_menu_page('cptui_main_menu');          // CPT
        remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                   //Posts
//        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit-comments.php');          //Comments
//        remove_menu_page('plugins.php');                //Plugins
//        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
//        remove_menu_page('options-general.php');        //Settings
    } else {
        remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                   //Posts
        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit.php?post_type=page');    //Pages
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('themes.php');                 //Appearance
        remove_menu_page('plugins.php');                //Plugins
        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
        remove_menu_page('options-general.php');        //Settings
    }
}

//add_action('admin_menu', 'remove_menus');