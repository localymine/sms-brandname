<?php
global $omw_theme_settings;
$logo = (object) json_decode($omw_theme_settings->ct_company_logo_footer);
?>
<!-- footer wrapper -->
<div id="footer-wrapper">
    <div class="footer-wrapper-inner">
        <div id="copyright">
            <div class="row-gap-big"></div>
            <div class="container">
                <div class="col-xs-12 col-md-4 copyright">
                    <span><i class="fa fa-map-marker"></i><?php echo $omw_theme_settings->ct_company_address ?></span><br/>
                    <span><i class="fa fa-phone"></i><?php echo $omw_theme_settings->ct_company_telephone ?></span><br/>
                    <span><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $omw_theme_settings->ct_company_email ?>">
                    <?php echo $omw_theme_settings->ct_company_email ?></a></span><br /><br />
                    <span>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/51.png"></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/52.png"></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/53.png"></a>
                    </span>
                </div>
                <div class="col-xs-12 col-md-4 signs-up">
                    <span>
                        Sign Up for Our News Letter
                    </span>
                    <form>
                        <input type="text" class="controls"><button class="btn btn-default">Subscribe</button>
                    </form>
                </div>
                <div class="col-xs-12 col-md-4 copyright text-right">
                    <span>A product of</span><br />
                    <a class="footer-logo" href="#"><img class="img-responsive pull-right" src="<?php echo $logo->url ?>"/></a>
                </div>
            </div>
            <div class="row-gap-big"></div>
        </div>
    </div>
</div>
<!-- footer wrapper end -->
<div id="back-top">
    <a href="javascript:void(0)"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.2.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri() ?>/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.zoom.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.heightLine.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.parallax.js"></script>-->
<script src="<?php echo get_template_directory_uri() ?>/js/jssor.slider.mini.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>

<?php if ($omw_theme_settings->ct_use_script): ?>
    <script>
    <?php echo $omw_theme_settings->ct_custom_script; ?>
    </script>
<?php endif; ?>

<?php if (isset($omw_theme_settings->ct_google_analytics)) echo $omw_theme_settings->ct_google_analytics; ?>
<?php if (isset($omw_theme_settings->ct_google_tag_manager)) echo $omw_theme_settings->ct_google_tag_manager; ?>

</body>
</html>