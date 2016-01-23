<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 */
get_header();
?>
<section>
    <div class="row nopadding nomargin" style="min-height: 50px;">
        <div class="col-xs-12 col-md-12 nopadding">
            <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/slide-3.png" />
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
                	<p class="detail-company"><span>Text text text company</span></p>
                    <div class="adv-info">
                        <p>
		                    <i class="fa">
		                    	<img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-3.png" />
		                	</i>
		                	<span>132 Trần Định Xu TP Sài Gòn</span>
                        </p>
	                    <p>
		                    <i class="fa">
		                    	<img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-4.png" />
		                	</i>
		                	<span>132 Trần Định Xu TP Sài Gòn</span>
                        </p>
                        <p>
		                    <i class="fa">
		                    	<img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-5.png" />
		                	</i>
		                	<span>132 Trần Định Xu TP Sài Gòn</span>
                        </p>
                        <p>
		                    <i class="fa">
		                    	<img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-6.png" />
		                	</i>
		                	<span>132 Trần Định Xu TP Sài Gòn</span>
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
						<form class="form-sms" action="" method="post" name="contact_form">
							<ul>
							    <li>
							        <label for="name">Name:</label>
							        <input type="text" name="name" placeholder="John Doe"/>
							    </li>
							    <li>
								    <label for="email">Email:</label>
								    <input type="text" name="email" placeholder="John Doe"/>
								</li>
								<li>
								    <label for="website">Website:</label>
								    <input type="text" name="website" placeholder="John Doe"/>
								</li>
								<li>
									<label for="website">Nội Dung:</label>
									<textarea name="message" rows="10" cols="30" placeholder="John Doe"></textarea>
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
            <div class="col-xs-12 col-md-3 pr-bar">
                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-11.png" />
                <img class="img-responsive nopadding" src="<?php echo get_template_directory_uri() ?>/images/contact-12.png" />
            </div>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!-- body end -->

<?php get_footer(); ?>