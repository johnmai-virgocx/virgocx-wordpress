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
                    <h2 data-translate="ReferOTC_title"></h2>
                    <p data-translate="ReferOTC_title_desc"></p>
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
                                    <h3 data-translate="ReferOTC_header1"></h3>
                                    <div class="popper-trigger" data-placement="bottom" data-toggle="popover" data-translate="ReferOTC_What_is_OTC_desc"
                                         data-content="Trades with a nominal value of $30,000 CAD and over are taken off our retail platform and is traded at the VirgoCX OTC desk. Trades are processed like this to reduce price volatility and slippage at the benefit of our clients.">
                                        <span></span>
										<div data-translate="ReferOTC_What_is_OTC" style="width: 6.25rem; display: inline;"></div>
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
                                                    <p data-translate="ReferOTC_header1_tag1"></p>
                                                    <p>
														<span data-translate="ReferOTC_header1_tag1_desc_1"></span>
													<a href="tel:+14165831835">
														+1 (416) 583-1835
													</a>
													 <span data-translate="ReferOTC_header1_tag1_desc_2"></span>
													 <a href="mailto:otc@virgocx.ca">otc@virgocx.ca</a>
													 <span data-translate="ReferOTC_header1_tag1_desc_3"></span>
													 </p>
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
                                                    <p data-translate="ReferOTC_header1_tag2"></p>
                                                    <p data-translate="ReferOTC_header1_tag2_desc"></p>
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
                                                    <p data-translate="ReferOTC_header1_tag3"></p>
                                                    <p data-translate="ReferOTC_header1_tag3_desc"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rmain-ro-form">
                                    <?= do_shortcode( '[contact-form-7 id="76" title="Referral"]' ) ?>
                                </div>

                                <div class="rmain-ro-block">
                                    <p>
										<span data-translate="ReferOTC_More_Detail_1"></span>
										<a href="https://virgocx.zendesk.com/hc/en-us/articles/360056653811" data-translate="ReferOTC_More_Detail_2">
										</a>
										<span data-translate="ReferOTC_More_Detail_3"></span></p>
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