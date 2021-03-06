<?php
global $omw_theme_settings;
$logo = (object) json_decode($omw_theme_settings->ct_company_logo_footer);
?>
<!-- footer wrapper -->
<div id="footer-wrapper">
    <div class="footer-wrapper-inner">
        <div id="copyright">
            <div class="row-gap-medium"></div>
            <div class="container">
                <div class="col-xs-12 col-md-4 copyright">
                    <span>Contact Us</span><br/>
                    <span><i class="fa fa-map-marker"></i> <?php echo $omw_theme_settings->ct_company_address ?></span><br/>
                    <span><i class="fa fa-phone"></i> <?php echo $omw_theme_settings->ct_company_telephone ?></span><br/>
                    <span><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $omw_theme_settings->ct_company_email ?>">
                            <?php echo $omw_theme_settings->ct_company_email ?></a></span><br /><br />
                    <?php get_template_part('part-social-share-footer') ?>
                </div>
                <div class="col-xs-12 col-md-4 signs-up text-center">
                    <h3 class="orange">
                        Tặng voucher 100,000 VNĐ
                    </h3>
                    <h4 class="white">
                        cho khách hàng mới
                    </h4>
                    <form class="text-center">
                        <input type="text" class="controls" placeholder="Email"><button class="btn btn-default"><i class="fa fa-check orange"></i></button>
                    </form>
                </div>
                <div class="col-xs-12 col-md-4 copyright text-right">
                    <span class="product_of">A product of</span><br />
                    <a class="footer-logo" href="<?php echo home_url() ?>"><img class="img-responsive pull-right center-block" src="<?php echo $logo->url ?>"/></a>
                </div>
            </div>
            <div class="row-gap-medium"></div>
        </div>
    </div>
</div>
<!-- footer wrapper end -->
<div id="back-top">
    <a href="javascript:void(0)"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.2.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jssor.slider.mini.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
<script>
    //
    $.each(jssor_last_project_ids, function (key, value) {
        if ($('#' + value).length > 0) {
            jssor_last_project(value);
        }
    });
</script>

<?php if ($omw_theme_settings->ct_use_script): ?>
    <script>
    <?php echo $omw_theme_settings->ct_custom_script; ?>
    </script>
<?php endif; ?>

<?php if (isset($omw_theme_settings->ct_google_analytics)) echo $omw_theme_settings->ct_google_analytics; ?>
<?php if (isset($omw_theme_settings->ct_google_tag_manager)) echo $omw_theme_settings->ct_google_tag_manager; ?>

<?php wp_footer(); ?>
</body>
</html>