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
                <div class="container nopadding">
                    <ul class="top-menu pull-right nopadding">
                        <li>
                            <i class="fa fa-phone fa-2x"></i><span class="hotline">Hotline <?php echo $omw_theme_settings->ct_company_telephone ?></span>
                        </li>
                        <li>
                            <a class="login-menu" href="javascript:void(0)"><i class="fa fa-user"></i><span class=""> Sender</span></a>
                        </li>
                        <li>
                            <a class="login-menu" href="javascript:void(0)"><i class="fa fa-user"></i><span class=""> Client</span></a>
                        </li>
                    </ul>
                </div>
            </header>
            <!-- hotline end-->
            <!-- navigator -->
            <header id="header" class="header">
                <nav id="nav" class="navbar navbar-defaultx navbar-oil">
                    <div class="container menu-bar nopadding">
                        <div class="row nopadding nomargin">
                            <div class="col-md-12 text-center nopadding">
                                <div id="logo" class="navbar-header">
                                    <a id="menu-toggle" href="#sidr">
                                        <button class="navbar-toggle collapsed">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </a>
                                    <a class="navbar-brand nopadding img-a-logo">
                                        <img class="img-logo img-responsive" src="<?php echo $logo->url ?>" alt="<?php echo $omw_theme_settings->ct_company_name ?>" />
                                    </a>
                                </div>
                                <div class="navbar-collapse collapse nopadding menu-bar-1">
                                    <ul class="top-menu">
                                        <li><a class="nav-title <?php echo $omw_active_menu['home'] ?>" href="<?php echo home_url() ?>"><span>HOME</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['sms-brandname'] ?>" href="<?php echo home_url('sms-brandname') ?>"><span>SMS BRANDNAME</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['sms-otp'] ?>" href="<?php echo home_url('sms-otp') ?>"><span>OTP SMS (BRANDNAME)</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['sms-marketing'] ?>" href="<?php echo home_url('sms-marketing') ?>"><span>SMS MARKETING</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['sms-8x77'] ?>" href="<?php echo home_url('sms-8x77') ?>"><span>SMS ĐẦU SỐ 8X77 (GATEWAY)</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['news'] ?>" href="<?php echo home_url('news') ?>"><span>TIN TỨC</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['help'] ?>" href="<?php echo home_url('help') ?>"><span>HƯỚNG DẪN</span></a></li>
                                        <li><div class="line-header"></div></li>
                                        <li><a class="nav-title <?php echo $omw_active_menu['contact'] ?>" href="<?php echo home_url('contact') ?>"><span>LIÊN HỆ</span></a></li>
                                    </ul>
                                </div>
                                <div class="navbar-collapse collapse nopadding menu-bar-2">
                                    <ul class="form-header">
                                        <!--
                                        <li class="menu-search">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/b-search.png" alt="Search" />
                                            <form class="nav-form">
                                                <input type="text" name="name"/>
                                            </form>
                                        </li>
                                        <li class="">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/flag-vn.png" alt="vietnam" />
                                        </li>
                                        <li>
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" alt="english" />
                                        </li>
                                        -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!--side-bar-->
                <ul id="sidr" class="m-sidebar">
                    <li>
                        <a class="<?php echo $omw_active_menu['home'] ?>" href="<?php echo home_url() ?>"><span>HOME</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['sms-brandname'] ?>" href="<?php echo home_url('sms-brandname') ?>/sms-brandname"><span>SMS BRANDNAME</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['sms-otp'] ?>" href="<?php echo home_url('sms-otp') ?>"><span>OTP SMS (BRANDNAME)</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['sms-marketing'] ?>" href="<?php echo home_url('sms-marketing') ?>"><span>SMS MARKETING</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['sms-8x77'] ?>" href="<?php echo home_url('sms-8x77') ?>"><span>SMS ĐẦU SỐ 8X77</span></a>
                    </li>
                    <li>
                        <a class="<?php echo $omw_active_menu['news'] ?>" href="<?php echo home_url('news') ?>"><span>TIN TỨC</span></a>
                    </li>
                    <li><a class="<?php echo $omw_active_menu['help'] ?>" href="<?php echo home_url('help') ?>"><span>HƯỚNG DẪN</span></a></li>
                    <li><a class="<?php echo $omw_active_menu['contact'] ?>" href="<?php echo home_url('contact') ?>"><span>LIÊN HỆ</span></a></li>
                </ul>
                <!--side-bar-->
            </header>
            <!-- navigator -->
        </div>