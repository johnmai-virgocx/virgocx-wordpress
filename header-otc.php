<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virgocx
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5BQZZQZ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Meta setup -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="decription" content=""/>

    <!-- Smart banner -->
    <meta name="smartbanner:title" content="VirgoCX">
    <meta name="smartbanner:author" content="VirgCX">
    <meta name="smartbanner:price" content="FREE">
    <meta name="smartbanner:price-suffix-apple" content=" - On the App Store">
    <meta name="smartbanner:price-suffix-google" content=" - In Google Play">
    <meta name="smartbanner:icon-apple"
          content="https://is4-ssl.mzstatic.com/image/thumb/Purple123/v4/17/96/c5/1796c5bb-fd24-d656-81e9-1819879a6053/AppIcon-0-1x_U007emarketing-0-0-GLES2_U002c0-512MB-sRGB-0-0-0-85-220-0-0-0-6.png/230x0w.jpg">
    <meta name="smartbanner:icon-google"
          content="http://lh3.ggpht.com/f4oX61ljZ6x8aYDELZOgxlvdUEu73-wSQ4fy5bx6fCRISnZP8T353wdaM43RO_DbGg=w300">
    <meta name="smartbanner:button" content="View">
    <meta name="smartbanner:button-url-apple"
          content="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048">
    <meta name="smartbanner:button-url-google"
          content="https://play.google.com/store/apps/details?id=ca.virgocx.exchange">
    <meta name="smartbanner:enabled-platforms" content="android,ios">
    <meta name="smartbanner:close-label" content="Close this banner">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="img/fav.png"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147248930-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-147248930-1');
    </script>
    <?php wp_head(); ?>
    <script type="text/javascript">
        const _virgocx_theme_url = '<?= get_template_directory_uri() ?>';
    </script>

    <?= get_theme_mod('virgocx_html_head_content') ?>
</head>

<body id="otc-body" <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BQZZQZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php wp_body_open(); ?>
<div id="page" class="site">
    <!--
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'virgocx'); ?></a>
-->
    <!-- header-area start -->
    <div class="header-wrapper">
        <header class="header-area-otc">
            <div class="container custom-container">
                <nav class="navbar navbar-expand-lg">
                  <?php if(strpos($_SERVER['REQUEST_URI'],'nft') !== false): ?>
                      <a href="/en-otc/" class="navbar-brand"><img
                                  src="<?= get_template_directory_uri() ?>/img/otc/VirgoNFT_logo.svg" height="36"
                                  alt="images not found"/></a>
                  <?php else : ?>
                      <a href="/en-otc/" class="navbar-brand"><img
                                  src="<?= get_template_directory_uri() ?>/img/otc/VirgoOTC_logo_full.svg" height="36"
                                  alt="images not found"/></a>
                  <?php endif; ?>

                    <button
                            class="hamburger hamburger--squeeze navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
											<span class="hamburger-box">
													<span class="hamburger-inner"></span>
											</span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="menu">
                            <li>
                                <a class="item" href="/" data-translate="OTC_home">

                                </a>
                            </li>
                            <li class="dropdown-toggle-otc">
                                <a class="item" href="/en-otc/" >
                                    <span data-translate="OTC"></span>
                                    <img class="arrow-down ml-1"
                                         src="<?= get_template_directory_uri() ?>/img/Arrow Down.svg"
                                         alt="images not found">
                                </a>
                                <div class="dropdown-menu dropdown-otc" aria-labelledby="dropdownMenuLink">
                                    <a href="/en-otc-direct/" class="dropdown-item"
                                        data-translate="OTC_landing_banner2_tag1"></a>
                                    <a href="/en-otc-chatbroker/" class="dropdown-item"
                                        data-translate="OTC_landing_banner2_tag2"></a>
                                </div>
                            </li>
                            <li>
                                <a class="item" id="nft" href="/en-otc-nft-brokerage/" data-translate="NFT_header"></a>
                            </li>
                            <li>
                                <a class="item" href="https://learn.virgocx.ca/" data-translate="header_Learn"></a>
                            </li>
                            
                            <li>
                                <a class="item" href="https://virgocx.zendesk.com/hc/en-us"data-translate="header_Support"></a>
                            </li>
                        </ul>

                        <div class="navbar-nav-otc dropdown-toggle-otc nav-item earn-btn-container">
                            <a class="nav-link earn-btn dropdown-toggle" href="/en-referral" role="button"
                               id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               data-translate="Earn $30+">

                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="/en-referral-friend" class="dropdown-item"
                                   data-translate="Refer a Friend"></a>
                                <a href="/en-referral-otc" class="dropdown-item" data-translate="OTC Referral "></a>
                            </div>
                        </div>

                        <div class="right-side-btn-otc">
                            <div class="navbar-nav-otc nav-item">
                                <img class="dropdown-left-img" src="<?= get_template_directory_uri() ?>/img/cad.svg"
                                     alt="images not found"/>
                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   id="dropdownMenuLinkEN"
                                   data-translate="OTC_header_full">
                                    English
                                </a>
                                <img class="arrow-down" src="<?= get_template_directory_uri() ?>/img/Arrow Down.svg"
                                     alt="images not found"/>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkEN" id="lang">
                                    <a value="en" id="en" class="dropdown-item lang-dropdown"
                                            data-translate="OTC_header_ENG"></>
                                    <a value="zh" id="zh" class="dropdown-item lang-dropdown"
                                            data-translate="OTC_header_CH"></a>
                                </div>
                            </div>
                            <div class="navbar-nav-otc nav-item">
                                <img class="dropdown-left-img"
                                     src="<?= get_template_directory_uri() ?>/img/Sign Up Today/First Name Icon.png"
                                     alt="images not found"/>
                                <a class="nav-link dropdown-toggle"
                                   id="dropdownMenuLink"
                                   href="#">
                                    <span data-translate="my_account">My Account</span>

                                </a>
                                <img class="arrow-down" src="<?= get_template_directory_uri() ?>/img/Arrow Down.svg"
                                     alt="images not found"/>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a href="/page#/login" class="dropdown-item"
                                            data-translate="Log In">login
                                    </a>
                                    <a class="dropdown-item"  href="../en-otc-nft-brokerage/?#contact-form"
                                            data-translate="Register">Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
