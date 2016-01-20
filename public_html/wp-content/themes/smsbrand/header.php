<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo wp_title('｜', true, 'right') ?></title>
        <meta charset="UTF-8">
        <meta content="IE=9" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description">
        <meta content="" name="author">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/fav/favicon.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/jquery.sidr.light.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php
        global $omw_active_menu;
        //
        global $omw_theme_settings;
        $logo = (object) json_decode($omw_theme_settings->ct_company_logo);
        ?>

        <?php if (isset($omw_theme_settings->ct_facebook_script)): ?>
            <meta property="og:url" content="<?php echo home_url() ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="<?php bloginfo('name') ?>" />
            <meta property="og:description" content="<?php bloginfo('description') ?>" />
            <meta property="og:image" content="<?php echo $logo->url ?>" />
        <?php endif; ?>

        <?php if ($omw_theme_settings->ct_use_css): ?>
            <style type="text/css">
    <?php echo $omw_theme_settings->ct_custom_css; ?>
            </style>
        <?php endif; ?>
    </head>
    <body>
        <?php if (isset($omw_theme_settings->ct_facebook_script)) echo $omw_theme_settings->ct_facebook_script; ?>
        <?php if (isset($omw_theme_settings->ct_google_plus_script)) echo $omw_theme_settings->ct_google_plus_script; ?>
        <?php if (isset($omw_theme_settings->ct_twitter_script)) echo $omw_theme_settings->ct_twitter_script; ?>
        <div class="navbar-wrapper">
            <!-- hotline -->
            <header class="hot-top">
                <div class="container">
                    <ul class="top-menu pull-right nopadding">
                        <li>
                            <i class="fa fa-phone fa-2x"></i><span class="hotline"><?php echo $omw_theme_settings->ct_company_telephone ?></span>
                        </li>
                    </ul>
                </div>
            </header>
            <!-- hotline end-->
            <!-- navigator -->
            <header id="header" class="header">
                <nav id="nav" class="navbar navbar-defaultx navbar-oil">
                    <div class="container menu-bar">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div id="logo" class="navbar-header">
                                    <a id="menu-toggle" href="#sidr">
                                        <button class="navbar-toggle collapsed">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </a>
                                    <a class="navbar-brand nopadding">
                                        <img class="img-logo img-responsive" src="<?php echo $logo->url ?>" alt="<?php echo $omw_theme_settings->ct_company_name ?>" />
                                    </a>
                                </div>
                                <div class="navbar-collapse collapse nopadding">
                                    <ul class="top-menu">
                                        <li><a class="nav-title active" href="<?php echo home_url() ?>"><span>HOME</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('sms-brandname') ?>"><span>SMS BRANDNAME</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('otp-sms-brandname') ?>"><span>OTP SMS (BRANDNAME)</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('sms-marketting') ?>"><span>SMS MARKETING</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('sms-8x77-gateway') ?>"><span>SMS ĐẦU SỐ 8X77 (GATEWAY)</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('news') ?>"><span>TIN TỨC</span></a></li>
                                        <li><a class="nav-title" href="<?php echo home_url('contact') ?>"><span>LIÊN HỆ</span></a></li>
                                        <li class="menu-search">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/b-search.png" alt="Search" />
                                            <form class="nav-form">

                                            </form>
                                        </li>
                                        <li class="">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/flag-vn.png" alt="vietnam" />
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt="english" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!--side-bar-->
                <ul id="sidr" class="m-sidebar">
                    <li><a class="<?php echo $omw_active_menu['home'] ?>" href="<?php bloginfo('url') ?>"><span>HOME</span></a></li>
                    <li><a class="<?php echo $omw_active_menu['about-us'] ?>" href="<?php bloginfo('url') ?>/about-us"><span>SMS BRANDNAME</span></a></li>
                    <li>
                        <a class="<?php echo $omw_active_menu['product'] ?>" href="<?php bloginfo('url') ?>/product"><span>SMS MARKETING</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['news'] ?>" href="javascript:void(0);"><span>SMS ĐẦU SỐ 8X77</span></a>
                    </li>
                    <li><a class="<?php echo $omw_active_menu['health'] ?>" href="<?php bloginfo('url') ?>/health"><span>TIN TỨC</span></a></li>
                    <li><a class="<?php echo $omw_active_menu['contact'] ?>" href="<?php bloginfo('url') ?>/contact"><span>LIÊN HỆ</span></a></li>
                </ul>
                <!--side-bar-->
            </header>
            <!-- navigator -->
        </div>