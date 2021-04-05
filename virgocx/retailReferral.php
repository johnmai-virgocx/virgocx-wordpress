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
                    <h2>VirgoCX Referral Program</h2>
                    <p>Introduce your friend to VirgoCX and you both earn $30 CAD!
                        <br> More Referral, More Money!</p>
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
                                <h3>How it Works</h3>
                            </div>
                            <div class="rmain2-link">
                                <h3>1. To Find Your Referral Link</h3>
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
                                                        <p>Log into your VirgoCX account</p>
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
                                                        <p>Click on Invite on the left navigation bar</p>
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
                                                        <p>Find your unique referral link</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rmain2-link">
                                <h3>2. Share Your Referral Link</h3>
                                <p>Simply copy your referral link to your friends. </p>
                            </div>
                            <div class="rmain2-link">
                                <h3>3. Earn Money</h3>
                                <p>Step1: Refer a friend and you will each receive a $10 CAD. No deposit required！
                                    <br>

                                    Step2: When your referee signs up and makes their first fiat deposit of $100 CAD or
                                    more, you both get an extra $20 CAD.
                                    <br>
                                    Please see <a href="https://virgocx.zendesk.com/hc/en-us/articles/360056653811">Terms and Conditions</a> for
                                    more details. </p>
                            </div>

                            <div class="rmain-ro-block" style="margin-top: 70px">
                                <h3>Ready to Earn Money? </h3>

                            </div>
                            <a href="https://virgocx.ca/page#/login"
                               class="col-lg-2 blue-gradient-btn button-center">Get Your
                                Referral Link</a>
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
