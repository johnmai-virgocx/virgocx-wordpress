<?php
/**
 * Template Name: Referral OTC page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();

?><style>
    .rmain{
        padding: 5%;
    }
</style>

    <div id="referral-content">
        <div id="page1" class="hero-area-wrapper">
            <div class="container">
                <div class="hero-content" style="text-align: center;">
                    <h2>VirgoCX OTC Referral Program </h2>
                    <p>We offer a one-time $200 CAD reward on the first trade and a reward equal to 0.2% of the notional value of every subsequent trade.</p>
                </div>
            </div>
        </div>

        <!-- rmain area start -->
        <div class="rmain">
            <div class="container">
                <div class="rmain-wrapper">
                    <div class="row">
                        <div class="rmain-right">
                            <div class="rmain-right-one">
                                <div class="rmain-ro-work">
                                    <h3>How it Works</h3>
                                    <div class="popper-trigger" data-placement="bottom" data-toggle="popover" data-translate="hello"
                                         data-content="Trades with a nominal value of $30,000 CAD and over are taken off our retail platform and is traded at the VirgoCX OTC desk. Trades are processed like this to reduce price volatility and slippage at the benefit of our clients.">
                                        <span></span>
                                        What is OTC ?
                                    </div>
                                </div>
                                <div class="rmain-ro-block">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmrob-one text-center">
                                                <div class="rmrob-one-img">
                                                    <img src="<?= get_template_directory_uri() ?>/img/phone.png"
                                                         alt="images not found">
                                                </div>
                                                <div class="rmrob-one-content">
                                                    <p>Contact an Account Manager</p>
                                                    <p>Fill out the contact form below or reach us at <a
                                                            href="tel:+14165831835">+1 (416) 583-1835</a> or <a
                                                            href="mailto:otc@virgocx.ca">otc@virgocx.ca</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmrob-one text-center">
                                                <div class="rmrob-one-img">
                                                    <img src="<?= get_template_directory_uri() ?>/img/handshake.png"
                                                         alt="images not found">
                                                </div>
                                                <div class="rmrob-one-content">
                                                    <p>Make the Introduction</p>
                                                    <p>Our OTC account manager will reply immediately and help your
                                                        referral get set up.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rmrob-one text-center">
                                                <div class="rmrob-one-img">
                                                    <img src="<?= get_template_directory_uri() ?>/img/gift.png"
                                                         alt="images not found">
                                                </div>
                                                <div class="rmrob-one-content">
                                                    <p>Receive Continuous Rewards </p>
                                                    <p>Your referrals trade volume will be directly reflected in the
                                                        payouts that you receive every month. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rmain-ro-form">
                                    <?= do_shortcode( '[contact-form-7 id="76" title="Referral"]' ) ?>
                                </div>

                                <div class="rmain-ro-block">
                                    <p>Please see <a href="https://virgocx.zendesk.com/hc/en-us/articles/360056653811">Terms and Conditions</a>  for more details.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rmain area end -->

        <div class="bottom"></div>
    </div>
    <script type="text/javascript">
        (function($){
            $(document).ready(function() {
                $('[data-toggle="popover"]').popover()
            });
        })(jQuery);
    </script>
<?php
get_footer();