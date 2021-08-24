<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

<style type="text/css">
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
	
	
</style>

	<div id="buy-coin">
		<div class="buy-coin-header">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5 col-md-12">
						<div class="row">
							<?php if(strlen($args['name']) > 12 ) : ?>
								<h1><span data-translate="Sell_header1_1"></span><br /><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header1_2"></span></h1>
							<?php else : ?>
								<h1><span data-translate="Sell_header1_1"></span><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header1_2"></span></h1>
							<?php endif; ?>
							<p class="tag-line" data-translate="Sell_header1_desc"></p>

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
						<h2 data-translate="Sell_header2"></h2>
						<p>
							<span data-translate="Sell_header2_desc1"></span>
						<a href="https://virgocx.ca/page#/register" data-translate="Sell_header2_desc2"></a> 
						<span data-translate="Sell_header2_desc3"></span></p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/app_display.png" alt="images not found" width="100%"/>
					</div>

					<div class="col-lg-5 col-md-12">
						<?php get_template_part('template-parts/app', 'qr'); ?>
					</div>
				</div>

				<div id="step-2" class="row">
					<div class="col-lg-5 col-md-12">
						<div class="step-header">
							<h2 data-translate="Sell_header3"></h2>
							<p data-translate="Sell_header3_desc"></p>
						</div>
						<div class="step-header">
						  <?php if(strlen($args['name']) > 12 || $args['name']=="Basic Attention Token") : ?>
							<h2><span data-translate="Sell_header4_1"></span><br /><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header4_2"></h2>
						  <?php else : ?>	
							<h2><span data-translate="Sell_header4_1"></span><span data-translate="<?= $args['name'] ?>"></span><span data-translate="Sell_header4_2"></h2>
						  <?php endif; ?>
							<p><span data-translate="Sell_header4_desc1"></span><span data-translate="<?= $args['ticker'] ?>"></span> <span data-translate="Sell_header4_desc2"> </p>
						</div>
					</div>
					<div class="col-lg-7 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_coin_step.png" alt="images not found" width="100%"/>
					</div>
				</div><!-- end of row -->

				<div class="row">
					<div class="col-lg-12">
						<h2 data-translate="Sell_header5">Why VirgoCX?</h2>
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
								<h3 data-translate="Sell_header5_tag1"></h3>
								<p data-translate="Sell_header5_tag1_desc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/safe_and_secure.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag2"></h3>
								<p data-translate="Sell_header5_tag2_desc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/low_fees.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag3"></h3>
								<p data-translate="Sell_header5_tag3_desc"></p>
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
								<h3 data-translate="Sell_header5_tag4"></h3>
								<p data-translate="Sell_header5_tag4_desc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/easy_and_convenient.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag5"></h3>
								<p data-translate="Sell_header5_tag5_desc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/247_support.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag6"></h3>
								<p data-translate="Sell_header5_tag6_desc"></p>
							</div>
						</div>
					</div>
				</div><!-- end of row -->
			</div>
		</div><!-- core values -->

		<section class="getStart-area">
			<div class="container custom-container">
				<h3 data-translate="Sell_header6"></h3>
				<div class="getStart-content get-started-content">
										<span data-translate="Sell_email"></span>
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
