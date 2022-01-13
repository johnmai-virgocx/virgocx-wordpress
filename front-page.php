<?php
// Get the header

get_header();
$announcementText = get_theme_mod('virgocx_announcement_text');
$announcementLink = get_theme_mod('virgocx_announcement_link');
?>

<style type="text/css">
    #trading-fee-wrapper {
        padding: 0 15px;
    }
	
	#homepage-GetStarted {
		width: 195px;
		margin-left: 6px;
		background: #7965e6;
		color: #fff;
		border-radius: 5px;
		border: none;
		padding: 12px 12px;
		margin-bottom: 10px;
		transition: 0.4s all ease;
		-webkit-transition: 0.4s all ease;
		-moz-transition: 0.4s all ease;
	}
	
	#homepage-GetStarted:hover{
		background: linear-gradient(180deg, #7173e2 0%, #56a6d4 98%);
		transition: 0.4s all ease;
		-webkit-transition: 0.4s all ease;
		-moz-transition: 0.4s all ease;
	}
	
	.homepage2 {
		width: 50rem;
	}
	
	.homepage2 	#contactUs-GetStarted {
			width: 40%;
			background: linear-gradient(180deg, #56a6d4 0%, #7173e2 98%);
			color: #fff;
			padding: 0;
			margin-bottom: 2rem;
			border-radius: 5px;
			border: none;
			-webkit-transition: 0.4s all ease;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			
	}

    .mm-dropdown{
        position:relative;
        height:100%;
    }

    #crypto-options{
        /* height:286px; */
        overflow-y:scroll;
        /* position:absolute; */
        
        
        
        

    }


    .dropd{
        height:286px;
    }

    

    /* ::-webkit-scrollbar-button{
        display:none;
    } */
    #crypto-options::-webkit-scrollbar {
		  width: 2px;
	}
    #crypto-options::-webkit-scrollbar-track{
        border-radius: 0.5px;
        box-shadow: inset 0 0 10px rgb(0,0,0,0);
        height:50px;
    }


    #crypto-options::-webkit-scrollbar-thumb{
        border-radius:0.5px;
        background-color: rgb(0,0,0,0.25);
    }
    /* ::-webkit-scrollbar{
            width: 12px;
        } */

    
    

    .hero-area-wrapper {
        background-size: contain;
    }

    .press-img.mnp img {
        width: 90px;
    }

    .get-started-content .wpcf7-not-valid-tip {
        display: none;
    }

    .get-started-content .wpcf7-response-output {
        display: none !important;
    }

    .get-started-content .wpcf7-email {
        max-width: 90vw;
    }

    /*Sentence*/
    .sentence {
        color: rgb(102, 97, 127);
        font-size: 48px;
        font-family: AvenirNextBold;
        text-align: left;
    }

    /*Wrapper*/
    /*Vertical Sliding*/
    .sliding-vertical {
        text-indent: 5px;
        -moz-text-indent: 240px;
        display: inline;
    }

    .sliding-vertical span {
        animation: topToBottom 8s linear infinite 0s;
        -ms-animation: topToBottom 8s linear infinite 0s;
        -webkit-animation: topToBottom 8s linear infinite 0s;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        /*top: 72px;*/
        color: rgba(20, 193, 162, 1.0);
    }

    .sliding-vertical span:nth-child(2) {
        animation-delay: 2.5s;
        -ms-animation-delay: 2.5s;
        -webkit-animation-delay: 2.5s;
    }

    .sliding-vertical span:nth-child(3) {
        animation-delay: 5s;
        -ms-animation-delay: 5s;
        -webkit-animation-delay: 5s;
    }


    /*topToBottom Animation*/
    @-moz-keyframes topToBottom {
        0% {
            opacity: 0;
        }
        5% {
            opacity: 0;
            -moz-transform: translateY(-25px);
        }
        10% {
            opacity: 1;
            -moz-transform: translateY(0px);
        }
        25% {
            opacity: 1;
            -moz-transform: translateY(0px);
        }
        30% {
            opacity: 0;
            -moz-transform: translateY(25px);
        }
        80% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes topToBottom {
        0% {
            opacity: 0;
        }
        5% {
            opacity: 0;
            -webkit-transform: translateY(-25px);
        }
        10% {
            opacity: 1;
            -webkit-transform: translateY(0px);
        }
        25% {
            opacity: 1;
            -webkit-transform: translateY(0px);
        }
        30% {
            opacity: 0;
            -webkit-transform: translateY(25px);
        }
        80% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    @-ms-keyframes topToBottom {
        0% {
            opacity: 0;
        }
        5% {
            opacity: 0;
            -ms-transform: translateY(-25px);
        }
        10% {
            opacity: 1;
            -ms-transform: translateY(0px);
        }
        25% {
            opacity: 1;
            -ms-transform: translateY(0px);
        }
        30% {
            opacity: 0;
            -ms-transform: translateY(25px);
        }
        80% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    /*
    ====================================
    Screen - Tablate and below
    ====================================
    */

    @media screen and (max-width: 992px) {
        .announcement-banner img {
            display: none;
        }

        /*Sentence*/
        .sentence {
            font-size: 30px !important;
        }

        .sliding-vertical {
            text-indent: 5px;
            -moz-text-indent: 150px;
        }

        /*.sliding-vertical span {*/
        /*    top: 88px;*/
        /*}*/
        #myCarousel {
            width: 85%;
        }

        .carousel-control-next {
            right: -60px;
            top: -50px;
            opacity: 1;
        }

        .carousel-control-prev {
            left: -60px;
            top: -50px;
            opacity: 1;
        }

        #speak-with-account {
            margin-top: 5rem;
        }
    }

    /*
    ====================================
    Small Screen - Tablate
    ====================================
    */
    @media screen and (min-width: 1170px) {
        .otc-area .otc-title{
            height: 200px;
        }
    }

    @media screen and (max-width: 768px) {
        .hero-area-wrapper {
            background-image: none;
        }

        /*Sentence*/
        .sentence {
            font-size: 30px !important;
        }

        /*.sliding-vertical span {*/
        /*    top: 77px;*/
        /*}*/
        .carousel-control-next {
            right: -90px;
            top: -20px;
            opacity: 1;
        }

        .carousel-control-prev {
            left: -90px;
            top: -20px;
            opacity: 1;
        }

    }

    /*
    ====================================
    Xtra Small Screen - Small Mobile
    ====================================
    */

    @media screen and (max-width: 576px) {
        .hero-content a img {
            width: 80%;
        }

        /*Sentence*/
        .sentence {
            font-size: 20px !important;
        }

        .sliding-vertical {
            text-indent: 5px;
            -moz-text-indent: 120px;
        }

        /*.sliding-vertical span {*/
        /*    top: 36px;*/
        /*}*/
        .mm-dropdown,
        .mm-dropdown2 {
            margin: 0 1rem !important;
        }

        .carousel-control-next {
            right: -70px;
            top: -20px;
            opacity: 1;
        }

        .carousel-control-prev {
            left: -70px;
            top: -20px;
            opacity: 1;
        }

        .otc-area {
            background-color: #7965e6;
            background-size: auto !important;
        }

        .otc-area .otc-title h3,
        .otc-area .otc-title p {
            color: #fff;
        }
    }


    .announcement-banner {
        vertical-align: top;
        position: relative;
        display: inline-block;
    }

    .flipText {
        position: relative;
        top: 20px;
        display: inline-block;
        width: auto;
        opacity: 0;
    }

    @keyframes slideText {
        0% {
            top: 20px;
            opacity: 0;
        }
        10% {
            top: 0px;
            opacity: 1;
        }
        90% {
            top: 0px;
            opacity: 1;
        }
        100% {
            top: -15px;
            opacity: 0;
        }
    }

    .trading-fee img {
        width: 100%;
    }

    .trading-fee{
        margin-left: -1.5%;
        padding: 0;
    }

    .hide {
        display: none;
    }

    .flipText p{
        margin: 0;
    }
	
	.h1-style {
		font-size: 1.6rem !important; 
		margin-bottom: 2rem !important;
		font-family: 'avenirnextregular' !important;
		font-weight: 900 !important;
		margin-top: 0 !important;
	}
	
	
</style>

<?php
$args = [
    'category_name' => 'rollingBanner'
];
global $wp_query;
$q = new $wp_query($args);
$totalNumber = $q->found_posts;
if ($totalNumber > 0):
if ($totalNumber === 1): ?>
<div class="announcement-banner d-flex justify-content-center" id="rollingBanner">
    <a class="flipText" style="top: 0px; opacity: 1;" data-translate="<?php $str = wp_strip_all_tags( get_the_content() );
    echo str_replace(' ', '', $str);?>"
       href="<?php the_title(); ?>"><?php the_content(); ?></a>
    <?php else:
    //    udpate total second for rolling aniamtion
    //    css start
    echo "<style>
             .flipText {
                    animation: slideText 4s infinite;
            }
        </style>";

    //    css ends
    ?>
    <div class="announcement-banner d-flex justify-content-center" id="rollingBanner">
        <?php if ($q->have_posts()) :$count = -1;
            while ($q->have_posts()) :$q->the_post();
                $count++; ?>
                <a class="hide" data-translate="<?php $str = wp_strip_all_tags( get_the_content() );
                echo str_replace(' ', '', $str);?>"
                   href="<?php the_title();?>"><?php the_content(); ?></a>
            <?php endwhile; endif;
        endif;
        endif; ?>
    </div>

    <div class="hero-area-wrapper">
        <div class="hero-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 order-1">
                        <div class="hero-content">
                            <div id="trading-fee-wrapper" class="d-flex align-items-center row">
                                <a href="/en-fees" class="trading-fee col-2">
                                    <img src="<?= get_template_directory_uri() ?>/img/zero-trading-fee.png"
                                         alt="announcement"/>
                                </a>
                                <div class="sentence col-10">
									<span data-translate="frontpage_Buy_Sell"></span>
                                    <div class="sliding-vertical ">
										<span data-translate="frontpage_Bitcoin">Bitcoin</span>
										<span data-translate="frontpage_Ethereum">Ethereum</span>
										<!-- <span data-translate="frontpage_USDT">USDT</span> -->
										<span data-translate="frontpage_Cryptocurrency">Cryptocurrency</span>
                                    </div>
                                </div>
                            </div>
                            <h1 class="h1-style"> <span data-translate="frontpage_description"/></h1>

                            <div class="hero-signup get-started-content">
                                <?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started" html_class="hero-signup"]') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buybtc-content hero-box">
                    <div class="row mb-2">
                        <div class="col-lg-12  col-md-12">

                            <div class="container custom-container">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div id="carousel-items-wrapper" class="carousel-inner w-100" role="listbox">
                                    </div>
                                    <a class="carousel-control-prev w-auto" href="#myCarousel" role="button"
                                       data-slide="prev">
                                        <img class="left" src="<?= get_template_directory_uri() ?>/img/left_arrow.svg"
                                             alt=""> </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next w-auto" href="#myCarousel" role="button"
                                       data-slide="next">
                                        <img class="right" src="<?= get_template_directory_uri() ?>/img/right_arrow.svg"
                                             alt=""> </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10  col-md-10">
                            <div class="buy-amount">
                                <form action="" method=""
                                      class="row justify-content-md-center d-flex justify-content-center align-items-baseline">
                                    <div class="amount-input col-lg-4">
                                        <input id="base-input" type="number" name="youammout"
                                               placeholder="Enter Quantity" data-translate="frontpage_Quantity"/>
                                        <!-- Use This! #just fix width+height IMG  -->
                                        <div class="mm-dropdown">
                                            <div class="conversion-selectioin d-flex" style="width:112px">
                                                <div id="crypto-selected" class="selected-option" data-value="BTC">
                                                    <img src="<?= get_template_directory_uri() ?>/img/BTC.png"/> BTC
                                                </div>
                                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg"
                                                     class="down"/>
                                            </div>

                                            <ul id="crypto-options">
                                            </ul>
                                            <input id="base-value" type="hidden" class="option" name="namesubmit"
                                                   value="BTC"/>
                                        </div>
                                        <!-- End This -->
                                    </div>

                                    <div class="amount-input col-lg-4">
                                        <input id="quote-input" type="number" name="amount"
                                               placeholder="Enter Total Amount" data-translate="frontpage_Amount"/>
                                        <!-- Use This! #just fix width+height IMG  -->
                                        <div class="mm-dropdown2">
                                            <div class="conversion-selectioin d-flex">
                                                <div id="fiat-selected" class="selected-option" data-value="BTC">
                                                    <img src="<?= get_template_directory_uri() ?>/img/cad.svg"/>
                                                </div>
                                                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg"
                                                     class="down"/>
                                            </div>
                                            <ul id="fiat-options">
                                            </ul>
                                            <input id="quote-value" type="hidden" class="option" name="namesubmit"
                                                   value="CAD"/>
                                        </div>
                                        <!-- End This -->
                                    </div>

                                    <a href="/page#/login" class="col-lg-2 blue-gradient-btn">
										<span class="span-buy-now"data-translate="frontpage_Buy_Now"/> 
									</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10 col-md-12">
                    -->
                    <div class="buybtc-bt row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                            <img src="<?= get_template_directory_uri() ?>/img/canada2x.png" alt="canada flag" width="20"
                                 height="24"/>
                            <span class="fint">FINTRAC Regulated MSB # M19955733</span>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <span>Assets Protected by <img src="/img/ledger.svg"
                                                       alt="images not found" class="img-fluid"/></span>
                        </div> -->
                    </div>
                    <!--
                                                </div>
                                            </div>
                    -->
                </div>
            </div>
        </div>
    </div>

    <!-- header-area end -->
</div>

<section class="press-area">
    <div class="container custom-container">
        <h2><span data-translate="frontpage_Press_Partners"/></h2>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                <div class="press-img mnp">
                    <a href="https://www.mnp.ca/en">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/MNP.png" class="img-fluid"
                             alt="images not found"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                <div class="press-img">
                    <a href=" https://www.chainalysis.com/ ">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/chainalysis.png"
                             alt="images not found"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                <div class="press-img">
                    <a href="https://finance.yahoo.com/news/canada-adds-virgocx-emerging-institutional-133500985.html?guccounter=1&guce_referrer=aHR0cHM6Ly93d3cuZ29vZ2xlLmNhLw&guce_referrer_sig=AQAAAJHseEHRCW60KtOKnZVZ8UWtQ0Gie5I97czRbx5WzpWqAxBcy7nNsZqnb6A75IqtFy_ElObvo7I7Ev9wNmI9znmxvpNWC9Td0svysMaywS7WaxYZb4E-bJ6MqfYhvJ19NXYnTHUTo10nIKtWZmH7fZV9d7_a5vFFFS9dIqyWLQ1z">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/yahoo.png" alt="images not found"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                <div class="press-img">
                    <a href="https://www.coindesk.com/canadian-exchange-virgocx-taps-ledger-vault-for-custody-insurance-support">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/coindesk.png"
                             alt="images not found"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                <div class="press-img">
                    <a href="https://blockgeeks.com/community-partners/virgocx/">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/blockgeeks.png"
                             alt="images not found"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4 col-6 ">
                <div class="press-img">
                    <a href="https://www.blakes.com/">
                        <img src="<?= get_template_directory_uri() ?>/img/partners/blakes.png" alt="images not found"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-area">
    <div class="container custom-container">
        <div class="feature-title">
            <h2><span data-translate="frontpage_header1"/></h2>
            <p><span data-translate="frontpage_header1_desc"/></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="feature-item fibg-1">
                    <img src="<?= get_template_directory_uri() ?>/img/feature5.png" alt="images not found"/>
                    <h5><span data-translate="frontpage_header1_tag1"/></h5>
                    <p><span data-translate="frontpage_header1_tag1_desc"/></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-item fibg-2">
                    <img src="<?= get_template_directory_uri() ?>/img/feature4.png" alt="images not found"/>
                    <h5><span data-translate="frontpage_header1_tag2"/></h5>
                    <p><span data-translate="frontpage_header1_tag2_desc"/></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-item fibg-1">
                    <img src="<?= get_template_directory_uri() ?>/img/feature2.png" alt="images not found"/>
                    <h5><span data-translate="frontpage_header1_tag3"/></h5>
                    <p><span data-translate="frontpage_header1_tag3_desc"/></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-item fibg-2">
                    <img src="<?= get_template_directory_uri() ?>/img/feature3.png" alt="images not found"/>
                    <h5><span data-translate="frontpage_header1_tag4"/></h5>
                    <p><span data-translate="frontpage_header1_tag4_desc"/></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fingertips-area">
    <div class="container custom-container">
        <div class="feature-title">
            <h2><span data-translate="frontpage_header2"/></h2>
            <p><span data-translate="frontpage_header2_desc"/></p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <div id="fp-download-apps" class="fingertips-item">
                    <h5><span data-translate="frontpage_Download"/></h5>
                    <div class="d-flex">
                        <div id="stores" class="app-store">
                            <a href="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048">
								<img class="app_store_download" 
									 data-value="app_store"
                                     src="<?= get_template_directory_uri() ?>/img/app_buttons/app_store.png"
                                        alt="images not found"/></a>
                            <a href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange"><img
                                        class="play_store_download" data-value="play_store"
                                        src="<?= get_template_directory_uri() ?>/img/app_buttons/play_store.png"
                                        alt="images not found"/></a>
                            <a href="https://virgocx.s3.ca-central-1.amazonaws.com/prod/2021/12/30/861643257275474bbae73bc7a7cabe12.apk"><img
                                        class="android_download" data-value="android"
                                        src="<?= get_template_directory_uri() ?>/img/app_buttons/android.png"
                                        alt="images not found"/></a>
                        </div>

                        <img id="app_qr_image" src="<?= get_template_directory_uri() ?>/img/qr_codes/app_store.png"
                             alt="images not found"/></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-12">
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="fingertips-img">
                    <img src="<?= get_template_directory_uri() ?>/img/app_display_new.png" alt="images not found"/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="security-area">
    <div class="container custom-container">
        <div class="feature-title">
            <h2><span data-translate="frontpage_header3"/></h2>
            <p>
                <span data-translate="frontpage_header3_desc"/>
            </p>
        </div>
        <div class="row align-items-center">
			<a href="/en-security" class="col-md-4">
            <!-- <a  class="col-md-4"> -->
                <div class="security-item">
                    <img src="<?= get_template_directory_uri() ?>/img/homepage/personal_secure.gif"
                         alt="images not found"/>
                    <p><span data-translate="frontpage_header3_tag1"/></p>
                </div>
            </a>
			<a href="/en-security" class="col-md-4">
            <!-- <a class="col-md-4"> -->
                <div class="security-item">
                    <img src="<?= get_template_directory_uri() ?>/img/homepage/fund_secure.gif" alt="images not found"/>
                    <p><span data-translate="frontpage_header3_tag2"/></p>
                </div>
            </a>
			<a href="/en-security" class="col-md-4">
            <!-- <a class="col-md-4"> -->
                <div class="security-item">
                    <img src="<?= get_template_directory_uri() ?>/img/homepage/system_secure.gif"
                         alt="images not found"/>
                    <p><span data-translate="frontpage_header3_tag3"/></p>
                </div>
            </a>
            <!-- <div class="col-md-12">
                <div class="security-more bold-font">
                    <a><span data-translate="frontpage_header3_tag4"/> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section class="otc-area">
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-7">
                <div class="otc-title">
                    <h3>
                        <span data-translate="frontpage_header4_1"/> 
                    </h3>
					<h3>
						<span data-translate="frontpage_header4_2"/>
					</h3>
                    <p style="margin-bottom:0px">
                        <span data-translate="frontpage_header4_desc_1"/>
                    </p>
                    <p>
                        <span data-translate="frontpage_header4_desc_2"/>
                    </p>
                </div>
                <div id="speak-with-account" class="otc-item">
                    <div class="speak-with-account">
						<span data-translate="frontpage_header4_tag1"/>
						<i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <a href="/en-otc" class="learn-btn">
						<span data-translate="frontpage_header4_tag2"/>
						
						</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="otc-img">
                    <img src="<?= get_template_directory_uri() ?>/img/man.png" class="img-fluid"
                         alt="images not found"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="getStart-area">
    <div class="container custom-container">
        <h3><span data-translate="frontpage_header5"/></h3>
        <div class="getStart-content get-started-content">
            <span>
				<span data-translate="frontpage_Email_Address"/>
			</span>
            <?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started"]') ?>
        </div>
    </div>
</section>

<script type="text/javascript">
    const appLinks = document.querySelectorAll('#stores a');
    const qrImage = document.getElementById('app_qr_image');
    appLinks.forEach(function (appLink) {
        appLink.addEventListener('mouseover', function (event) {
            const value = event.target.dataset.value;

            if (!value) {
                return;
            }

            qrImage.src = _virgocx_theme_url + '/img/qr_codes/' + value + '.png';
        });
    });

    const appImages = document.querySelectorAll('#stores a img');
    appImages.forEach(function (appImage) {
        appImage.addEventListener('mouseover', function (event) {
            const img = event.target;
            img.src = img.src.replace('.png', '_hover.png');
        });
        appImage.addEventListener('mouseleave', function (event) {
            const img = event.target;
            img.src = img.src.replace('_hover.png', '.png');
        });
    });

    document.addEventListener('wpcf7invalid', function (event) {
        alert('Please provide a valid email address');
    });

    const pressImages = document.querySelectorAll('.press-area .press-img a img');
    pressImages.forEach(function (pressImage) {
        pressImage.addEventListener('mouseover', function (event) {
            const img = event.target;
            img.src = img.src.replace('.png', '_hover.png');
        });
        pressImage.addEventListener('mouseleave', function (event) {
            const img = event.target;
            img.src = img.src.replace('_hover.png', '.png');
        });
    });

    const sleep = ms => {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    const changeClass = node => {
        node.classList.replace('hide', 'flipText');
        return sleep(4000).then(v =>
            node.classList.replace('flipText', 'hide')
        );
    }

    //br is a child as well
    const listArray = document.querySelector('#rollingBanner')?.children;
    const forLoop = async () => {
        for (let index = 0; index < listArray.length; index++) {
            const node = listArray[index];
            const classChanged = await changeClass(node);
        }
        await forLoop();
    }
    if (listArray && listArray.length > 1) {
        forLoop();
    }
</script>

<?php
get_footer();
?>
