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
	<footer class="footer-area">
			<div class="container custom-container">
					<div class="footer-tp">
							<div class="row">
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>VirgoCX</h5>
													<?php
													wp_nav_menu(
														array(
															'menu' => 'footer-1',
															'theme_location' => 'footer-1',
															'menu_id'        => 'footer-menu-1',
														)
													);
													?>
											</div>
									</div>
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>Buy Crypto</h5>
													<?php
													wp_nav_menu(
														array(
															'menu' => 'footer-2',
															'theme_location' => 'footer-2',
															'menu_id'        => 'footer-menu-2',
														)
													);
													?>
											</div>
									</div>
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>Products</h5>
													<?php
													wp_nav_menu(
														array(
															'menu' => 'footer-3',
															'theme_location' => 'footer-3',
															'menu_id'        => 'footer-menu-3',
														)
													);
													?>
											</div>
									</div>
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>Resources</h5>
													<?php
													wp_nav_menu(
														array(
															'menu' => 'footer-4',
															'theme_location' => 'footer-4',
															'menu_id'        => 'footer-menu-4',
														)
													);
													?>
											</div>
									</div>
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>Legal</h5>
													<?php
													wp_nav_menu(
														array(
															'menu' => 'footer-5',
															'theme_location' => 'footer-5',
															'menu_id'        => 'footer-menu-5',
														)
													);
													?>
											</div>
									</div>
									<div class="col-lg-2 col-sm-4">
											<div class="fp-menu">
													<h5>Be Social</h5>
													<ul id="social-links">
															<li>
																	<a href="https://twitter.com/Virgocx"><img src="<?= get_template_directory_uri() ?>/img/otc/twitter.svg" alt="images not found" /> Twitter</a>
															</li>
															<li>
																	<a href="https://medium.com/virgocx"><img src="<?= get_template_directory_uri() ?>/img/otc/medium.svg" alt="images not found" /> Medium</a>
															</li>
															<li>
																	<a href="https://www.facebook.com/virgocxofficial"><img src="<?= get_template_directory_uri() ?>/img/otc/facebook.svg" alt="images not found" /> Facebook</a>
															</li>
															<li>
																	<a href="https://www.linkedin.com/company/virgocx/"><img src="<?= get_template_directory_uri() ?>/img/otc/linkedin.svg" alt="images not found" /> Linkedin</a>
															</li>
															<li>
																	<a href="https://www.youtube.com/channel/UCxrH4dmNzxqBnuwD9_DnjTQ"><img src="<?= get_template_directory_uri() ?>/img/otc/youtube.svg" alt="images not found" /> YouTube</a>
															</li>
															<li>
																	<a href="https://www.instagram.com/virgocx_official/"><img src="<?= get_template_directory_uri() ?>/img/otc/instagram.png" alt="images not found" /> Instagram</a>
															</li>
													</ul>
											</div>
									</div>
							</div>
					</div>
					<div class="footer-bt">
							<div class="row align-items-center">
									<div class="col-lg-7 col-md-12">
											<div class="fbt-left">
													<ul>
															<li class="app-download">
																	<a class="ios" href="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048" target="_blank">
																		<div class="text">
																			<span>Get it on</span>
																			<span class="highlight">App Store</span>
																		</div>
																	</a>
															</li>
															<li class="app-download">
																	<a class="play" href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange" target="_blank">
																		<div class="text">
																			<span>Get it on</span>
																			<span class="highlight">Google Play</span>
																		</div>
																	</a>
															</li>
															<li class="app-download">
																	<a class="android" href="https://virgocx.oss-us-west-1.aliyuncs.com//prod/2020/10/31/2dd4caebf9c547058e418a600ff48b95.apk" target="_blank">
																		<div class="text">
																			<span>Download for</span>
																			<span class="highlight">Android</span>
																		</div>
																	</a>
															</li>
													</ul>
											</div>
									</div>
									<div class="col-lg-5 col-md-12">
											<div class="newsletter">
													<span>Stay in Touch</span>
													<?= do_shortcode('[contact-form-7 id="79" title="Footer newsletter"]') ?>
											</div>
									</div>
							</div>
					</div>
					<div class="copyright">
							<span>&copy;2020 VirgoCX Inc. MSB (FINTRAC): M19955733
							&nbsp; &nbsp;<img src="<?= get_template_directory_uri() ?>/img/canada2x.png" alt="canada flag" width="20" /> Proudly made in Canada</span>
					</div>
			</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<style type="text/css">
	#otc-body .app-download a:hover {
		background-color: #B59964 !important;
		border: 1px solid #B59964 !important;
		color: #fff;
	}
	.app-download a:hover.ios{
		background-image: url(/wp-content/themes/virgocx/img/footer/ios_white.png);
	}
	.app-download a:hover.play {
		background-image: url(/wp-content/themes/virgocx/img/footer/play_white.png);
	}
	.app-download a:hover.android {
		background-image: url(/wp-content/themes/virgocx/img/footer/android_white.png);
	}
	#otc-body .newsletter .wpcf7-form input {
		color: #B59964;
		font-family: AvenirNextBold;
	}

	@media screen and (max-width: 576px) {

		#social-links {
			display: flex;
			flex-direction: row;
		}
	}
</style>
</body>
</html>
