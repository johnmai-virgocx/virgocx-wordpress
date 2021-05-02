<?php
/**
 * Template Name: OTC page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header('otc');
?>
            <section class="lhero-area">
                <div class="container">
                    <div class="lhero-content">
                        <h5 class="ht-tp">
													<img class="question-mark" src="<?= get_template_directory_uri() ?>/img/question-mark.png" alt="images not found" width="20" height="20" />
													<div class="popper-trigger" data-placement="bottom" data-toggle="popover" data-content="Trades with a nominal value of $30,000 CAD and over are taken off our retail platform and is traded at the VirgoCX OTC desk. Trades are processed like this to reduce price volatility and slippage at the benefit of our clients."><span data-translate="OTC_what_is_otc"/></div>
												</h5>
                        <div class="lhero-text">
                            <h1><span data-translate="OTC_title"/> </h1>
                            <p>
                                <span data-translate="OTC_title_desc1"/> <br />
                                <span data-translate="OTC_title_desc2"/>
                            </p>

														<div class="conversion-images d-flex justify-content-around">
															<img src="<?= get_template_directory_uri() ?>/img/otc/gold_btc.png" alt="images not found" />
															<img src="<?L= get_template_directory_uri() ?>/img/otc/gold_eth.png" alt="images not found" />
															<img src="<?= get_template_directory_uri() ?>/img/otc/gold_usdt.png" alt="images not found" />
															<img src="<?= get_template_directory_uri() ?>/img/otc/more-coins.png" alt="images not found" />
															<img id="converter" src="<?= get_template_directory_uri() ?>/img/otc/gold_convert.png" alt="images not found" />
															<div class="fiat-currencies">
																<span><span data-translate="OTC_USD"/></span>
																<span><span data-translate="OTC_CAD"/></span>
																<span><span data-translate="OTC_EUR"/></span>
																<span><span data-translate="OTC_GBP"/></span>
																<span><span data-translate="OTC_AUD"/></span>
																<span><span data-translate="OTC_NZD"/></span>
															</div>
														</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="started-form">
            <div class="container custom-container">
								<?= do_shortcode('[contact-form-7 id="70" title="OTC"]') ?>
            </div>
        </section>
        <section class="who-area">
            <div class="container custom-container">
                <div class="who-text">
                    <h2><span data-translate="OTC_header1"/></h2>
                    <p><span data-translate="OTC_header1_desc"/></p>
                </div>
            </div>
        </section>
        <section class="how-area">
            <div class="container custom-container">
                <div class="who-text">
                    <h2><span data-translate="OTC_header2"/></h2>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-lg-4 col-md-6">
                        <div class="how-content">
                            <div class="how-item">
                                <div class="how-img">
                                    <img src="<?= get_template_directory_uri() ?>/img/otc/how.png" alt="images not found" />
                                </div>
                                <div class="how-text">
                                    <span><span data-translate="OTC_header2_tag1"/></span>
                                    <span><span data-translate="OTC_header2_tag1_desc"/></span>
                                </div>
                            </div>
                            <div class="how-arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/jiantou.svg" alt="images not found" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-content">
                            <div class="how-item">
                                <div class="how-img">
                                    <img src="<?= get_template_directory_uri() ?>/img/otc/how2.png" alt="images not found" />
                                </div>
                                <div class="how-text">
                                    <span>Trade</span>
                                    <span>Our traders are available 24/7 to provide you with an indicative quote to buy or sell cryptocurrencies.</span>
                                </div>
                            </div>
                            <div class="how-arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/jiantou.svg" alt="images not found" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-content">
                            <div class="how-item">
                                <div class="how-img">
                                    <img src="<?= get_template_directory_uri() ?>/img/otc/how3.png" alt="images not found" />
                                </div>
                                <div class="how-text">
                                    <span>Settle</span>
                                    <span>Settlement typically occurs within 1 business day after your trade has been successfully confirmed.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-area">
            <div class="container custom-container">
                <div class="who-text">
                    <h2>Why trade with us?</h2>
                </div>
                <div class="why-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_saving.png" class="img-fluid" alt="images not found" />
                                <h5>Save on Execution Costs</h5>
                                <p>We eliminate slippage on larger trades. Save up to 2% compared to trading on other exchanges.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_zero_trading_fee.png" class="img-fluid" alt="images not found" />
                                <h5>Zero Trading Fees</h5>
                                <p>We don’t charge anything on top. What you see is what you get.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_best_price.png" class="img-fluid" alt="images not found" />
                                <h5>Best Pricing in Canada</h5>
                                <p>Our liquidity pools allow us to provide one of the best prices in Canada for trading BTC, ETH, USDT, and more.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_fx.png" class="img-fluid" alt="images not found" />
                                <h5>Access to Foreign Currencies</h5>
                                <p>We have unique market access via digital assets, to provide a competitive pricing for other foreign currencies.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_personalized_services.png" class="img-fluid" alt="images not found" />
                                <h5>Personalized Services</h5>
                                <p>Our OTC account managers are available 24/7 to facilitate every request for your business or trading needs. You will also have access to industry insights on the cryptocurrency markets.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="why-item">
                                <img src="<?= get_template_directory_uri() ?>/img/otc/otc_rapid_settlement.png" class="img-fluid" alt="images not found" />
                                <h5>Rapid Settlement</h5>
                                <p>We provide a same day, no limit settlement for your USD and CAD trades. This also applies to your Bitcoin, Ethereum, USDT, and any other cryptocurrency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<style type="text/css">

#otc-body .header-wrapper {
    background-image: url(/wp-content/themes/virgocx/img/otc/hero-bg.png);
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    position: relative;
    z-index: 99999;
    opacity: 0.96;
}
#otc-body .header-wrapper:before{
    content: '';
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
}

#otc-body .header-area {
    padding: 18px 0px;
		background: inherit;
    border-bottom: 1px solid #696f76;
}

#otc-body .navbar-nav li a {
    position: relative;
    display: block;
    font-size: 15px;
    font-weight: 500;
    padding: 0px;
    margin: 0px 15px;
    color: #ffffff;
    text-align: center;
    border-bottom: 1px solid transparent;
    transition: 0.3s all ease;
    -webkit-transition: 0.3s all ease;
    -moz-transition: 0.3s all ease;
}

#otc-body .right_side_btn {
    display: flex;
    align-items: center;
}
#otc-body .right_side_btn a {
    display: block;
    text-decoration: none;
    margin-left: 15px;
    padding: 7px 10px;
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    width: 116px;
    text-align: center;
    border-radius: 50px;
    background: linear-gradient(121deg, rgba(248, 214, 143, 1) 0%, rgba(140, 117, 75, 1) 98%);
    transition: 0.3s all ease;
    -webkit-transition: 0.3s all ease;
    -moz-transition: 0.3s all ease;
		border: inherit;
}
#otc-body .right_side_btn .singup {
    border: none;
    background: none;
    padding: 6px 10px;
    border: 1px solid rgba(248, 214, 143, 0.81);
    color: #fff;
    margin-left: 20px;
    transition: 0.3s all ease;
}

#otc-body .right_side_btn .login:hover {
    background: linear-gradient(295deg, rgba(248, 214, 143, 1) 0%, rgba(140, 117, 75, 1) 98%);

    transition: 0.3s all ease;
    -webkit-transition: 0.3s all ease;
    -moz-transition: 0.3s all ease;
}

#otc-body .header_select {
    position: relative;
    display: flex;
    align-items: center;
    padding-left: 16px;
    margin-left: 20px;
    line-height: 3;
    background: transparent;
    overflow: hidden;
}
#otc-body .header_select option {
    background: rgb(248, 214, 143);
    background: linear-gradient(295deg, rgba(248, 214, 143, 1) 0%, rgba(140, 117, 75, 1) 98%);
    color: #333;
}
#otc-body .header_select::after {
    content: "\203A";
    position: absolute;
    font-size: 20px;
    font-weight: 600;
    top: 0;
    right: 0;
    transform: rotate(90deg);
    padding: 0px;
    margin-top: -7px;
    background: transparent;
    color: #fff;
    cursor: pointer;
    pointer-events: none;
    transition: 0.25s all ease;
}
#otc-body .header_select::before {
    content: "";
    position: absolute;
    top: 7px;
    left: 0px;
    padding: 0px 6px;
    width: 20px;
    height: 27px;
    background-image: url(/wp-content/themes/virgocx/img/otc/lang.svg);
    background-size: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    color: #fff;
    cursor: pointer;
    pointer-events: none;
    transition: 0.25s all ease;
}
.lhero-area {
    padding: 20px 0px;
    position: relative;
    z-index: 888888;
}

.ht-tp {
    text-align: right;
    font-size: 16px;
    display: flex;
    justify-content: flex-end;
    color: #fff;
}

.ht-tp a {
    color: #fff;
}

.ht-tp span {
    width: 18px;
    height: 18px;
    background: #fff;
    border-radius: 50px;
    margin-right: 10px;
    display: block;
}

.lhero-text {
    padding: 120px 0px 200px;
    text-align: center;
    max-width: 680px;
    margin: 0px auto;
    color: #fff;
}
.lhero-text h1 {
    font-size: 70px;
    color: #ffffff;
    font-weight: 600;
		font-family: AvenirNextRegular;
}
.lhero-text p {
    font-size: 28px;
    color: #ffffff;
}

.lhero-text .conversion-images {
	align-items: center;
	width: 100%;
	margin: 0 auto;
}

.lhero-text img {
	width: 55px;
	height: 55px;
    margin: 8px auto;
}

.lhero-text img#converter {
	width: 40px;
	height: 40px;
    margin: 8px auto;
}

.lhero-text .conversion-images .fiat-currencies {
	background-color: black;
	opacity: 0.8;
	padding: 0.8rem;
	border-radius: 1.5rem;
}

.lhero-text .conversion-images .fiat-currencies span {
	font-size: 1.2rem;
	color: #e3bd94;
	font-weight: bolder;
	margin: 0 0.3rem;
}

.started-form {
    background: #232323;
}
.started-form form {
    position: relative;
    top: -65px;
    padding: 40px;
    padding-top: 55px;
    background: #232323;
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
    text-align: center;
    color: #fff;
    z-index: 999999999;
    box-shadow: 0px 16px 20px -14px rgba(0, 0, 0, 0.4);
}

.started-form form .input-box2,
.started-form form .input-box {
    display: flex;
    align-items: baseline;
}
.started-form form .input-box img {
    width: 18px;
    margin-right: 10px;
}
.started-form form .input-box2 img {
    width: 20px;
    position: relative;
    top: 4px;
    margin-right: 10px;
}
.started-form form span {
	width: 100%;
}
.started-form form input {
    width: 100%;
    background: transparent;
    padding: 10px 0px 6px;
    padding-right: 10px;
    color: #ffffff;
    margin-bottom: 12px;
    font-size: 15px;
    border: none;
    border-bottom: 1px solid #696969;
}

.started-form .sf-contact {
    max-width: 500px;
    margin: 0px auto;
    display: flex;
    justify-content: center;
}
.started-form form button {
    border: none;
    outline: none;
    color: #fff;
    background: linear-gradient(142deg, rgba(199, 170, 112, 1) 0%, rgba(140, 117, 75, 1) 98%);
    border-radius: 50px;
    width: 200px;
    display: block;
    margin: 36px auto 10px;
    text-align: center;
    padding: 10px;
}

.started-form .sf-contact a {
    display: block;
    text-align: center;
    padding: 0px 10px;
    margin: 10px auto;
    color: #ffffff;
}
.started-form .sf-contact span {
    color: #e3bd94;
}

.why-area,
.how-area,
.who-area {
    padding: 40px 0px 60px;
    color: #fff;
    background: #232323;
}

.why-text h2,
.how-text h2,
.who-text h2 {
    color: #e3bd94;
    font-weight: 600;
    font-size: 36px;
    margin-bottom: 26px;
}
.who-text p {
    margin: 0px;
    color: #fff;
    line-height: 28px;
}
.how-item {
    position: relative;
    width: 300px;
    border-radius: 14px;
    overflow: hidden;
    height: 310px;
}

.how-img {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 7777;
}
.how-img:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 8888;
}
.how-img img {
    position: relative;
    width: 100%;
    height: 100%;
}

.how-text {
    position: absolute;
    left: 0px;
    bottom: 0px;
    width: 100%;
    padding: 16px;
    z-index: 999999;
}
.how-content {
    margin-top: 16px;
    display: flex;
    align-items: center;
}
.how-arrow {
    width: 30px;
    margin-left: 36px;
}
.how-text span {
    display: block;
    margin-bottom: 8px;
}

.why-item {
    text-align: center;
    padding: 16px;
    margin: 10px 0px;
		min-height: 310px;
}
.why-item h5 {
    font-size: 20px;
    margin: 14px 0px;
}
.why-item p {
    margin: 0px;
}

.why-content {
    box-shadow: 0px 22px 16px -12px rgba(0, 0, 0, 0.4);
    background: #363636;
    border-radius: 20px;
    padding: 20px;
    margin-top: 40px;
}

.why-area {
    background: #232323;
    background-image: linear-gradient(142deg, rgba(199, 170, 112, 1) 0%, rgba(140, 117, 75, 1) 98%);
    background-size: 100% 55%;
    background-repeat: no-repeat;
    background-position: bottom;
    padding-bottom: 120px;
}

#otc-body .footer-area {
	background-color: #363636;
}

#otc-body .hamburger-inner,
#otc-body .hamburger-inner::before,
#otc-body .hamburger-inner::after {
    background-color: #e3bd94;
}

#otc-body .why-item img {
	width: 102px;
}

img.question-mark {
	width: 20px;
	height: 20px;
	margin-right: 0.8rem;
}
</style>

<script type="text/javascript">
(function($){
	$(document).ready(function() {
		$('[data-toggle="popover"]').popover()
	});
})(jQuery);
</script>

<?php
get_footer('otc');
