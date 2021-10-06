<?php
/**
 * Template Name: Affiliate page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();

?>

    <style type="text/css">
        .hero-area {
            padding: 6rem 0 2rem 0;
        }

        .banner-subtext {
            padding-top: 3rem;
        }

        .affiliate-icon {
            width: 90px;
            padding: 0;
        }

        .Affiliate-Sec2 {
            background-color: #E2FAF7;
        }

        .Affiliate-Sec2-ul li::before {
            content: "\2022";
            color: #7965E6;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
 
        .col-lg-10 ul{
            list-style:initial;
        }

        .Affiliate-Sec2-ul
        li {
            margin-bottom: 3vw;
            font-size: 22px;
            font-weight: bold;
        }

        .section {
            padding: 70px 0;
        }

        .Affiliate-Sec2-img {
            width: 100%;
        }

        .Affiliate-Sec2-img img{
            width: 90%;
            margin-bottom: 15%;
        }

        h2, h5 {
            font-weight: bold;
        }

        .rmain-wrapper .row {
            margin: 15px 0;
        }

        .rmain-wrapper {
            padding-bottom: 50px;
        }

        .section-title {
            margin: 40px 0 !important;
        }

        .col-lg-1 {
            left: -15px;
            position: relative;
        }

        .hero-area-wrapper{
            background-image: none;
            padding-left: 40px;
        }

        @media (max-width: 1200px){
            .hero-area-wrapper{
                padding-left:40px;
                padding-right:40px;
            }
        }
        @media screen and (max-width: 660px) {
            .hero-area-wrapper{
                padding-left:15px;
                padding-right:15px;
            }

            .section-title-text{
                padding-left:8px;
            }

            

            .fx-header{
                padding:48px 20px;
            }

            .col-lg-10{
            padding:0 10px;
            }
            
            .col-lg-10 ul{
            padding: 0 18px;    
            }
        }

    </style>

    <!--langSwitcher Example-->
    <!-- <span data-translate="hello"></span> -->

    <div class="fx-header">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5 col-md-12">
                    <div class="row mb-4">
                        <h2 style="padding:60px 8px 20px 0px;">Become a VirgoCX Affiliate</h2>
                        <p>Grow with us, maximize your earnings.</p>
                    </div>
				</div>

                <div class="col-lg-5 col-md-12 d-flex justify-content-center align-items-center">
                    <img src="<?= get_template_directory_uri() ?>/img/affiliate/affiliate-banner.png" alt="images not found" width="100%" style="max-width:447px"/>
                </div>
			</div>
		</div>
	</div>
    <!-- rmain area start -->
    <div class="section">
        <div class="container affiliate-container">
            <div class="rmain-wrapper">
                <div class="section-title row">
                    <h2 class="section-title-text">How It Works</h2>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img class="affiliate-icon"
                             src="<?= get_template_directory_uri() ?>/img/affiliate/affiliate-sec1-1.png"
                             alt="images not found">
                    </div>
                    <div class="col-lg-10">
                        <h5>Become a VirgoCX Affiliate </h5>
                        <p>Submit your application, your application will be approved once you meet the
                            qualifications. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img class="affiliate-icon"
                             src="<?= get_template_directory_uri() ?>/img/affiliate/affiliate-sec1-2.png"
                             alt="images not found">
                    </div>
                    <div class="col-lg-10">
                        <h5>Share Your Affiliate Link </h5>
                        <p>Share your affiliate link on social media and other channels. The more you share, the more you
                            earn! Only the sky's the limit!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img class="affiliate-icon"
                             src="<?= get_template_directory_uri() ?>/img/affiliate/affiliate-sec1-3.png"
                             alt="images not found">
                    </div>
                    <div class="col-lg-10">
                        <h5>Sit Back and Earn Passive Income</h5>
                        <p>We help you monetize your traffic! You can earn the following bonuses:</p>
                            <ul>

                             <li><b>$10 for every user that gets verified on our platform,</b>	</li>

                             <li><b>$20 when they make their first fiat deposit of $100+ CAD,</b> </li>
                            </ul>
                             </br><p>There’s no cap to what you earn. You’re just a few clicks away from this lifetime earning opportunity - it's quick, easy, and rewarding!

                              </br>You can track the performance of each affiliate link you share.</p>
                             <p>We are open to negotiations. Offers may vary depending on business scale. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Affiliate-Sec2 section">
        <div class="container affiliate-container">
            <div class="rmain-wrapper">
                <div class="row">
                    <div class="col-lg-6 section-title">
                        <h2>Preferred Qualifications </h2>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 Affiliate-Sec2-img">
                        <img src="<?= get_template_directory_uri() ?>/img/affiliate/affiliate-sec2.png"
                             alt="images not found">
                    </div>
                    <div class="col-lg-6 ">
                        <ul class="Affiliate-Sec2-ul" style="padding-left:18px">
                            <li>Social media influencers with at least 2,000+ followers on social platforms</li>
                            <li>Industry media platform/website</li>
                            <li>Crypto communities with a minimum of 500 members</li>
                            <li>Blockchain industry opinion leaders</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </div>
    <div class="section bottom">
        <div class="container affiliate-container">
            <div class="rmain-wrapper">
                <div class="row">
                    <h2>Become a VirgoCX Affiliate</h2>
                </div>
                <div class="row">
                    <a href="https://partners.virgocx.ca/signup"
                       class="col-lg-2 blue-gradient-btn button-center">Start Now</a>

                </div>
            </div>
        </div>
    </div>
    <!-- rmain area end -->


<?php
get_footer();