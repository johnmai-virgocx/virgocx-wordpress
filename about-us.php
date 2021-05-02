<?php
/**
 * Template Name: About Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>
    <style>
#aboutus-content {
	margin-bottom: 3rem;
}

#aboutus-content img {
	width: 100%;
}

#aboutus-content h2 {
	margin-bottom: 2rem;
	font-family: AvenirNextRegular;
	font-weight: 900;
}

#aboutus-content h4 {
	margin-bottom: 1rem;
	font-family: AvenirNextRegular;
}

#aboutus-intro {
	background-color: #f8f7fe;
}

#aboutus-values,
#join-team {
	background-image: linear-gradient(left, #E2FAF7, #E2FAF7, 70%, transparent 70%, transparent 100%);
	background-image: -webkit-linear-gradient(left, #E2FAF7, #E2FAF7, 70%, transparent 70%, transparent 100%);
}
#aboutus-values .container,
#join-team .container {
	padding: 5rem 0;
	background-color: #E2FAF7;
	padding-left: 15px;
	padding-right: 15px;
}

#aboutus-intro.container-wrapper {
	margin-top: 0;
}

#aboutus-mission p {
	font-size: 1.4rem;
	line-height: 1.7rem;
}

#aboutus-values h2 {
	margin-bottom: 3rem;
}

#aboutus-values h4 {
	font-size: 1.4rem;
	margin-bottom: 2rem;
}

#aboutus-values .col-lg-3 {
	padding-right: 3rem;
}

#in-the-community {
	background-image: linear-gradient(bottom, #f8f7fe, #f8f7fe, 70%, transparent 70%, transparent 100%);
	background-image: -webkit-linear-gradient(bottom, #f8f7fe, #f8f7fe, 70%, transparent 70%, transparent 100%);
	margin-bottom: 3rem;
}

#join-team img.photo5 {
	width: 38%;
	position: relative;
	left: 150px;
}

#join-team img.photo6 {
	position: relative;
	left: 300px;
	top: 100px;
	width: 30%;
}

#join-team img.photo7 {
	position: relative;
	left: -500px;
	top: 180px;
	width: 20%;
}

#join-team .btn {
	width: 180px;
	margin-top: 2rem;
}

@media screen and (max-width: 992px) {
	#join-team img {
		display: none;
	}

	#aboutus-values .col-lg-3.col-md-6.col-sm-12 {
		margin-top: 1.5rem;
	}

	#join-team .btn {
		width: 100%;
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

<div id="aboutus-content">

	<div id="aboutus-intro" class="container-wrapper">
		<div class="container">
        <h2 data-translate="AboutUs_header1"></h2>
				<h4 data-translate="AboutUs_header1_desc1"></h4>
				<p data-translate="AboutUs_header1_desc2"></p>
		</div>
	</div>

	<div id="aboutus-mission" class="container-wrapper">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-sm-12">
					<p data-translate="AboutUs_mission">
						
					</p>
				</div>
				<div class="col-lg-6 col-sm-12">
					<img class="photo1-C61RwL" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo1-97B17115-FC41-450C-8BDF-5ADED8B108B6@3x.png" />
				</div>
			</div>
		</div>
	</div>

	<div id="aboutus-values" class="half-bg">
		<div class="container">
        <h2 data-translate="AboutUs_header2"></h2>
				<div class="row justify-content-between">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4 data-translate="AboutUs_header2_tag1"></h4>
						<div 
						class="virgo-cx-a-lows-canad-pFQedc font-class-1" data-translate="AboutUs_header2_tag1_desc">
						
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4 data-translate="AboutUs_header2_tag2"></h4>
						<div class="we-take-pride-in-our-IfDNHD font-class-1" data-translate="AboutUs_header2_tag2_desc">
							
							</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4 data-translate="AboutUs_header2_tag3"></h4>
						<div class="your-trust-requires-gc2QiZ font-class-1" data-translate="AboutUs_header2_tag3_desc">
						
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4 data-translate="AboutUs_header2_tag4"></h4>
						<div class="we-are-regulated-and-sziVuj font-class-1" data-translate="AboutUs_header2_tag4_desc">   
						</div>
					</div>
				</div><!-- end of row -->
		</div>
	</div>

	<div id="in-the-community" class="container-wrapper">
		<div class="container">
        <h2 data-translate="AboutUs_header3"></h2>

				<div id="grey-bg"></div>
        <img class="photo4-C61RwL" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo4-158E4D4D-3E06-461F-87D2-99710B67B617.png" />
		</div>
	</div>

	<div id="join-team" class="half-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<h2 data-translate="AboutUs_header4"></h2>
          <div class="since-our-humble-beg-1DesI1 font-class-1" data-translate="AboutUs_header4_desc">
          </div>
					<div class="view-openings">
						<a href="https://www.linkedin.com/company/virgocx/" class="btn blue-gradient-btn" data-translate="AboutUs_header4_btn"></a>
					</div>
				</div>

				<div class="col-lg-7 col-sm-12">
          <img class="photo5" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo5-EFBC0F98-29A8-41E7-AD2D-12E89DB95F36@3x.png" />
          <img class="photo6" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo6-CA663112-202A-4C89-B192-6E50B97779CE@3x.png" />
					<img class="photo7" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo7-5C0A7C0D-A6AC-419F-93F8-01A562405098@3x.png" />
				</div>
			</div>
		</div>
	</div>

</div><!-- End of aboutus-content -->
<?php
get_footer();
