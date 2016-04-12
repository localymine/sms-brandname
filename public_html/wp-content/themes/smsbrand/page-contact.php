<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 */

require_once 'includes/lib/ReCaptcha/src/autoload.php';

global $omw_theme_settings;

$secret = $omw_theme_settings->ct_recaptcha_private_key;

if (isset($_POST['g-recaptcha-response'])) {

    $recaptcha = new \ReCaptcha\ReCaptcha($secret);

    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if ($resp->isSuccess()) {

        $data = array(
            'name' => isset($_POST['re_name']) ? $_POST['re_name'] : '',
            'email' => isset($_POST['re_email']) ? $_POST['re_email'] : '',
            'website' => isset($_POST['re_website']) ? $_POST['re_website'] : '',
            'content' => isset($_POST['re_content']) ? $_POST['re_content'] : '',
            'entry_time' => gmdate("Y/m/d H:i:s", time() + 9 * 3600),
            'entry_host' => gethostbyaddr(getenv("REMOTE_ADDR")),
            'entry_ua' => getenv("HTTP_USER_AGENT"),
        );
        /* -------------------------------------------------------------- send mail */
        require_once 'includes/lib/Twig/Autoloader.php';
        Twig_Autoloader::register();

        $loader = new Twig_Loader_String;

        $twig = new Twig_Environment($loader);

        $from = $omw_theme_settings->ct_from_email;
        $fromname = $omw_theme_settings->ct_from_name;

        // Mail to Client
        $body_client = $omw_theme_settings->ct_mail_content_client;
        if (isset($body_client) && $body_client != '') {
            $body_client = $twig->render($body_client, $data);
            //
            $subject_client = $twig->render($omw_theme_settings->ct_mail_subject_client, $data);
            //
            $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
            //	
            wp_mail($data['email'], stripslashes($subject_client), stripslashes($body_client), $headers);
        }

        // Mail to Admin
        $body_admin = $omw_theme_settings->ct_mail_content_admin;
        if (isset($body_admin) && $body_admin != '') {
            $body_admin = $twig->render($body_admin, $data);
            //
            $subject_admin = $omw_theme_settings->ct_mail_subject_admin;
            //
            $list_email = $omw_theme_settings->ct_mail_list_admin;
            if (isset($list_email) && $list_email != '') {
                $list_email = preg_split('/\r\n|\n|\r/', $list_email);
                //
                $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
                //
                wp_mail($list_email, stripslashes($subject_admin), stripslashes($body_admin), $headers);
            }
        }

        wp_redirect(home_url() . '/contact/thankyou');
    } else {
        wp_redirect(home_url());
    }
}

get_header();

global $omw_theme_settings;
?>
<section>
    <div class="row nopadding nomargin" style="min-height: 50px;">
        <div class="col-xs-12 col-md-12 nopadding">
            <img class="img-responsive nopadding" src="<?php echo get_banner_contact() ?>" />
        </div>
    </div>
</section>
<!-- body -->
<div id="contact-info">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-8 text-left nopadding">
                <div class="contact-form">
                    <span>Contact Form</span>
                </div>
                <div>
                    <form class="form-horizontal form-sms" action="<?php echo home_url('contact') ?>" method="post" name="contact_form" role="form">
                        <div class="form-group">
                            <div class="col-sm-7 nopaddingl">
                                <input type="text" name="re_name" class="" id="name" placeholder="">
                            </div>
                            <label class="control-label col-sm-2" for="name">Name <span class="star">*</span></label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 nopaddingl">
                                <input type="email" name="re_email" class="" id="email" placeholder="example@domain">
                            </div>
                            <label class="control-label col-sm-2" for="email">Email <span class="star">*</span></label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 nopaddingl">
                                <input type="website" name="re_website" class="" id="website" placeholder="">
                            </div>
                            <label class="control-label col-sm-2" for="website">Phone <span class="star">*</span></label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="re_content" rows="5" cols="30" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-xs-12 col-md-6">
                                <div class="g-recaptcha" data-sitekey="<?php echo $omw_theme_settings->ct_recaptcha_public_key ?>"></div>
                                <div id="catpcha"></div>
                            </div>
                            <div class="col-xs-12 col-md-6 text-right">
                                <button type="submit" class="submit btn btn-default">GỬI NỘI DUNG</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-3 text-left nopadding-right">
                <div class="contact-form">
                    <span>COMPANY</span>
                </div>
                <p><span><?php echo $omw_theme_settings->ct_company_name ?></span></p>
                <div class="row-gap-medium"></div>
                <div class="contact-form">
                    <span>Contact</span>
                </div>
                <div class="adv-info">
                    <p>
                        <i class="fa">
                            <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-3.png" />
                        </i>
                        <span><?php echo $omw_theme_settings->ct_company_address ?></span>
                    </p>
                    <p>
                        <i class="fa">
                            <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-4.png" />
                        </i>
                        <span><?php echo $omw_theme_settings->ct_company_email ?></span>
                    </p>
                    <p>
                        <i class="fa">
                            <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-5.png" />
                        </i>
                        <span><?php echo $omw_theme_settings->ct_company_telephone ?></span>
                    </p>
                    <?php if (trim($omw_theme_settings->ct_company_fax) != ''): ?>
                        <p>
                            <i class="fa">
                                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-6.png" />
                            </i>
                            <span><?php echo $omw_theme_settings->ct_company_fax ?></span>
                        </p>
                    <?php endif; ?>
                    <p>
                        <i class="fa fa-globe" style="color: #F88010;"></i>
                        <span>
                            <a style="color: #666" href="http://MaxsSMS.com" target="_blank">Max SMS</a><br/>
                        </span>
                        <i class="fa fa-globe" style="color: #F88010;"></i>
                        <span>
                            <a style="color: #666" href="http://Maxsolutions.vn" target="_blank">Max Solutions</a>
                        </span>
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 nopadding">
                <?php echo $omw_theme_settings->ct_company_google_map ?>
            </div>
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- body end -->

<?php get_footer(); ?>