<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

	<div id="buy-coin">
		<div class="buy-coin-header">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5 col-md-12">
						<div class="row">
							<h1>How to Sell <?= $args['name'] ?><br /> in Canada</h1>
							<p class="tag-line">VirgoCX is making cryptocurrencies available to Canadians everywhere.</p>

							<div class="hero-signup get-started-content">
								<?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started" html_class="hero-signup"]') ?>
							</div>
						</div>
					</div>

					<div class="col-lg-5 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/coins/<?= $args['ticker'] ?>.png" alt="flags" width="100%"/>
					</div>
				</div>
			</div>
		</div>

		<div id="buy-steps">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h2>1. Register an Account </h2>
						<p>Sign up via our Website or our Mobile App. You can scan the QR code or <a href="https://virgocx.ca/page#/register">click here</a> to get started.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-7 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/app_display.png" alt="images not found" width="100%"/>
					</div>

					<div class="col-lg-4 col-md-12">
						<?php get_template_part('template-parts/app', 'qr'); ?>
					</div>
				</div>

				<div id="step-2" class="row">
					<div class="col-lg-5 col-md-12">
						<div class="step-header">
							<h2>2. Get Verified</h2>
							<p>Provide some basic information and get verified quickly.</p>
						</div>
						<div class="step-header">
							<h2>3. Sell Your <?= $args['name'] ?> Right Away</h2>
							<p>Sell your <?= $args['ticker'] ?> immediately through the VirgoCX trading platform by setting a limit order or a market order. Withdraw via INTERAC e-transfer and receive your money in minutes.</p>
						</div>
					</div>
					<div class="col-lg-7 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_coin_step.png" alt="images not found" width="100%"/>
					</div>
				</div><!-- end of row -->

				<div class="row">
					<div class="col-lg-12">
						<h2>Why VirgoCX?</h2>
					</div>
				</div>

			</div>
		</div>

		<div id="core-values" class="container-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/compliant_and_regulated.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>Compliant and Regulated</h3>
								<p>VirgoCX is a registered MSB under FINTRAC. VirgoCX engages trusted third parties to conduct routine audits.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/safe_and_secure.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>Safe and Secure</h3>
								<p>Your information is secured on our servers and your crypto assets are protected by Ledger Vault technology and our comprehensive cybersecurity program.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/low_fees.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>Low Fees</h3>
								<p>ZERO trading fee and deposit fee.</p>
							</div>
						</div>
					</div>
				</div><!-- end of row -->

				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/best_price.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>Best Pricing in Canada</h3>
								<p>The best buy & sell price supported by superior liquidity.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/easy_and_convenient.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>Easy and Convenient</h3>
								<p>Fund your account with INTERAC e-Transfer & Wire Transfer.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/247_support.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3>24/7 Customer Support </h3>
								<p>Live chat with our support team for quick answers.</p>
							</div>
						</div>
					</div>
				</div><!-- end of row -->
			</div>
		</div><!-- core values -->

		<section class="getStart-area">
			<div class="container custom-container">
				<h3>Buy and Sell Cryptocurrency Today</h3>
				<div class="getStart-content get-started-content">
										<span>Email Address</span>
										<?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started"]') ?>
				</div>
			</div>
		</section>

<style type="text/css">
#buy-coin .buy-coin-header {
	padding-top: 8rem;
	padding-bottom: 8rem;
	margin-bottom: 3rem;
	background-color: #f8f7fe;
	font-size: 1.4rem;
}
#buy-coin .buy-coin-header h2 {
	margin-bottom: 3rem;
	font-size: 2.5rem;
}

#buy-coin .buy-coin-header .get-start {
	margin-top: 2rem;
}

#buy-steps h2 {
	font-size: 1.9rem;
}

#buy-steps .row {
	margin-bottom: 2.5rem;
}

#buy-steps #step-2 {
	margin-top: 5rem;
}

#buy-steps .row .step-header {
	margin-bottom: 5rem;
}

#core-values {
	background-color: #E2FAF7;
}

#core-values-big-pic {
	width: 100%;
}

#core-values-right img {
	width: 40px;
}

.item-explain {
	text-align: center;
	min-height: 230px;
}
.item-explain h3 {
	font-size: 1.2rem;
}
.hero-signup {
	margin-top: 1.5rem;
}
.get-started-content .wpcf7-not-valid-tip {
	display: none;
}
.get-started-content .wpcf7-response-output {
	display: none !important;
}
.get-started-content .hero-signup p {
	display: flex;
}
</style>

<script type="text/javascript">
document.addEventListener( 'wpcf7invalid', function( event ) {
	alert('Please provide a valid email address');
});
</script>

	</div>

<?php
get_footer();
