<?php
/**
 * Template Name: FX page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

	<div id="fx">
		<div class="fx-header">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6 col-md-12">
						<div class="row">
							<h2 >
								<span data-translate="ForeignExchange_header1_1"></span>
								<br/>
								<span data-translate="ForeignExchange_header1_2"></span>
								
								
							</h2>
							<p class="tag-line"  data-translate="ForeignExchange_header1_desc"></p>
						</div>

						<div class="row">
									<div class="rmain-ro-form">
										<?= do_shortcode('[contact-form-7 id="77" title="Fx"]') ?>

										<div class="fx-contact-info">
													<p><span data-translate="ForeignExchange_email"></span><a href="mailto:fx@virgocx.ca">fx@virgocx.ca</a>
													<span data-translate="ForeignExchange_phone"></span><a href="tel:+1 (416) 483-1835">+1 (416) 483-1835</a>
													</p>
												<p data-translate="ForeignExchange_minMoney"></p>
										</div>
									</div>
						</div>

					</div>

					<div class="col-lg-5 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/fx_flags.png" alt="flags" width="100%"/>
						<div class="fintrac-regulated font-class-6" >
							<img src="<?= get_template_directory_uri() ?>/img/canada2x.png" alt="canada flag" width="20" />
							<span data-translate="ForeignExchange_regulated"></span>
							
						</div>
					</div>
				</div>
			</div>
		</div>

        <div id="core-values" class="container-wrapper">
					<div class="container">
						<h2 data-translate="ForeignExchange_header2"></h2>

						<div class="row">
							<div class="col-lg-4 col-md-12">
								<img id="core-values-big-pic" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-photo-2A33329F-E730-4C90-8A69-4CE151DBBDBC3x.png" />
							</div>

							<div id="core-values-right" class="col-lg-8 col-md-12">
								<div class="row mb-4">
									<div class="col-lg-6">
										<img class="full-regul-ed-service-kwjGAF" style="height:40px;margin-top:1.3px" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-full-regulated-service-CD199AC3-E22E-448F-8B0D-11429A998FC43x.png" />
										<h3 data-translate="ForeignExchange_header2_tag1"></h3>
										<div class="we-are-fully-complia-kwjGAF font-class-1" data-translate="ForeignExchange_header2_tag1_desc">
											
										</div>
									</div>

									<div class="col-lg-6">
										<img class="expert-knowledge-xMazAW" style="height:40px" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-expert-knowledge-C4935AFB-96EC-4251-A75E-C54DFA41E3A13x.png" />
										<h3 data-translate="ForeignExchange_header2_tag2"></h3>
										<div class="we-offer-unparallell-xMazAW font-class-1" data-translate="ForeignExchange_header2_tag2_desc">
										</div>
									</div>
								</div><!-- row -->

								<div class="row">
									<div class="col-lg-6">
										<img class="x247-AKAqTd" style="height:40px;margin-top:1.3px" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-247-586DA73B-E1DC-43BE-A4AA-27D655AC9B183x.png" />
										<h3 data-translate="ForeignExchange_header2_tag3"></h3>
										<div class="our-customer-support-AKAqTd font-class-1" data-translate="ForeignExchange_header2_tag3_desc">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="u7f16u7ec4-8-zxfmYr">
											<img class="excellent-service-txb9EP" style="height:40px" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-excellent-service-5E11B475-34F7-449F-9401-B56B542A49B43x.png" />
											<h3 data-translate="ForeignExchange_header2_tag4"></h3>
										</div>
										<div class="our-strong-relations-zxfmYr font-class-1" data-translate="ForeignExchange_header2_tag4_desc">
										</div>
									</div>
								</div>
							</div>
						</div><!-- end of row -->
					</div>
        </div><!-- core values -->

        <div id="better-rates" class="container-wrapper">
					<div class="container">
						<div class="row">

							<div class="col-lg-6 col-md-12">
								<h2 data-translate="ForeignExchange_header3"></h2>

								<h3 data-translate="ForeignExchange_header3_tag1"></h3>
								<div class="dial-us-at-1-416-YV2LRl font-class-1" data-translate="ForeignExchange_header3_tag1_desc">
								</div>

								<h3 data-translate="ForeignExchange_header3_tag2"></h3>
								<div class="once-you-lock-in-you-YV2LRl font-class-1" data-translate="ForeignExchange_header3_tag2_desc">
								</div>

								<h3 data-translate="ForeignExchange_header3_tag3"></h3>
								<div class="send-your-funds-via-YV2LRl font-class-1" data-translate="ForeignExchange_header3_tag3_desc">
								</div>
							</div><!-- End of col -->

							<div class="col-lg-6 col-md-12">
								<img class="image-1" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-hassan-ouajbir-iyuymmrm7s-unsplash-96799969-E4E8-4E05-B9C6-92806B4758D83x.png" />
								<img class="image-2" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-person-using-laptop-on-white-wooden-table-67BE5C4E-C146-439B-9586-372F5AA134313x.png" />
								<img class="image-3" src="<?= get_template_directory_uri() ?>/img/fx/06-fx-person-holding-white-and-red-card-294A5F98-4961-48B1-89D1-FC2AABF2C5953x.png" />
							</div><!-- End of col --> 

						</div><!-- End of row -->
					</div><!-- End of container -->
        </div><!-- better rates -->

        <div id="fx-learn-more" class="container-wrapper">
					<div class="container">
						<h2 data-translate="ForeignExchange_header4"></h2>
						<div class="mb-4">
							<span class="span1-jkl2Dx" data-translate="ForeignExchange_header4_desc1"></span>
							<span class="span2-jkl2Dx" >
								<a href="mailto:fx@virgocx.ca">fx@virgocx.ca</a> 
								<span data-translate="ForeignExchange_or"></span>							
								<a href="tel:+1 (416) 583-1835)">+1 (416) 583-1835</a> 
							</span>
							<span class="span3-jkl2Dx" data-translate="ForeignExchange_header4_desc2"></span>
						</div>

						<div class="u7f16u7ec4-17-oM9t79">
							<a href="/en-contact" class="btn blue-gradient-btn" data-translate="ForeignExchange_header4_btn"></a>
						</div>
					</div>
        </div><!-- fx learn more -->

<style type="text/css">
#fx h2 {
	padding: 2rem 0;
}

#fx h3 {
	padding: 0.8rem 0;
	font-size: 1rem;
}

#fx .fintrac-regulated {
	margin-top: 3rem;
	text-align: right;
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

#better-rates {
	background-color: #f8f7fe;
}

#better-rates img {
	width: 30%;
}

#better-rates img.image-1 {
	position: relative;
	left: 150px;
}

#better-rates img.image-2 {
	position: relative;
	left: 300px;
	top: 100px;
	width: 40%;
}

#better-rates img.image-3 {
	position: relative;
	left: 300px;
	top: 110px;
}

#fx-learn-more {
	background-color: #ffffff;
}

#fx-learn-more .btn {
	width: 300px;
}

#fx .fx-header .rmain-ro-submit-button {
	padding: 0 15px;
}

@media screen and (max-width: 992px) {

	#fx .fx-header {
		padding: 0 1rem;
	}
	#better-rates img {
		display: none;
	}

	#core-values-right .col-lg-6 {
		margin-top: 2rem;
	}

	#fx-learn-more .btn {
		width: 100%;
	}
}
</style>


	</div>

<?php
get_footer();
