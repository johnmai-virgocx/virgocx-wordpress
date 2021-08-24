<?php
/**
 * Template Name: Security2 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>
    <style>
        .fx-header {
            padding:0;
        }
        @media screen and (max-width: 660px) {
            .fx-header {
                padding:0 20px;
            }
            .rmain2-background{
                padding:40px 20px 50px 20px;
            }
        }
	</style>

		<div class="fx-header">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5 col-md-12">
						<div class="row mb-4">
                            <h2 style="padding:60px 8px 20px 0px;" data-translate="Security_head1"></h2>
                            <p data-translate="Security_head2"></p>
						</div>

					</div>

					<div class="col-lg-5 col-md-12 d-flex justify-content-center align-items-center">
						<img src="<?= get_template_directory_uri() ?>/img/security/background.png" alt="flags" width="100%" style="max-width:447px"/>
					</div>
				</div>
			</div>
		</div>

		<!-- rmain2 start -->
        <div class="rmain2-background">
            <div class="container">
                <div class="rmain2-wrapper">
                    <div class="row">
                        <div class="rmain2-right">

                            <div class="rmain2-link">
                                <div class="rmain2-link-block">
									<!-- First Row -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-three text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/Information Security@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title1"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt1_1"></p>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt1_2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-three text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/Assets Security@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title2"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-three text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/Insurance@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title3"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt3"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Second Row -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-four text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/Compliance@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title4"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt4_1"></p>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt4_2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-four text-center" style="padding-bottom:30px">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/Audits@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title5"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt5"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmain2-link-one rmain2-link-four text-center">
                                                <div href="#">
                                                    <div class="rmain2-link-one-img">
                                                        <img src="<?= get_template_directory_uri() ?>/img/security/System Security@2x.png"
                                                             alt="images not found">
                                                    </div>
                                                    <div class="rmain2-link-one-para">
                                                        <h2 style="margin:20px 0 25px 0; font-size:18px;" data-translate="Security_title6"></h2>
                                                        <p style="color:#666666; margin:0px 20px;" data-translate="Security_txt6"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rmain2 end -->
        <!-- <div class="bottom"></div> -->


<?php
get_footer();
