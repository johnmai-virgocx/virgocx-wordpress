<?php
/**
 * Template Name: OTC landing page
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
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <h1>
                                <span data-translate="OTC_header1_1">
                                    24/7 Institutional Liquidity
                                    for Digital Assets
                                </span>
                            </h1>
                            <p class="tag-line" data-translate="Buy_header1_desc"></p>

                            <a class="round-btn">
                                Get started
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img src="<?= get_template_directory_uri() ?>/img/buy_coins/coins/BTC.png" alt="flags"
                             width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel-area">
        <div class="container custom-container">
            <div class="tabs">
                <div class="tab-2">
                    <label for="tab2-3">Cryptocurrency</label>
                    <input id="tab2-3" name="tabs-two" type="radio" checked="checked">
<!--                    <div class="owl-carousel owl-theme owl-loaded owl-drag">-->
<!--                        <div class="owl-stage-outer">-->
<!--                            <div class="owl-stage"-->
<!--                                 style="transform: translate3d(-1715px, 0px, 0px); transition: all 0.25s ease 0s; width: 5880px;">-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="col-lg-3 col-md-4 col-sm-12">-->
<!--                                        <div class="carousel-item">-->
<!--                                            <a href="/page#/advancedTrade/25" class="pg-top">-->
<!--                                                <div class="carousel-img">-->
<!--                                                    <img-->
<!--                                                            src="--><?//= get_template_directory_uri() ?><!--/img/cad.svg"-->
<!--                                                            alt="images not found"-->
<!--                                                            class="avatar avatar-ex-sm">-->
<!--                                                </div>-->
<!--                                                <div class="pg-text">-->
<!--                                                    <div class="row">-->
<!--                                                        <h5>Ethereum</h5>-->
<!--                                                    </div>-->
<!--                                                    <div class="row">-->
<!--                                                        <h5>ETH</h5>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>8</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>9</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>10</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>11</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>12</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>1</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>2</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>3</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>4</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>5</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>6</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>7</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>8</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>9</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>10</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>11</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>12</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>1</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>2</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>3</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>4</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>5</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>6</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div>
                        <h1>tab1</h1>

                    </div>
                </div>
                <div class="tab-2">
                    <label for="tab2-2">Fiat Currency</label>
                    <input id="tab2-2" name="tabs-two" type="radio">
                    <div>

                        <h1>tab2</h1>
                    </div>
<!--                    <div class="owl-carousel owl-theme owl-loaded owl-drag">-->
<!--                        <div class="owl-stage-outer">-->
<!--                            <div class="owl-stage"-->
<!--                                 style="transform: translate3d(-1715px, 0px, 0px); transition: all 0.25s ease 0s; width: 5880px;">-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>7</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>8</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>9</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>10</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>11</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>12</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>1</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>2</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>3</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>4</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item active" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>5</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>6</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>7</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>8</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>9</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>10</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>11</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>12</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>1</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>2</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>3</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>4</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>5</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="owl-item cloned" style="width: 235px; margin-right: 10px;">-->
<!--                                    <div class="item">-->
<!--                                        <h4>6</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="press-area">
        <div class="container custom-container">
            <div class="row justify-content-center">

                <h2>Press& Partners</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm">
                </div>
                <div class="col-lg-2 col-md-2 col-6 text-center"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm">
                </div>
                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm"></div>
                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm"></div>
                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm"></div>
                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0"><img
                            src="<?= get_template_directory_uri() ?>/img/cad.svg" alt="images not found"
                            class="avatar avatar-ex-sm"></div>
            </div>
        </div>
    </section>
    <section class="carousel-container">
    </section>
    <section class="product-area">
        <div class="container custom-container">
            <div class="row d-flex justify-content-around">

                <div class="col-6 product-text">
                    <h2 data-translate="OTC_header1"></h2>
                </div>
                <div class="col-6 product-text">
                    <p data-translate="OTC_header1_desc"></p>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-4 col-md-12">
                    <div class="who-text">
                        <h2 data-translate="Our_Product">Our_Product</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="tabs">
                        <div class="tab-2">
                            <label for="tab2-3">OTC Direct</label>
                            <input id="tab2-3" name="tabs-two" type="radio" checked="checked">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>
                                            Accss deep liquidity anytime electronically.
                                        </h3>
                                        <p>
                                            By being connected to Virgo OTC Direct, our clients are able to execute
                                            large block trades instantaneously.
                                            Our seamless workflow allows our institution clients to be able to receive
                                            best execution and flexible settlements post-trade.
                                        </p>
                                        <div class="round-btn-light">
                                            <a href="">
                                                learn more
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img
                                                src="<?= get_template_directory_uri() ?>/img/cad.svg"
                                                alt="images not found"
                                                class="avatar avatar-ex-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-2">
                            <label for="tab2-4">OTC Chat Broker</label>
                            <input id="tab2-4" name="tabs-two" type="radio">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>
                                            Personalized service for executing large block transactions.
                                        </h3>
                                        <p>
                                            Our OTC trade team will facilitate any trade requests you will have for your business. From trading like Bitcoin, Ethereum,
                                            and Litecoin, to hedging out risk by trading back into Tether (USDT).
                                        </p>
                                        <div class="round-btn-light">
                                            <a href="">
                                                learn more
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img
                                                src="<?= get_template_directory_uri() ?>/img/cad.svg"
                                                alt="images not found"
                                                class="avatar avatar-ex-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-area">
        <div class="container custom-container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 col-md-12">
                    <div class="client-text">
                        <h2 data-translate="Our_Product">Our_Client</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="tabs-vertical row d-flex justify-content-around">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-6">
                                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                            </div>
                            <nav class="col-6">
                                <a>Institutions</a>
                                <a>Trading Firms</a>
                                <a>Miners</a>
                                <a>High Net Worth Individuals</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">

                        <div class="container">
                            <p>VirgoCX provides institutional investors with flexibility in regards to investing in
                                digital currencies. Our digital system and our chat brokerage options allows
                                institutions to be able to access the market efficiently. In addition to fast execution,
                                our flexible settlements allow our clients to be able to access funds from our tier 1
                                banks when they need it.</p>
                        </div>
                        <div class="container">
                            <p>Proprietary Trading Firms find utility within our OTC desk by being able to hedge risk
                                efficiently by utilizing our highly liquid digital assets
                                and USDT/CAD on/off ramps. We help our clients quickly settle their transactions with us
                                so they are able to hedge other risks and optimize their cryptocurrency trading
                                strategies.</p>
                        </div>
                        <div class="container">
                            <p>Cryptocurrency Mining Firms optimize their working capital by utilizing VirgoCX OTC. We
                                provide best in class execution of digital
                                assets and rapid settlement for our clients to be able to have liquidity to hedge, pay
                                expenses, and more. </p>
                        </div>
                        <div class="container">
                            <p>Our HNW clients receive VIP service in regards to having access to a complete view of the
                                digital currency markets through our market commentary.
                                They will also have access to optionality to be able to purchase digital assets from our
                                Account Managers, or by themselves using our state of the digital system. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-area">
        <div class="container custom-container">
            <div class="row d-flex justify-content-center">
                <div class="why-text">
                    <h2 data-translate="Our_Product">Why Trade with us</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 col-md-12">
                    <ul class="why-text">
                        <li>Save on Execution Costs</li>
                        <li>Zero Trading Fees</li>
                        <li>Best Pricing in Canada</li>
                        <li>Access to Foreign Currencies</li>
                        <li>Personalized Services</li>
                        <li>Rapid Settlement</li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="signup-area">
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

    <style type="text/css">
        /*virgoOTC-blue:#05004d*/

        /*;*/
        /*virgoOTC-purple:#080449*/

        /*;*/
        /*virgoOTC-gold:#c7ba9a*/

        /*;*/


        .client-area {
            padding: 40px 0px 60px;
            color: white;
            background: #05004d;
        }

        .signup-area,
        .press-area {
            padding: 40px 0px 60px;
            color: white;
            background: #080449;
        }

        .why-area,
        .product-area {
            padding: 40px 0px 60px;
            color: #05004d;
            background: white;
        }

        .why-text {
            height: 600px;
        }

        .why-text h2,
        .how-text h2,
        .who-text h2 {
            color: #05004d;
            font-weight: 600;
            font-size: 36px;
            margin-bottom: 26px;
        }

        .who-text h2 {
            top: 50%;
            position: absolute;
        }

        .product-text h2 {
            color: #c7ba9a;
            font-weight: 600;
            font-size: 36px;
            margin-bottom: 26px;
        }

        .product-text p {
            color: #05004d;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 26px;
        }

        .client-text h2 {
            color: white;
            font-weight: 600;
            font-size: 36px;
            margin-bottom: 26px;
        }


        /*carousel*/
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


        .tabs-vertical {
            margin: 0px 20px;
            position: relative;
            width: 100%;
        }

        .tabs-vertical nav {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            color: rgba(239, 237, 239, 0.5);
            width: 150px;
        }

        .tabs-vertical nav a {
            border-left: 1px solid rgba(239, 237, 239, 0.5);
            padding: 5px 0 5px 20px;
            text-align: start;
            width: 100%;
            cursor: pointer;
        }

        .tabs-vertical nav a:hover,
        .tabs-vertical nav a.selected {
            border-left: 3px solid #c7ba9a;
            color: #c7ba9a;
        }

        .tabs-vertical .container {
            position: absolute;
            top: 0px;
            left: 150px;
            color: white;
            width: 0px;
            height: 100%;
            opacity: 0;
            transition: opacity 0.1s linear 0s;
        }

        .tabs-vertical .container.visible {
            width: calc(100% - 150px);
            opacity: 1;
        }

        .tabs-vertical .container p {
            padding-bottom: 2px;
        }

        .tabs-vertical .container p:last-of-type {
            padding-bottom: 0px;
        }

        .banner-area {
            position: relative;
            z-index: 888888;
            padding-top: 8rem;
            padding-bottom: 8rem;
            background-color: #05004D;
            font-size: 1.4rem;
        }

        .carousel-img img {
            width: 30px;
            height: auto;
        }

        .carousel-item{
            color: white;
            background-color: #c7ba9a ;
        }

    </style>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover()
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: true
                });

            });

            $('.tabs-vertical nav a').on('click', function () {
                show_container($(this).index());
            });

            show_container(0);

            function show_container(index) {
                // Make the container visible
                $('.tabs-vertical .container.visible').removeClass('visible');
                $('.tabs-vertical .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

                // Set the tab to selected
                $('.tabs-vertical nav a.selected').removeClass('selected');
                $('.tabs-vertical nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
            }


        })(jQuery);
    </script>

<?php
get_footer('otc');
