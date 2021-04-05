<?php
/**
 * Template Name: App Download Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

	<div id="app-download">
		<div class="fx-header">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-4 col-md-12">
						<div class="row mb-4">
							<h2>Mobile App</h2>
							<p class="">Trade cryptocurrency anytime from anywhere in the world. Get all of the powerful trading tools, funding options and live price streaming in the palm of your hand.</p>
						</div>

						<div class="row">
                        <div class="fingertips-item">
                            <h5>Download the VirgoCX Mobile App</h5>
														<div class="d-flex">
															<div id="stores" class="app-store">
																	<a href="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048"><img class="app_store_download" data-value="app_store" src="<?= get_template_directory_uri() ?>/img/app_buttons/app_store.png" alt="images not found" /></a>
																	<a href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange"><img class="play_store_download" data-value="play_store" src="<?= get_template_directory_uri() ?>/img/app_buttons/play_store.png" alt="images not found" /></a>
																	<a href="https://virgocx.oss-us-west-1.aliyuncs.com//prod/2020/10/31/2dd4caebf9c547058e418a600ff48b95.apk"><img class="android_download" data-value="android" src="<?= get_template_directory_uri() ?>/img/app_buttons/android.png" alt="images not found" /></a>
															</div>

															<img id="app_qr_image" src="<?= get_template_directory_uri() ?>/img/qr_codes/app_store.png" alt="images not found" /></a>
														</div>
                        </div>
						</div>
					</div>

					<div class="col-lg-7 col-md-12 d-flex justify-content-center align-items-center">
						<img src="<?= get_template_directory_uri() ?>/img/app_download.png" alt="flags" width="100%"/>
					</div>
				</div>
			</div>
		</div>



            <div class="container custom-container middle-row">
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item fibg-1">
                            <h5>Trade Cryptocurrencies Instantly</h5>
														<p> The process of buying and selling Bitcoin (BTC), Tether (USDT), Ethereum (ETH), Litecoin (LTC), and more becomes fast and easy. Our users can access the Quick Trade functionality to buy and sell on a whim.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item fibg-2">
                            <h5>Open a Trading Account</h5>
                            <p>Our user-friendly interface and automatic verification process allows you to open an account in minutes.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item fibg-1">
														<h5>Commission Free, Real-time Trading</h5>
                            <p>Enjoy trading on your mobile with zero trading fees, high liquidity, and free deposits.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item fibg-2">
                            <h5>State-of-the-art Security</h5>
                            <p>We store all fiat funds with trusted financial institutions. For digital assets, VirgoCX stores 90% of the assets in multi-signature cold wallet technology by Ledger Vault. Your funds are safe.</p>
                        </div>
                    </div>
                </div>
						</div>


<style type="text/css">

#app-download .feature-item {
	cursor: inherit;
}

#app-download .feature-item h5{
	margin: 1rem 0 2rem 0;
	cursor: inherit;
	min-height: 38px;
}

#app-download .middle-row {
	margin: 100px auto;
}

@media screen and (max-width: 992px) {
	#app-download .fx-header {
		padding-left: 15px;
		padding-right: 15px;
	}
}
</style>

<script type="text/javascript">
	const appLinks = document.querySelectorAll('#stores a');
	const qrImage = document.getElementById('app_qr_image');
	appLinks.forEach(function(appLink) {
		appLink.addEventListener('mouseover', function(event) {
			const value = event.target.dataset.value;
			if (!value) {
				return;
			}

			qrImage.src = _virgocx_theme_url + '/img/qr_codes/' + value + '.png';
		});
	});

	const appImages = document.querySelectorAll('#stores a img');
	appImages.forEach(function(appImage) {
		appImage.addEventListener('mouseover', function(event) {
			const img = event.target;
			img.src = img.src.replace('.png', '_hover.png');
		});
		appImage.addEventListener('mouseleave', function(event) {
			const img = event.target;
			img.src = img.src.replace('_hover.png', '.png');
		});
	});
</script>

	</div>

<?php
get_footer();
