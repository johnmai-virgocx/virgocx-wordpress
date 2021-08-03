<?php
/**
 * Template Name: Referral page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();

// Page text
$limitPage = get_page_by_title('Referral limit');
$referralTC = get_page_by_title('Referral T&C');
?>

<style type="text/css">
@media screen and (max-width: 992px) {
	.hero-area-wrapper {
		background-image: none;
		background-color: #f2f2f7;
		padding: 0;
	}
	.hero-area-wrapper .hero-content {
		padding-top: 50px !important;
		padding-bottom: 50px !important;
	}
}

/*
====================================
Small Screen - Tablate
====================================
*/
@media screen and (min-width: 768px) and (max-width: 991px) {
}

@media screen and (max-width: 768px) {
}

/*
====================================
Xtra Small Screen - Small Mobile
====================================
*/

@media screen and (max-width: 576px) {
}
</style>

<div id="referral-content">
	<div id="page1" class="hero-area-wrapper">
		<div class="container">
					<div class="hero-content">
						<h2>VirgoCX Referral Program</h2>
						<p>Receive $200+ CAD for each OTC referral and $10 CAD per trading platform referral. </p>
					</div>
		</div>
	</div>

		<!-- rmain area start -->
		<div class="rmain">
			<div class="container">
				<div class="rmain-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li class="active"><a href="#" data-scroll="page1">Rewards for OTC</a></li>
									<li><a href="#" data-scroll="page2">Rewards for Trading <br> Platform</a></li>
									<li><a href="#" data-scroll="page3">How can I keep track of my <br> referrals?</a></li>
									<li><a href="#" data-scroll="page4">Is there a limit on how <br> many people I can refer?</a></li>
									<li><a href="#" data-scroll="page5">Terms and Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="rmain-right">
								<div class="rmain-right-one">
									<div class="rmain-ro-heading">
										<h2 class="mb-4">Rewards for OTC</h2>
										<p>VirgoCX offer a lucrative referral program for anyone that is able to introduce individual or corporate clients to our desk. We offer a one-time $200 CAD reward on the first trade in addition to 0.2% of the notional value of every subsequent trade. </p>
									</div>
									<div class="rmain-ro-work">
										<h3>How It Works</h3>
										<div class="popper-trigger" data-placement="bottom" data-toggle="popover" data-translate="hello" data-content="Trades with a nominal value of $30,000 CAD and over are taken off our retail platform and is traded at the VirgoCX OTC desk. Trades are processed like this to reduce price volatility and slippage at the benefit of our clients.">
												<span></span>
												What is OTC ?
										</div>
									</div>
									<div class="rmain-ro-block">
										<div class="row">
											<div class="col-lg-4 col-md-4">
												<div class="rmrob-one text-center">
													<div class="rmrob-one-img">
														<img src="<?= get_template_directory_uri() ?>/img/phone.png" alt="images not found">
													</div>
													<div class="rmrob-one-content">
														<p>Contact an Account Manager</p>
														<p>Fill out the contact form below or reach us at <a href="tel:+14165831835">+1 (416) 583-1835</a> or <a href="mailto:otc@virgocx.ca">otc@virgocx.ca</a></p>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="rmrob-one text-center">
													<div class="rmrob-one-img">
														<img src="<?= get_template_directory_uri() ?>/img/handshake.png" alt="images not found">
													</div>
													<div class="rmrob-one-content">
														<p>Make the Introduction</p>
														<p>Our OTC account manager will reply immediately and help your referral get set up.</p>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="rmrob-one text-center">
													<div class="rmrob-one-img">
														<img src="<?= get_template_directory_uri() ?>/img/gift.png" alt="images not found">
													</div>
													<div class="rmrob-one-content">
														<p>Receive Continuous Rewards </p>
														<p>Your referrals trade volume will be directly reflected in the payouts that you receive every month. </p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="rmain-ro-form">
										<?= do_shortcode('[contact-form-7 id="76" title="Referral"]') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="page2" class="main-footer">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>VirgoCX Referral Program</h2>
						<p>Receive $200+ CAD for each OTC referral and $10 CAD per trading platform referral. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- rmain area end -->

		<!-- rmain2 start -->
		<div class="rmain2">
			<div class="container">
				<div class="rmain2-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Rewards for OTC</a></li>
									<li class="active"><a href="#" data-scroll="page2">Rewards for Trading <br> Platform</a></li>
									<li><a href="#" data-scroll="page3">How can I keep track of my <br> referrals?</a></li>
									<li><a href="#" data-scroll="page4">Is there a limit on how <br> many people I can refer?</a></li>
									<li><a href="#" data-scroll="page5">Terms and Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="rmain2-right">
								<h2>Rewards for Trading Platform</h2>
								<div class="rmain2-para">
									<p>We take pride in our zero trading fee platform. </p>
									<p>With the understanding that most exchanges that offer trading fees will provide a kickback, we offer bonuses for each retail client you refer, no deposit required. </p>
								</div>
								<div class="rmain2-link">
									<h3>To Find Your Referral Link</h3>
									<div class="rmain2-link-block">
										<div class="row">
											<div class="col-lg-4 col-md-4">
												<div class="rmain2-link-one text-center">
													<div href="#">
														<div class="rmain2-link-one-img">
															<img src="<?= get_template_directory_uri() ?>/img/referral_link_1.png" alt="images not found">
														</div>
														<div class="rmain2-link-one-para">
															<p>Log into your VirgoCX account</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="rmain2-link-one rmain2-link-two text-center">
													<div href="#">
														<div class="rmain2-link-one-img">
															<img src="<?= get_template_directory_uri() ?>/img/referral_link_2.png" alt="images not found">
														</div>
														<div class="rmain2-link-one-para">
															<p>Click on Invite on the left navigation bar</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="rmain2-link-one text-center">
													<div href="#">
														<div class="rmain2-link-one-img">
															<img src="<?= get_template_directory_uri() ?>/img/referral_link_3.png" alt="images not found">
														</div>
														<div class="rmain2-link-one-para">
															<p>Find your unique referral link</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="page3" class="main-footer">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>VirgoCX Referral Program</h2>
						<p>Receive $200+ CAD for each OTC referral and $10 CAD per trading platform referral. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- rmain2 end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Rewards for OTC</a></li>
									<li><a href="#" data-scroll="page2">Rewards for Trading <br> Platform</a></li>
									<li class="active"><a href="#" data-scroll="page3">How can I keep track of my <br> referrals?</a></li>
									<li><a href="#" data-scroll="page4">Is there a limit on how <br> many people I can refer?</a></li>
									<li><a href="#" data-scroll="page5">Terms and Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<h2>How can I keep track of my referrals?</h2>
								<div class="main3-text-one">
									<h3>For OTC Referrals:</h3>
									<p>We will send payments monthly in INTERAC e-Transfer or wire transfer to you by the end of the first week of the upcoming month. </p>
								</div>
								<div class="main3-text-one main3-text-two">
									<h3>For Trading Platform Referrals:</h3>
									<p>You can see which of your contacts have registered as well as which users have verified. under the ‘referral’ tab on your Dashboard.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="page4" class="main-footer main-footer-three">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>VirgoCX Referral Program</h2>
						<p>Receive $200+ CAD for each OTC referral and $10 CAD per trading platform referral. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- main3 end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Rewards for OTC</a></li>
									<li><a href="#" data-scroll="page2">Rewards for Trading <br> Platform</a></li>
									<li><a href="#" data-scroll="page3">How can I keep track of my <br> referrals?</a></li>
									<li class="active"><a href="#" data-scroll="page4">Is there a limit on how <br> many people I can refer?</a></li>
									<li><a href="#" data-scroll="page5">Terms and Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<div class="main3-text-one">
									<h2>Is there a limit on how many people I can refer?</h2>
									<?php if ($limitPage) {
											echo $limitPage->post_content;
										} else { ?>
											<h5 id="there">There are currently no limits to the amount of people you can refer. </h5>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="page5" class="main-footer main-footer-four">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>VirgoCX Referral Program</h2>
						<p>Receive $200+ CAD for each OTC referral and $10 CAD per trading platform referral. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- main3 end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Rewards for OTC</a></li>
									<li><a href="#" data-scroll="page2">Rewards for Trading <br> Platform</a></li>
									<li><a href="#" data-scroll="page3">How can I keep track of my <br> referrals?</a></li>
									<li><a href="#" data-scroll="page4">Is there a limit on how <br> many people I can refer?</a></li>
									<li class="active"><a href="#" data-scroll="page5">Terms and Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<div class="main3-text-one">
									<h2>Terms & Conditions</h2>
									<?php if ($referralTC) {
											echo $referralTC->post_content;
										} else { ?>
											<p>Please add "Referral T&C" page</p>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer-three">
			</div>
		</div>
		<!-- main3 end -->

		<script type="text/javascript">
			(function($){
				$(document).ready(function() {
					smartScroll.init({
						speed: 700,
						addActive: true,
						activeClass: 'active',
						offset: 80,
					})

					$('[data-toggle="popover"]').popover()
				});
			})(jQuery);
		</script>
</div>

<?php
get_footer();
