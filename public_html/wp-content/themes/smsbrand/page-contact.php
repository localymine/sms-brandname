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
        <div class="row nopadding nomargin">
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-12 text-left">
                    <div class="contact-header">
                        <span>
                            <i class="fa">
                                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-2.png" />
                            </i>
                            <span>COMPANY</span>
                        </span>
                    </div>
                    <p class="detail-company"><span><?php echo $omw_theme_settings->ct_company_name ?></span></p>
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
                        <p>
                            <i class="fa">
                                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-6.png" />
                            </i>
                            <span><?php echo $omw_theme_settings->ct_company_fax ?></span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 text-left">
                    <div class="contact-form">
                        <span>
                            <i class="fa">
                                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-7.png" />
                            </i>
                            <span>CONTACT</span>
                        </span>
                    </div>
                    <div>
                        <form class="form-sms" action="<?php echo home_url('contact') ?>" method="post" name="contact_form">
                            <ul>
                                <li>
                                    <label for="name">Name:</label>
                                    <input type="text" name="re_name" placeholder=""/>
                                </li>
                                <li>
                                    <label for="email">Email:</label>
                                    <input type="text" name="re_email" placeholder="example@domain"/>
                                </li>
                                <li>
                                    <label for="website">Website:</label>
                                    <input type="text" name="re_website" placeholder="www.example.com"/>
                                </li>
                                <li>
                                    <label for="website">Nội Dung:</label>
                                    <textarea name="re_content" rows="10" cols="30" placeholder=""></textarea>
                                </li>
                                <li>
                                    <div class="center-block" style="width: 50%;    ">
                                        <div class="g-recaptcha" data-sitekey="<?php echo $omw_theme_settings->ct_recaptcha_public_key ?>"></div>
                                        <div id="catpcha"></div>
                                    </div>
                                </li>
                                <li>
                                    <button class="submit" type="submit">GỬI NỘI DUNG</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <?php get_sidebar('banner') ?>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- body end -->

<?php get_footer(); ?>