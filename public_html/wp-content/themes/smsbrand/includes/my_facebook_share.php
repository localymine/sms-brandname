<?php
/* -------------------------------------------------------------------------- */
//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype($output) {
    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');
//Lets add Open Graph Meta Info
function insert_fb_in_head() {
    global $post;
    if (!is_single()) {
        echo '<meta property="fb:app_id" content="964610463630306">';
        echo '<meta property="og:title" content="SMS Brandname"/>';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:url" content="' . home_url() . '"/>';
        echo '<meta property="og:site_name" content="SMS Brandname"/>';
        echo '<meta property="og:description" content="Cam kết giá dịch vụ, Tính năng hữu ích, Khác biệt và tươi mới, Tốc độ và niềm tin, Hổ trợ tuyệt vời">';
        echo "";
        return;
    }
    //
    $current_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    echo '<meta property="fb:app_id" content="964610463630306">';
    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:type" content="website">';
    echo '<meta property="og:url" content="' . $current_url . '"/>';
    echo '<meta property="og:site_name" content="SMS Brandname"/>';
    echo '<meta property="og:description" content="Cam kết giá dịch vụ, Tính năng hữu ích, Khác biệt và tươi mới, Tốc độ và niềm tin, Hổ trợ tuyệt vời">';
    echo "";
    
    if (is_single()) {
        $image = get_field('image');
        echo '<meta property="og:image" content="' . $image['sizes']['large'] . '"/>';
    } else {
        $default_image = "http://sms.viet-digital.com/wp-content/uploads/2016/03/logo-top.png";
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    echo "";
}

add_action('wp_head', 'omw_master_wp_head', 5);