<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virgocx
 */

?>

<!-- footer-area start -->
<footer class="footer-area-otc">
    <div class="container custom-container">
        <div class="footer-tp">
            <div class="row">
                <div class="col-lg-2 col-sm-4">
                    <div class="fp-menu">
                        <h5 data-translate="OTC_footer_col1"></h5>
                        <ul>
                            <li>
                                <a href="/en-otc" data-translate="OTC_landing_banner2_tag1"></a>
                            </li>
                            <li>
                                <a href="/en-otc-chatbroker" data-translate="OTC_chat_broker_title"></a>
                            </li>
                            <li>
                                <a href="/en-otc-nft-brokerage">NFT</a>
                            </li>
                            <li>
                                <a href="/en-currency-exchange-toronto" data-translate="Foreign Exchange"></a>
                            </li>
                            <li>
                                <a href="https://learn.virgocx.ca/" data-translate="header_Learn"></a>
                            </li>
                            <li>
                                <a href="/en-about-virgocx" data-translate="header_About"></a>
                            </li>
                            <li>
                                <a href="/en-contact" data-translate="Contact"></a>
                            </li>
                            <li>
                                <a href="https://virgocx.zendesk.com/hc/en-us" data-translate="header_Support"></a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="fp-menu">
                        <h5 data-translate="footer_col2"></h5>
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'menu-2',
                                'theme_location' => 'menu-2',
                                'menu_id' => 'menu-2',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="fp-menu">
                        <h5 data-translate="OTC_footer_col3"></h5>
                        <ul>
                            <li>
                                <a href="/" data-translate="OTC_home"></a>
                            </li>
                            <li>
                                <a href="/page#/login" data-translate="Log In"></a>
                            </li>
                            <li>
                                <a  href="/page#/register" data-translate="Register"></a>
                            </li>
                            <li>
                                <a href="/tpage/en/bitcoin/price/" data-translate="Prices"></a>
                            </li>
                            <li>
                                <a href="https://status.virgocx.ca/" data-translate="Status"></a>
                            </li>
                            <li>
                                <a href="/en-security" data-translate="footer_col4_Security"></a>
                            </li>
                            <li>
                                <a href="/en-app-download" data-translate="Mobile App"></a>
                            </li>
                            <li>
                                <a href="/en-fees" data-translate="Fees & Funding"></a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="fp-menu">
                        <h5 data-translate="footer_col5"></h5>
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'footer-5',
                                'theme_location' => 'footer-5',
                                'menu_id' => 'footer-menu-5',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="fp-menu">
                        <h5 data-translate="footer_col6"></h5>
                        <ul id="social-links">
                            <li>
                                <a href="https://twitter.com/Virgocx"><img
                                            src="<?= get_template_directory_uri() ?>/img/twitter.png"
                                            alt="images not found"/> <span data-translate="footer_col6_Twitter"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bt">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="newsletter" id="otc-contact-form">
                        <span data-translate="footer_Stay_in_Touch"></span>
                        <?= do_shortcode('[contact-form-7 id="134" title="Footer newletter otc"]') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
							<span> <span data-translate="footer_Brand_Otc"></span>
							&nbsp; &nbsp;<img src="<?= get_template_directory_uri() ?>/img/canada2x.png"
                                              alt="canada flag" width="20"/> <span
                                        data-translate="footer_Make_In_Canada"></span></span>
        </div>
    </div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<style type="text/css">
    .footer-area-otc h5{
        font-family: "Matter-Bold"!important;
    }
    .footer-area-otc a,
    .footer-area-otc p,
    .footer-area-otc a>span,
    .footer-area-otc span{
        font-family: "Matter-Regular"!important;
    }
    #otc-body .app-download a:hover {
        background-color: #B59964 !important;
        border: 1px solid #B59964 !important;
        color: #fff;
    }

    .app-download a:hover .ios {
        color: #B59964;
        background-color: white;
        background-image: url(/wp-content/themes/virgocx/img/footer/ios_gold.svg);
    }

    .app-download .ios {
        color: white;
        background-image: url(/wp-content/themes/virgocx/img/footer/IOS_white.png) !important;
    }

    .app-download a:hover.play {
        background-image: url(/wp-content/themes/virgocx/img/footer/play_white.png);
    }

    .app-download a:hover.android {
        background-image: url(/wp-content/themes/virgocx/img/footer/android_white.png);
    }

    #otc-body .newsletter .wpcf7-form input {
        color: #B59964;
        font-family: "Matter-Regular";
        
    }
    .email-input{
        height:55px;
        font-size:16px !important;
        line-height:22px !important;
    }

    ul li::before {
        content: none;
    }

    
    .subcheck-txt{
	    color:#FFFFFF !important;
        margin-left:20px;
        /* white-space:break-word; */
    }
    .subCheckBox input[type='checkbox']{
        width:18px !important;
        height:18px !important;
        left:0;
        /* background-color:#05004d; */
        padding: 0 !important;
        border:none !important;
        border-radius:0 !important;
    }

    /*@media screen and (max-width: 576px) {*/

    /*    #social-links {*/
    /*        display: flex;*/
    /*        flex-direction: row;*/
    /*    }*/
    /*}*/

    .terms {
        height: 70px;
    }

    .terms-text {
        position: absolute;
        top: 0;
        left: 40px;
    }

    .terms-text:hover {
        border-bottom: 1px solid white;
    }

    label {
        width: 100%;
    }

    .signup-otc-checkbox{
        position: absolute;
        width: 90vw;
        left: 3%;
    }
    #checkbox {
        position: absolute;
        top: 0px;
        left: 0px;

    }
    .subCheckBox{
        display:flex;
        flex-direction:row;
        width:100%;
        cursor:pointer;
    }
    .subCheckBox span{
        width:18px !important;
        margin-left:0 !important;
    }
    .otc-footer-btn{
            width: 138px !important;
            height: 38px !important;
            border: 2px solid #C7BA9A !important;
            border-radius: 25px;
            background-color:#05004D !important;
            padding:0 !important;
            vertical-align:middle;
            /* right:160px !important; */
            left:0 !important;
            color:#C7BA9A !important;
            font-size: 14px;
            line-height: 17px;

    }
    
    @media screen and (min-width: 900px) {
        label {
            white-space: nowrap;
        }
        .footer-bt #otc-contact-form{
        margin-left:600px !important;
        margin-top:-150px;  
        }
        .subCheckBox{
            margin-left:-15px;
        }
        
        
    }

    @media screen and (max-width: 576px) {

        #social-links {
            width: 150px;
            /* display: flex; */
            flex-direction: row;
            margin: 0 0 0 39%;
        }

        #social-links li a{
            text-align: left!important;
        }
        .otc-footer-btn{
            margin:auto;
            position: static !important;
        }
        .copyright{
        text-align:center;
    }
        
    }
</style>
<script>
</script>
</body>
</html>
