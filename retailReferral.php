<?php
/**
 * Template Name: Referral Retail page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();

?>

    <style>
        .rmain2{
            padding: 5%;
        }
    </style>
    <div id="referral-content">
        <div id="page1" class="hero-area-wrapper">
            <div class="container">
                <div class="hero-content" style="text-align: center;">
                    <h2 data-translate="Refer_title"></h2>
                    <p >
						<span data-translate="Refer_title_desc1"></span>
                        <br> 
						<span data-translate="Refer_title_desc2"></span>
					</p>
                </div>
            </div>
        </div>


        <!-- rmain2 start -->
        <div class="rmain2">
            <div class="container">
                <div class="rmain2-wrapper">
                    <div class="row">
                        <div class="rmain2-right">

                            <div class="rmain-ro-work">
                                <h3 data-translate="Refer_header1"></h3>
                            </div>
                            <div class="rmain2-link">
                                <h3 data-translate="Refer_header1_tag1"></h3>
                                <div class="rmain2-link-block">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/referral_link_1.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <p  data-translate="Refer_header1_tag1_desc1"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-two text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/referral_link_2.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <p data-translate="Refer_header1_tag1_desc2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/referral_link_3.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <p data-translate="Refer_header1_tag1_desc3"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rmain2-link">
                                <h3 data-translate="Refer_header1_tag2"></h3>
                                <p data-translate="Refer_header1_tag2_desc"></p>
                            </div>
                            <div class="rmain2-link">
                                <h3 data-translate="Refer_header1_tag3"></h3>
                                <p>
									<span data-translate="Refer_header1_tag3_desc1"></span>
                                    <br>
									<span data-translate="Refer_header1_tag3_desc2"></span>
                                    <br>
									<span data-translate="Refer_header1_tag3_desc3_1"></span>
                                    <a href="https://virgocx.zendesk.com/hc/en-us/articles/360056653811" data-translate="Refer_header1_tag3_desc3_2">
										Terms and Conditions
									</a> 
									<span data-translate="Refer_header1_tag3_desc3_3"></span>
									</p>
                            </div>

                            <div class="rmain-ro-block" style="margin-top: 70px">
                                <h3 data-translate="Refer_header2"></h3>

                            </div>
                            <a href="https://virgocx.ca/page#/login"
                               class="col-lg-2 blue-gradient-btn button-center" 
							   data-translate="Refer_header2_btn">
							   
							   </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rmain2 end -->
        <div class="bottom"></div>
    </div>

<?php
get_footer();
