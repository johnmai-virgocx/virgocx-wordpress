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
                    <div class="col-lg-6 col-md-12 pt-5">
                        <h1>
                                <span data-translate="OTC_landing_banner">
                                    24/7 Institutional Liquidity
                                    for Cryptocurrencies
                                </span>

                        </h1>
                        <p class="tag-line gold" data-translate="OTC_landing_banner_desc">Dedicated for seamless
                            execution of large block transactions over $30,000 CAD</p>

                        <a class="round-btn scroll-to-sign-up" data-translate="OTC_landing_btn1">
                            Get started
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img class="banner-img-1"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Banner/Background_Photo.png"
                             alt="flags"/>
                        <img class="banner-img-2"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Banner/Banner_Illustration.png"
                             alt="flags"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel-area">
        <div class="container custom-container">
            <div class="tabs-horizontal">
                <nav class="row">
                    <a data-translate="OTC_landing_cypto">Cryptocurrency</a>
                    <a data-translate="OTC_landing_fiat">Fiat Currency</a>
                </nav>
                <div class="row carousel-background">
                    <div class="container">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1715px, 0px, 0px); transition: all 0.25s ease 0s; width: 5880px;">
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/BTC Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Bitcoin</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">BTC</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/ETH Icon.svg"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Ethereum</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">ETH</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/EOS Icon.svg"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span data-translate="EOS">EOS</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">EOS</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/Doge Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Dogecoin</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">DOGE</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/DAI Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>DAI</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">DAI</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/BCH Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Bitcoin Cash</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">BCH</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/LTC Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Litecoin</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">LTC</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/PAXG Icon.svg"
                                                     alt="images not found">
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Pax Gold</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">PAXG</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/UNI Icon.svg"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Uniswap</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">UNI</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/USDC Icon.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>USDC</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">USDC</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/USDT Icon.svg"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>USDT</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">USDT</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Cryptocurrency Icon/XLM Icon.svg"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Stellar</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">XLM</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/255px-Flag_of_Australia_(converted) 1.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Australian Dollar</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">AUD</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/Flag_of_Europe 1.png"
                                                     alt="images not found">
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Euro</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">EUR</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/1200px-Flag_of_Canada_(Pantone) 2.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Canadian Dollar</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">CAD</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/1200px-Flag_of_New_Zealand 1.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>New Zealand Dollar</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">NZD</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/1200px-Flag_of_the_United_Kingdom 1.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>Pound Sterling</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">GBP</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="owl-item ">
                                        <a class="pg-top">
                                            <div class="carousel-img">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/img/Landing_Page/Fiat Currency Icon/1200px-Flag_of_the_United_States 1.png"
                                                        alt="images not found"
                                                >
                                            </div>
                                            <div class="pg-text">
                                                <div class="row">
                                                    <span>US Dollar</span>
                                                </div>
                                                <div class="row">
                                                    <span class="bold">USD</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="press-area">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <h2>Press & Partners</h2>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                    <div class="press-img mnp">
                        <a href="https://www.mnp.ca/en">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/MNP.svg"
                                 class="img-fluid"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                    <div class="press-img">
                        <a href=" https://www.chainalysis.com/ ">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/Chainalysis.svg"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                    <div class="press-img fireblocks">
                        <a href="https://finance.yahoo.com/news/canada-adds-virgocx-emerging-institutional-133500985.html?guccounter=1&guce_referrer=aHR0cHM6Ly93d3cuZ29vZ2xlLmNhLw&guce_referrer_sig=AQAAAJHseEHRCW60KtOKnZVZ8UWtQ0Gie5I97czRbx5WzpWqAxBcy7nNsZqnb6A75IqtFy_ElObvo7I7Ev9wNmI9znmxvpNWC9Td0svysMaywS7WaxYZb4E-bJ6MqfYhvJ19NXYnTHUTo10nIKtWZmH7fZV9d7_a5vFFFS9dIqyWLQ1z">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/Fireblocks.svg"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                    <div class="press-img">
                        <a href="https://www.coindesk.com/canadian-exchange-virgocx-taps-ledger-vault-for-custody-insurance-support">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/Coindesk.svg"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                    <div class="press-img">
                        <a href="https://blockgeeks.com/community-partners/virgocx/">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/Blockgeeks.svg"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-4 col-6 ">
                    <div class="press-img middle">
                        <a href="https://www.blakes.com/">
                            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Press_ Partners/Blakes.svg"
                                 alt="images not found"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-area">
        <div class="container pb-5 custom-container">
            <div class="row d-flex justify-content-around">

                <div class="col-lg-6 col-md-12 product-text">
                    <h2 data-translate="OTC_landing_banner_2">
                        VirgoCX OTC is A Full Service Trade Desk for Large Block Transactions.
                    </h2>
                </div>
                <div class="col-lg-6 col-md-12 product-text">
                    <p data-translate="OTC_landing_banner_2desc">
                        VirgoCX OTC offers direct market access for cryptocurrencies with <span class="blue">optimal price execution.</span>
                        We bridge the gap between traditional financial services
                        and the cryptocurrency markets by allowing our clients to have access to a deep pool of crypto
                        and fiat currencies to fill large orders at a <span class="blue">desired market price.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-5 custom-container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 col-md-12">
                    <div class="who-text">
                        <h2 data-translate="Our_Product">Our Product</h2>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="tabs">
                        <div class="product-tabs-horizontal">
                            <nav class="row">
                                <a data-translate="OTC_landing_banner2_tag1">OTC Direct</a>
                                <a data-translate="OTC_landing_banner2_tag2">OTC Chat Broker</a>
                            </nav>
                            <div class="row">
                                <div class="container visible">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 pt-3">
                                            <h3 data-translate="OTC_landing_banner2_tag1_desc_p1">
                                                Access deep liquidity anytime<span
                                                        data-translate="OTC_landing_banner2_tag1_desc_p2" class="gold">
                                            electronically.
                                        </span>
                                            </h3>
                                            <p data-translate="OTC_landing_banner2_tag1_desc2">
                                                By being connected to Virgo OTC Direct, our clients are able to execute
                                                large block trades instantaneously.
                                                Our seamless workflow allows our institution clients to be able to <span
                                                        class="blue">receive
                                            best execution and flexible settlements post-trade.</span>
                                            </p>
                                            <a class="round-btn-light mt-5" href="../en-otc-direct/"
                                               data-translate="OTC_learn">
                                                learn more
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/img/Landing_Page/OurProducts/OTC_Dirct_Illustration.png"
                                                    alt="images not found"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 pt-3">
                                            <h3 data-translate="OTC_landing_banner2_tag2_desc_p1">
                                                Personalized service for executing<span
                                                        data-translate="OTC_landing_banner2_tag1_desc_p2" class="gold">
                                            large block transactions.
                                        </span>
                                            </h3>

                                            <p data-translate="OTC_landing_banner2_tag2_desc2">
                                                Our OTC trade team will facilitate <span
                                                        class="blue">any trade requests</span> you will have for your
                                                business. From trading like Bitcoin, Ethereum,
                                                and Litecoin, to hedging out risk by trading back into Tether (USDT).
                                            </p>
                                            <a class="round-btn-light mt-5" href="../en-otc-chatbroker/"
                                               data-translate="OTC_learn">learn more
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mt-5">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/img/Landing_Page/OurProducts/OTC_Chat_Broker.png"
                                                    alt="images not found"
                                            >
                                        </div>
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
            <div class="row">
                <div class="client-text">
                    <h2 data-translate="Our_client">Our_Client</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="tabs-vertical row d-flex justify-content-around">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <nav class="tab-dots">
                                <span class="tab-dot"></span>
                                <span class="tab-dot"></span>
                                <span class="tab-dot"></span>
                                <span class="tab-dot"></span>
                            </nav>
                            <nav>
                                <a data-translate="Institutions">Institutions</a>
                                <a data-translate="Trading_Firms">Trading Firms</a>
                                <a data-translate="Miners">Miners</a>
                                <a data-translate="Individual">High Net Worth Individuals</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">

                        <div class="container" data-translate="OTC_landing_banner3_1">
                            <p>VirgoCX provides institutional investors with flexibility in regards to investing in
                                digital currencies. Our digital system and our chat brokerage options allows
                                institutions to be able to access the market efficiently. In addition to fast execution,
                                our flexible settlements allow our clients to be able to access funds from our tier 1
                                banks when they need it.</p>
                        </div>
                        <div class="container" data-translate="OTC_landing_banner3_2">
                            <p>Proprietary Trading Firms find utility within our OTC desk by being able to hedge risk
                                efficiently by utilizing our highly liquid digital assets
                                and USDT/CAD on/off ramps. We help our clients quickly settle their transactions with us
                                so they are able to hedge other risks and optimize their cryptocurrency trading
                                strategies.</p>
                        </div>
                        <div class="container" data-translate="OTC_landing_banner3_3">
                            <p>Cryptocurrency Mining Firms optimize their working capital by utilizing VirgoCX OTC. We
                                provide best in class execution of digital
                                assets and rapid settlement for our clients to be able to have liquidity to hedge, pay
                                expenses, and more. </p>
                        </div>
                        <div class="container" data-translate="OTC_landing_banner3_4">
                            <p>Our HNW clients receive VIP service in regards to having access to a complete view of the
                                digital currency markets through our market commentary.
                                They will also have access to optionality to be able to purchase digital assets from our
                                Account Managers, or by themselves using our state of the digital system. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-img">
            <img src="<?= get_template_directory_uri() ?>/img/Landing_Page/Our Clients/Background Element copy.png"
                 alt="images not found">
            <img class="arrow-right-img"
                 src="<?= get_template_directory_uri() ?>/img/Landing_Page/Our Clients/Background Element copy 2.png"
                 alt="images not found">
        </div>
    </section>
    <section class="why-area">
        <div class="container custom-container">
            <div class="why-title">
                <h2 data-translate="Why_trade">Why Trade with us</h2>
            </div>
            <div class="why-content">

                <div class="row d-flex justify-content-between">
                    <div class="why-img">
                        <img class="why-text"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Save Icon.svg"
                             alt="images not found"/>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3 data-translate="OTC_landing_banner4_col1-1">Save on Execution Costs</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-1">We eliminate slippage on larger trades. <span
                                    class="gold">Save up to 2% </span> compared to trading on other
                            exchanges.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="why-img">
                        <img class="why-text"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Zero Icon.svg"
                             alt="images not found"/>

                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <h3 data-translate="OTC_landing_banner4_col1-2">Zero Trading Fees</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-2">We <span
                                    class="gold">don’t charge anything </span>on top. What you see is what you get.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="why-img">
                        <img class="why-text"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Best Icon.svg"
                             alt="images not found"/>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <h3 data-translate="OTC_landing_banner4_col1-3">Best Pricing in Canada</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-3">Our liquidity pools allow us to provide<span
                                    class="gold"> one of the best prices </span>in Canada for trading BTC,
                            ETH, USDT, and more.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="why-img">
                        <img class="why-text"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Access Icon.svg"
                             alt="images not found"/>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3 data-translate="OTC_landing_banner4_col1-4">Access to Foreign Currencies</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-4">We have unique market access via
                            cryptocurrencies,
                            to provide a<span class="gold"> competitive pricing </span>for other
                            foreign currencies.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="why-img">
                        <img class="why-text"
                             src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Personalized Icon.svg"
                             alt="images not found"/>

                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3 data-translate="OTC_landing_banner4_col1-5">Personalized Services</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-5">Our OTC account managers are available <span
                                    class="gold">24/7 </span>to facilitate every request for your business or
                            trading needs. You will also have access to <span class="gold">industry insights </span>on
                            the cryptocurrency
                            markets.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <img class="why-text"
                         src="<?= get_template_directory_uri() ?>/img/Landing_Page/Why Trade with Us/Rapid Icon.svg"
                         alt="images not found"/>
                    <div class="col-lg-6 col-md-12 ">
                        <h3 data-translate="OTC_landing_banner4_col1-6">Rapid Settlement</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p data-translate="OTC_landing_banner4_col2-6">We provide <span class="gold">a same day, no limit settlement </span>for
                            your USD and CAD trades. This also applies to
                            your Bitcoin, Ethereum, USDT, and any other cryptocurrency.</p>
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
                        <h2 data-translate="OTC_Signup">Sign Up Today</h2>
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
        h1, h2, h1 > span, h2 > span, h3, h4 {
            font-family: "Matter-Bold" !important;
        }

        nav > a, p, span {
            font-family: "Matter-Regular" !important;
        }

        .banner-img-1 {
            position: absolute;
            left: 0px;
            top: 30px;
            width: 150%;
            z-index: -1;
            max-width: 100vw;
        }

        .banner-img-2 {
            max-width: 90vw;
            position: absolute;
            z-index: -1;
            top: 30px;
        }

        .banner-area {
            position: relative;
            z-index: 888888;
            padding-top: 4rem;
            background-color: var(--VirgoCX-blue);
            font-size: 1rem;
            overflow: hidden;
            min-height: 700px;
        }

        .banner-area h1 {
            color: white;
        }

        .banner-area p {
            font-weight: bold;
        }

        @media screen and (min-width: 900px) {
            .banner-img-1 {
                left: -200px;
                top: -250px;
            }

            .banner-img-2 {
                top: -50px;
            }

            .banner-area p {
                white-space: nowrap;
            }
        }

        .banner-area .round-btn {
            z-index: 9999999;
            position: absolute;
        }

        .carousel-area {
            padding: 140px 0px 40px;
            color: white;
            background: var(--VirgoCX-blue);
        }

        .carousel-area span {
            font-size: 0.9rem;
            vertical-align: middle;
            /*line-height: 15px;*/
            white-space: pre-line;
        }

        .client-area {
            padding: 100px 0px 60px;
            color: white;
            background: var(--VirgoCX-blue);
            position: relative;
            min-height: 600px;
        }

        .client-area .background-img img:nth-child(1) {
            position: absolute;
            right: 0px;
            top: 0;
        }

        .client-area .background-img img:nth-child(2) {
            position: absolute;
            right: 100px;
            top: 0;
        }


        @media screen and (max-width: 900px) {
            .carousel-area {
                padding: 0px 0px 60px;
                color: white;
                background: var(--VirgoCX-blue);
            }

            .client-area .background-img img:nth-child(2) {
                display: none;
            }

            .arrow-right-img {
                display: none;
            }

            .product-area .container:nth-child(1) {
                padding-bottom: 0px !important;
            }
        }

        .client-text {
            padding: 0 15px 60px 15px;
        }


        .press-area {
            padding: 40px 0px 60px;
            color: white;
            background: #080449;
            opacity: 0.9;
        }

        .press-area h2 {
            color: var(--VirgoCX-gold);
        }

        .mnp a img {
            width: 90px !important;
        }

        .middle a img {
            width: 130px;
        }

        .fireblocks a img {
            margin-top: 10px;
            width: 130px;
        }

        .signup-area h2 {
            font-size: 36px;
            text-align: center;
        }

        .signup-area .round-btn {
            margin: auto;
        }


        .product-area {
            padding: 80px 0px 60px;
            color: var(--VirgoCX-blue);
            background: white;
        }


        .why-area {
            padding: 40px 0px 0px;
            color: var(--VirgoCX-blue);
            /*background-image: url(/wp-content/themes/virgocx/img/bg3_mobile.svg);*/
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: bottom;
        }

        .why-area img {
            margin: 0 5px;
        }

        .who-text {
            min-height: 50px;
            margin-bottom: 50px;
        }

        .why-title h2,
        .how-text h2 {
            color: var(--VirgoCX-blue);
            font-weight: 600;
            font-size: 36px;
            text-align: center;
            margin-bottom: 26px;
        }

        .who-text h2 {
            color: var(--VirgoCX-blue);
            font-weight: 600;
            font-size: 36px;
            text-align: center;
        }

        .why-text > * {
            display: inline;
        }

        .why-content > * {
            padding: 5% 3%;
        }


        .why-text {
            position: absolute;
        }

        .why-img {
            position: relative;
        }

        .why-img span:nth-child(n) {
            width: 1px;
            height: 15px;
            border: 1px solid #C7BA9A;
            position: absolute;
            margin: auto;
            left: 20px;
            top: 50px;
        }

        .why-img span:nth-child(2) {
            top: 50px;
        }

        .why-img span:nth-child(3) {

            top: 80px;
        }

        .why-img span:nth-child(4) {
            display: block;
            top: 110px;
        }

        .why-img span:nth-child(5) {
            display: block;
            top: 140px;
        }

        .why-area h3,
        .why-area p {
            width: 85%;
            right: 0;
            position: relative;
            top: 0;
            margin-left: 45px;
        }

        .why-area p {
            color: var(--VirgoCX-grey);
        }

        .why-area .background-img .mobile {
            display: block;
            width: 100%;
            padding-top: 0px;
        }

        .why-area .background-img img {
            display: none;
            width: 100%;
            padding-top: 100px;
            /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
        }

        @media screen and (min-width: 900px) {
            .banner-area {
                padding-top: 8rem;
                min-height: 600px;
            }

            .why-content > * {
                height: 100px;
            }

            .who-text h2 {
                text-align: left;
                top: 100px;
                position: relative;
            }

            .why-area .background-img img {
                /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
                display: block;
            }

            .why-area .background-img .mobile {
                display: none;
            }


            .why-img span:nth-child(4) {
                display: none;
            }

            .why-img span:nth-child(5) {
                display: none;
            }
        }

        .product-text h2 {
            color: #c7ba9a;
            font-weight: 600;
            font-size: 36px;
            margin-bottom: 26px;
        }

        .product-area h3 {
            font-family: "Matter-Medium" !important;
        }

        .product-text p {
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 26px;
        }

        .client-text h2 {
            color: white;
            font-weight: 600;
            font-size: 36px;
            margin-bottom: 50px;
        }

        @media screen and (max-width: 900px) {
            .client-text {
                width: 100%;
            }

            .client-text h2 {
                text-align: center;
            }
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

        .tabs .container h3 {
            padding-top: 2rem !important;
        }

        .tabs [class^="tab"] label,
        .tabs [class*=" tab"] label {
            color: var(--VirgoCX-blue);
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
            -ms-appearance: none;
            -o-appearance: none;
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
            z-index: 2;
        }

        .tabs-vertical nav {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            color: rgba(239, 237, 239, 0.5);
            width: 70%;
        }

        .tab-dots {
            width: 50px !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .tabs-vertical nav a {
            border-left: 1px solid rgba(239, 237, 239, 0.5);
            padding: 5px 0 5px 20px;
            text-align: start;
            width: 100%;
            cursor: pointer;
            font-size: 20px;
        }

        .tab-dot {
            border-radius: 50%;
            margin: 5px 0 5px 20px;
            text-align: end;
            width: 6px;
            height: 6px;
            cursor: pointer;
            background-color: rgba(239, 237, 239, 0.5);
        }

        .tab-dot:hover,
        .tabs-vertical nav .tab-dot.selected {
            background-color: #c7ba9a;
        }

        .tabs-vertical nav a:hover,
        .tabs-vertical nav a.selected {
            border-left: 3px solid #c7ba9a;
            color: #c7ba9a !important;
        }

        .tabs-vertical .container {
            display: none;
            position: absolute;
            top: 0px;
            color: white;
            opacity: 0;
            transition: opacity 0.1s linear 0s;
        }

        .tabs-vertical .container.visible {
            display: block;
            width: calc(100% - 150px);
            opacity: 1;
        }

        @media screen and (max-width: 900px) {
            .tabs-vertical .container {
                position: relative;
                margin-top: 50px;
                color: white;
                opacity: 0;
                transition: opacity 0.1s linear 0s;
            }

            .tabs-vertical .container.visible {
                width: 100%;
                opacity: 1;
            }
        }

        .tabs-vertical .container p {
            padding-bottom: 2px;
        }

        .tabs-vertical .container p:last-of-type {
            padding-bottom: 0px;
        }

        .carousel-background {
            background-color: var(--VirgoCX-gold);
        }

        .product-tabs-horizontal,
        .tabs-horizontal {
            position: relative;
            width: 100%;
        }

        @media screen and (min-width: 900px) {
            .product-tabs-horizontal .row .container:nth-child(1) h3 {
                white-space: nowrap;
            }
        }

        .product-tabs-horizontal nav,
        .tabs-horizontal nav {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            color: rgba(239, 237, 239, 0.5);
            width: 100%;
        }

        .product-tabs-horizontal nav a,
        .tabs-horizontal nav a {
            font-size: 19px;
            color: white !important;
            border-bottom: 1px solid rgba(239, 237, 239, 0.5);
            padding: 5px 0 5px 20px;
            text-align: center;
            width: 50%;
            cursor: pointer;
        }

        .product-tabs-horizontal nav a {
            color: var(--VirgoCX-grey) !important;
            border-bottom: 1px solid rgba(30, 26, 95, 0.2);

        }

        .product-tabs-horizontal h3 {
            color: var(--VirgoCX-blue) !important;
        }


        .product-tabs-horizontal nav a:hover,
        .product-tabs-horizontal nav a.selected,
        .tabs-horizontal nav a:hover,
        .tabs-horizontal nav a.selected {
            border-bottom: 3px solid #c7ba9a;
            color: white;
            font-family: "Matter-Bold";
        }

        .product-tabs-horizontal nav a:hover,
        .product-tabs-horizontal nav a.selected {
            color: var(--VirgoCX-blue) !important;
        }

        .product-tabs-horizontal .container,
        .tabs-horizontal .container {
            left: 150px;
            color: white;
            display: none;
            transition: opacity 0.1s linear 0s;
        }

        .product-tabs-horizontal .container.visible,
        .tabs-horizontal .container.visible {
            width: 100%;
            display: block;
        }

        .product-tabs-horizontal .container p,
        .tabs-horizontal .container p {
            padding-bottom: 2px;
        }

        .product-tabs-horizontal .container p:last-of-type,
        .tabs-horizontal .container p:last-of-type {
            padding-bottom: 0px;
        }

        .product-area p {
            color: var(--VirgoCX-grey);
        }

        .carousel-area nav {
            margin-bottom: 40px;
        }

        .owl-stage {
            background-color: #c7ba9a;
        }

        .owl-carousel .owl-item img {
            width: 30px;
            height: auto;
            margin: 10px;
        }

        .owl-carousel .owl-item {
            width: 200px;
            height: 50px;
            color: white;
        }

        .pg-text {
            color: white;
        }


        .press-area img {
            width: 150px;
            max-height: 100%;
            max-width: 100%;
            height: auto;
        }

        .owl-carousel.owl-drag .owl-item {
            background: linear-gradient(#ebe3d1, #c7ba9a);
        }

        .scroll-to-sign-u {
            z-index: 888899;
        }

        .selected {
            font-weight: bold;
        }


        @media screen and (max-width: 900px) {
            .who-text h2,
            .client-text h2,
            .why-title h2,
            .signup-area h2,
            .press-area h2 {
                font-size: 32px;
            }
        }
    </style>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover()
                var owl = $('.owl-carousel');
                if (screen.width > 900) {
                    owl.owlCarousel({
                        items: 5,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 1500,
                        pagination: false,
                        dots: false,
                        autoplayHoverPause: true
                    });
                } else {
                    owl.owlCarousel({
                        items: 2,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 1500,
                        pagination: false,
                        dots: false,
                        autoplayHoverPause: true
                    });
                }


                $('.tabs-vertical nav a').on('click', function () {
                    show_container_vertical($(this).index());
                });

                show_container_vertical(0);

                function show_container_vertical(index) {
                    // Make the container visible
                    $('.tabs-vertical .container.visible').removeClass('visible');
                    $('.tabs-vertical .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

                    // Set the tab to selected
                    $('.tabs-vertical nav a.selected').removeClass('selected');
                    $('.tabs-vertical nav .tab-dot.selected').removeClass('selected');
                    $('.tabs-vertical nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
                    $('.tabs-vertical nav .tab-dot:nth-of-type(' + (index + 1) + ')').addClass('selected');
                }

                $('.tabs-horizontal nav a').on('click', function () {
                    show_container('.tabs-horizontal', $(this).index());
                });
                $('.product-tabs-horizontal nav a').on('click', function () {
                    show_container('.product-tabs-horizontal', $(this).index());
                });

                $('.tabs nav a').on('click', function () {
                    scroll_to_container($(this).index());
                });

                function scroll_to_container(index) {
                    // Make the container visible
                    console.log(index);
                    console.log('.tabs .custom-container:nth-of-type(' + (index + 1) + ')');
                    $('html, body').animate({
                        scrollTop: $('.tabs .custom-container:nth-of-type(' + (index + 1) + ')').offset().top
                    }, 800);
                }

                show_container('.tabs-horizontal', 0);
                show_container('.product-tabs-horizontal', 0);

                function show_container(name, index) {
                    // Make the container visible
                    $(name + ' .container.visible').removeClass('visible');
                    $(name + ' .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

                    // Set the tab to selected
                    $(name + ' nav a.selected').removeClass('selected');
                    $(name + ' nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
                }
            });


        })(jQuery);
    </script>

<?php
get_footer('otc');
