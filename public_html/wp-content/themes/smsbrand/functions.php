<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/includes/cpt_acf_definitions.php');
include_once (dirname(__FILE__) . '/includes/my_settings.php');
include_once (dirname(__FILE__) . '/includes/my_functions.php');
include_once (dirname(__FILE__) . '/includes/options_page.php');
include_once (dirname(__FILE__) . '/includes/my_customize.php');
include_once (dirname(__FILE__) . '/includes/my_facebook_share.php');

/* -------------------------------------------------------------------------- */
add_action('init', 'myStartSession', 1);

// init session id
function myStartSession() {
    if (!session_id()) {
        session_start();
    }
}

/* ---------------------------------------------------------------------------- */
function omw_master_wp_head(){
    generate_css();
    
    insert_fb_in_head();
}