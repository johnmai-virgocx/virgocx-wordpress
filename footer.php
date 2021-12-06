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
													<h5 data-translate="footer_col1"></h5>
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
													<h5 data-translate="footer_col2"></h5>
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
													<h5 data-translate="footer_col3"></h5>
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
													<h5 data-translate="footer_col4"></h5>
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
													<h5 data-translate="footer_col5"></h5>
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
													<h5 data-translate="footer_col6"></h5>
													<ul id="social-links">
															<li>
																	<a href="https://twitter.com/Virgocx" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/twitter.png" alt="images not found" /> <span data-translate="footer_col6_Twitter"></span></a>
															</li>
															<li>
																	<a href="https://www.reddit.com/r/VirgoCX/" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/Reddit.png" alt="images not found" /> <span data-translate="footer_col6_Medium"></span></a>
															</li>
															<li>
																	<a href="https://www.facebook.com/virgocxofficial" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/facebook.png" alt="images not found" /> <span data-translate="footer_col6_Facebook"></span></a>
															</li>
															<li>
																	<a href="https://www.linkedin.com/company/virgocx/" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/linkin.png" alt="images not found" /> <span data-translate="footer_col6_LinkedIn"></span></a>
															</li>
															<li>
																	<a href="https://www.youtube.com/channel/UCxrH4dmNzxqBnuwD9_DnjTQ" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/youtube.png" alt="images not found" /> <span data-translate="footer_col6_YouTube"></span></a>
															</li>
															<li>
																	<a href="https://www.instagram.com/virgocx_official/" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/instagram.png" alt="images not found" /> <span data-translate="footer_col6_Instagram"></span></a>
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
																			<span data-translate="footer_App_Apple1"></span>
																			<span class="highlight" data-translate="footer_App_Apple2"></span>
																		</div>
																	</a>
															</li>
															<li class="app-download">
																	<a class="play" href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange" target="_blank">
																		<div class="text">
																			<span data-translate="footer_App_Google1"></span>
																			<span class="highlight" data-translate="footer_App_Google2"></span>
																		</div>
																	</a>
															</li>
															<li class="app-download">
																	<a class="android" href="https://virgocx.s3.ca-central-1.amazonaws.com/prod/2021/11/07/eae76c4f3c4145f6b9681f44aa5c92e9.apk" target="_blank">
																		<div class="text">
																			<span data-translate="footer_App_Android1"></span>
																			<span class="highlight" data-translate="footer_App_Android2"></span>
																		</div>
																	</a>
															</li>
													</ul>
											</div>
									</div>
									<div class="col-lg-5 col-md-12">
											<div class="newsletter">
													<span data-translate="footer_Stay_in_Touch"></span>
													<?= do_shortcode('[contact-form-7 id="79" title="Footer newsletter"]') ?>
											</div>
									</div>
							</div>
					</div>
					<div class="copyright">
							<span> <span data-translate="footer_Brand"></span>
							&nbsp; &nbsp;<img src="<?= get_template_directory_uri() ?>/img/canada2x.png" alt="canada flag" width="20" /> <span data-translate="footer_Make_In_Canada"></span></span>
					</div>
			</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<style type="text/css">
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

	}
</style>
</body>
</html>
