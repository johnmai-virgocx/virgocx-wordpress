<?php
/**
 * Template Name: OTC chat broker page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header('otc');
?>
    <section class="banner-area">
        <div class="OTC-header">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-12 pt-5">
                        <div class="row">
                            <h1>
                                <span data-translate="OTC_header1_1">
                                    Access Personalized Services Through
                                </span>
                                <span class="gold" data-translate="OTC_header1_1">
                                    Chat Broker
                                </span>
                                <span>for Large Trades </span>
                            </h1>

                            <p class="tag-line gold" data-translate="Buy_header1_desc">
                                We perform large trades using best execution through our tailored service for
                                institutions and individuals.</p>
                            <a class="round-btn scroll-to-sign-up">
                                Get started
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img src="<?= get_template_directory_uri() ?>/img/Chat Broker/Desktop/Banner Picture.png"
                             alt="flags"
                             width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-area">
        <h2>Why Use OTC Direct? </h2>
        <div class="row custom-container">
            <div class="why-container col-lg-4 col-md-12">
                <div class="why-img">
                    <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/24_7 illustration.svg"
                         alt="flags"/>
                </div>
                <h4>24/7</h4>
                <p>OTC Direct allows you to trade around the clock without having to work with the OTC account
                    managers.</p>
                <p>
                    With optimized uptime on our platform, OTC Direct can provide your team with a <span class="blue">seamless trading
                    experience</span> for your larger orders.
                </p>
            </div>
            <div class="why-container col-lg-4 col-md-12">
                <div class="why-img">
                    <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/Best Execution.svg"
                         alt="flags"/>
                </div>
                <h4>Best Execution</h4>
                <p>We aggregate liquidity through a multitude of different providers in order to provide you with the
                    <span class="blue">best price</span> at that point in time.
                </p>
                <p>

                    By routing your large block order across our liquidity pools, you will save on your market orders
                    without having to manually route your orders out to different venues.
                </p>
            </div>
            <div class="why-container col-lg-4 col-md-12">
                <div class="why-img">
                    <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/Rapid Settlemment.svg"
                         alt="flags"/>
                </div>

                <h4>Rapid Settlement</h4>
                <p>
                    We offer conditional same-day settlement for our client trades.
                </p>
                <p>
                    By having close relationships with our partner banks, our settlement speeds for fiat to
                    cryptocurrency is<span class="blue">one of the most competitive</span> in Canada.
                </p>
            </div>
        </div>
    </section>
    <section class="how-area">
        <h2 data-translate="OTC_direct_how">How It Works?</h2>

        <div class="tabs">
            <nav class="tab-switch row">
                <a class="selected">1. Onboard</a>
                <a>2. Set Up</a>
                <a>3. Deposit</a>
                <a>4. Trade</a>
                <a>5. Settle</a>
            </nav>

            <div class="how-container">
                <div class="row custom-container">
                    <div class="col-4"></div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text title-right">
                            <h3>Onboard with VirgoCX OTC
                                <img class="number-right"
                                     src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Desktop/No.1.png"
                                     alt="flags" width="100%"/>
                                <img class="number-right-mobile"
                                     src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Mobile/No.1.svg"
                                     alt="flags" width="100%"/>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-container">
                    <div class="col-lg-4 col-sm-12 img-container">
                        <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/Onboard.svg" alt="flags"/>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <p>
                                Contact our OTC account managers to get started as an individual or as a corporate
                                entity.
                            <ul>
                                <li>All onboarding information will be securely stored.</li>
                                <li>Account registration will typically take less than one day.</li>
                            </ul>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-container">
                <div class="trapezoid"></div>
                <div class="row custom-container mt100">
                    <img class="number-left"
                         src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Desktop/No.2.png"
                         alt="flags" width="100%"/>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <h3 data-translate="">
                                Join our Communication Channels
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-container">
                    <div class="col-lg-4 col-sm-12 right img-container">
                        <img src="<?= get_template_directory_uri() ?>/img/Chat Broker/Desktop/Join Our.svg"
                             alt="flags"/>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <p>
                                Upon onboarding, our OTC managers will provide you with your account information to log
                                onto OTC Direct.
                            <ul>
                                <li>You will be provided login credentials for your OTC Direct account.</li>
                                <li>Login credentials are secure.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-container">
                <div class="row custom-container">
                    <div class="col-4"></div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text title-right">
                            <h3>
                                Deposit Funds
                                <img class="number-right"
                                     src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Desktop/No.3.png"
                                     alt="flags" width="100%"/>
                                <img class="number-right-mobile"
                                     src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Mobile/No.3.svg"
                                     alt="flags" width="100%"/>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row custom-container">
                    <div class="col-lg-4 col-sm-12 img-container">
                        <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/Deposit Funds.svg"
                             alt="flags"/>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <p>Once you have onboarded, you will be able to deposit fiat and digital assets at any time.
                            <ul>
                                <li>Wires will be processed and handled by our partner bank the moment it has been
                                    sent.
                                </li>
                                <li>Digital assets require several confirmations on the blockchain before we can credit
                                    your account.
                                </li>
                            </ul>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-container">
                <div class="trapezoid"></div>

                <div class="row custom-container mt100">
                    <img class="number-left"
                         src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Desktop/No.4.png"
                         alt="flags" width="100%"/>

                    <div class="col-lg-8 col-sm-12">

                        <div class="how-text">
                            <h3 data-translate="OTC_direct_how_t4">
                                Trade
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-container">
                    <div class="col-lg-4 col-sm-12 right img-container">
                        <img src="<?= get_template_directory_uri() ?>/img/Chat Broker/Desktop/Trade.png" alt="flags"/>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <p>Execute transactions for the best price using OTC Direct.
                            <ul>
                                <li>You will be able to trade directly on our platform 24/7 (excluding scheduled
                                    maintenance times)
                                </li>
                                <li>Access large liquidity limit orders and RFQ orders on our platform.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-container">
                <div class="row custom-container">
                    <div class="col-4"></div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text title-right">
                            <h3>
                                Settlement<img class="number-right"
                                               src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Desktop/No.5.png"
                                               alt="flags" width="100%"/>
                                <img class="number-right-mobile"
                                     src="<?= get_template_directory_uri() ?>/img/OTC_Direct_ Chat_Broker/Mobile/No.5.svg"
                                     alt="flags" width="100%"/>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-container">
                    <div class="col-lg-4 col-sm-12 img-container">
                        <img src="<?= get_template_directory_uri() ?>/img/OTC_Direct/Desktop/Settlement.svg"
                             alt="flags"/>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="how-text">
                            <p>Once you have updated the banking / wallet address information, you will be able to
                                withdraw funds.
                            <ul>
                                <li>We have long standing relationships with our partner banks to provide you with rapid
                                    settlement.
                                </li>
                                <li>Digital assets will be settled immediately upon confirmation of the trade details.
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" aria-label="Question Accordions">
        <div class="custom-container">
            <h2>Frequently Asked Questions </h2>
            <div class="panel-group" id="faq" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                        <h3 class="panel-title">
                            <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq"
                                 href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                What if I’m already onboarded?

                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found"/>
                            </div>
                        </h3>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                            <p>We can offer a fast track enrollment on OTC if you have already onboarded on the retail
                                platform.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                        <h3 class="panel-title">
                            <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq"
                                 href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What type of order types do you have on OTC Direct?

                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found"/>

                            </div>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body px-3 mb-4">
                            <p>We currently support Request for Quote (RFQ) and Limit Orders.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                        <h3 class="panel-title">
                            <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq"
                                 href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                How fast is the settlement?
                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found"/>
                            </div>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body px-3 mb-4">
                            <p>We typically settle fiat and digital currencies within one business day. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                        <h3 class="panel-title">
                            <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq"
                                 href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                What is the minimum amount for settlement on OTC Direct?

                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found"/>
                            </div>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body px-3 mb-4">
                            <p>The minimum amount to begin settlement is 30,000 CAD or equivalent.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
                        <h3 class="panel-title">
                            <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq"
                                 href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                What are the operating hours for OTC Direct?
                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found"/>
                            </div>
                        </h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                        <div class="panel-body px-3 mb-4">
                            <p>The platform is available to use 24/7/365, with the exception to short scheduled system
                                maintenances which we will notify you about in advance.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="background-img">
            <img src="<?= get_template_directory_uri() ?>/img/bg3.svg"
                 alt="images not found">
            <img class="mobile"
                 src="<?= get_template_directory_uri() ?>/img/bg3_mobile.svg"
                 alt="images not found">
        </div>
    </section>
    <section class="signup-area">
        <div class="background-img">
            <img src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 2.svg"
                 alt="images not found">
            <img
                    src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 1.svg"
                    alt="images not found">
        </div>
        <div class="container custom-container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="">
                        <h2 data-translate="Our_Product">Sign Up Today</h2>
                    </div>
                    <div class="how-content">
                        <div class="how-item">
                            <?= do_shortcode('[contact-form-7 id="70" title="OTC-signup"]') ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        section {
            padding: 50px 0 50px 0;
        }

        .banner-area {
            position: relative;
            z-index: 888888;
            padding-top: 8rem;
            padding-bottom: 8rem;
            background-color: #05004D;
            font-size: 1.4rem;
        }

        .banner-area h1 {
            color: white;
        }

        @media screen and (max-width: 900px) {
            .banner-area {
                padding-top: 4rem;
                height: 1000px;
            }

            .banner-area .OTC-header img {
                position: absolute;
                width: 100vw;
                left: -60px;
            }
        }

        .why-area {
            background-color: #F8F8F8;
        }

        .why-img {
            height: 150px;
            justify-content: center;
            display: flex;
            position: relative;
            padding-bottom: 20px;
        }

        .why-img img {
            height: 130px;
            width: auto;
            position: relative;
        }


        .why-container {
            padding: 70px 30px 0 30px;
        }

        .why-container h4 {
            color: #c7ba9a;
            font-weight: bold;
            padding-bottom: 0px;
        }

        .tab-switch {
            display: none;
        }

        .tab-switch a {
            color: #84839c;
            padding: 5px;
        }

        .tab-switch a:hover,
        .tab-switch a.selected {
            color: #05004D;
            border-bottom: 3px solid #c7ba9a;
            cursor: pointer;
            font-family: "Matter-Bold";
        }

        .custom-container h3 {
            padding-bottom: 0px;
        }

        .custom-container .img-container img {
            width: 60% ;
            top: -90px;
            max-width: 100vw;
            margin: 20px;
        }

        .trapezoid {
            top: 70px;
            z-index: -1;
            position: absolute;
            width: 100vw;
            height: 700px;
            border-top: 65px solid transparent;
            border-bottom: 30px solid transparent;
            border-right: 100vw solid #F8F8F8;
        }

        .how-container {
            position: relative;
            padding-top: 140px;
            min-height: 500px;
            width: 100vw;
        }

        @media screen and (min-width: 900px) {
            .how-container {
                min-height: 700px;
            }

            .why-container {
                padding: 30px 30px 0 30px;
            }

            .tab-switch {
                display: flex;
                width: 80%;
                margin: auto;
                justify-content: space-around;
                text-align: center;
                font-size: 24px;
                border-bottom: 1px solid #c7ba9a;
            }

            .custom-container .img-container img {
                width: 100%;
                max-width: 100vw;
                position: absolute;
            }

            .right {
                right: 0;
                position: absolute;
            }

            .trapezoid {
                height: 587px;
            }
        }

        .img-container {
            display: flex;
            justify-content: center;
        }


        .faq .background-img .mobile{
            display: block;
            width: 100%;
            padding-top: 20px;
        }
        .faq .background-img img{
            display: none;
            width: 100%;
            padding-top: 100px;
            /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
        }

        .why-area h2,
        .faq h2 {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #05004d;
            padding-bottom: 50px;
        }


        .how-area h2{
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #05004d;
            padding-bottom: 0px;
        }

        .faq {
            background-color: #F8F8F8;
            padding: 50px 0 0px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: bottom;
        }

        @media screen and (min-width: 900px) {
            .faq {
                padding: 200px 0 0px 0;
            }
            .how-area h2,
            .why-area h2,
            .faq h2 {
                padding-bottom: 100px;
            }

            .faq .background-img img{
                display: block;
                /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
            }

            .faq .background-img .mobile{
                display: none;
            }

            .how-area h2,
            .why-area h2,
            .faq h2 {
                text-align: center;
                font-size: 36px;
                font-weight: bold;
                color: #05004d;
                padding-bottom: 100px;
            }
        }

        .how-area {
            padding-bottom: 0;
        }



        .signup-area h2 {
            text-align: center;
            font-size: 36px;
            color: white;
        }

        .faq .panel-default > .panel-heading {
            border-bottom: 1px solid black;
            padding: 0;
        }

        .faq .panel-default .panel-title div {
            display: block;
            font-size: 18px;
            font-weight: bold;
            color: #05004d;
        }

        .faq .panel-default .panel-title img {
            color: #05004d;
            float: right;
            width: 20px;
        }

        .faq .panel-default .panel-body {
            font-size: 16px;
        }


        /*tabs*/
        .tabs {
            display: block;
            display: -webkit-flex;
            display: -moz-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            -moz-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0;
            overflow: hidden;
        }

        .tabs [class^="tab"] label,
        .tabs [class*=" tab"] label {
            color: #05004D;
            cursor: pointer;
            display: block;
            font-size: 1.5em;
            font-weight: 300;
            line-height: 1em;
            text-align: center;
        }

        .tabs [class^="tab"] [type="radio"],
        .tabs [class*=" tab"] [type="radio"] {
            border-bottom: 1px solid rgba(239, 237, 239, 0.5);
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: block;
            width: 100%;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
        .tabs [class*=" tab"] [type="radio"]:hover,
        .tabs [class*=" tab"] [type="radio"]:focus {
            border-bottom: 1px solid #c7ba9a;
        }

        .tabs [class^="tab"] [type="radio"]:checked,
        .tabs [class*=" tab"] [type="radio"]:checked {
            border-bottom: 3px solid #c7ba9a;
        }

        .tabs [class^="tab"] [type="radio"]:checked + div,
        .tabs [class*=" tab"] [type="radio"]:checked + div {
            opacity: 1;
        }

        .tabs [class^="tab"] [type="radio"] + div,
        .tabs [class*=" tab"] [type="radio"] + div {
            display: block;
            opacity: 0;
            padding: 2rem 0;
            width: 90%;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .tabs .tab-2 {
            width: 50%;
        }

        .tabs .tab-2 [type="radio"] + div {
            width: 200%;
            margin-left: 200%;
        }

        .tabs .tab-2 [type="radio"]:checked + div {
            margin-left: 0;
        }

        .tabs .tab-2:last-child [type="radio"] + div {
            margin-left: 100%;
        }

        .tabs .tab-2:last-child [type="radio"]:checked + div {
            margin-left: -100%;
        }

        .how-text {
            position: relative;
            color: #05004d;
            padding: 3% 15px;
            text-align: left;
            vertical-align: middle;
            margin: 50px 100px 0 100px;
        }


        .how-text h3 {
            margin-left: 100px;
        }

        @media screen and (min-width: 900px) {
            .how-text h3 {
                margin-left: 0px;
            }

            .title-left {
                max-width: 1200px;
                margin: 0px auto;
                padding: 100px 15px 0 15px
            }
        }

        .custom-container {
            position: relative;
        }

        .number-left {
            width: 200px;
            height: auto;
            position: absolute;
            left: -50px;
            top: -30px;
        }

        .number-right {
            width: 200px;
            height: auto;
            position: absolute;
            left: 400px;
            top: -70px;
        }

        .number-right-mobile {
            display: none;
        }

        @media screen and (max-width: 900px) {
            .how-text {
                padding: 0;
                margin: 0;
            }

            .number-left {
                width: 150px;
                left: 0px;
                top: -70px;
            }

            .number-right {
                display: none;
            }

            .number-right-mobile {
                display: block;
                width: 150px;
                height: auto;
                position: absolute;
                left: -15px;
                top: -70px;

            }

        }

        .press-area {
            padding: 40px 0px 60px;
            color: white;
            background: #080449;
        }

        .signup-area h2 {
            text-align: center;
        }

        .signup-area .round-btn {
            margin: auto;
        }

        .OTC-header {
            width: 70%;
            margin: auto;
        }

        .how-area ul {
            margin-left: 1em;
            /*list-style-position: outside;*/
            list-style: none;
        }

        .how-area ul li::before {
            content: "\2022";
            color: #080449;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .flipped {
            transform: rotate(180deg);
        }

        .mt100{
            margin-top: 100px!important;
        }
    </style>

    <script type="text/javascript">
        (function ($) {

            $('.tabs nav a').on('click', function () {
                scroll_to_container($(this).index());
            });

            function scroll_to_container(index) {
                $('html, body').animate({
                    scrollTop: $('.tabs .how-conta' +
                        'iner:nth-of-type(' + (index + 1) + ')').offset().top
                }, 800);
            }

            // faq triangle toggle
            $('.panel-title').click(function () {
                $(this).children().children().toggleClass('flipped')
            });
        })(jQuery);
    </script>
<?php
get_footer('otc');