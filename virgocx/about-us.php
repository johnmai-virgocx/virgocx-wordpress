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
        <h2>About Us</h2>
				<h4>VirgoCX is the most trusted cryptocurrency trading platform in Canada.</h4>
				<p>Digital asset platforms should be safe, reliable, and easy to understand and with that, VirgoCX is making
					cryptocurrencies available to Canadians everywhere. We acknowledge that innovation moves rapidly and as we
					are changing the way the world stores wealth, we operate diligently to provide quality services that adheres
					to global compliance requirements.  With our platform, we are accelerating the adoption for Bitcoin,
					Ethereum, Litecoin, and other Cryptocurrencies. </p>
		</div>
	</div>

	<div id="aboutus-mission" class="container-wrapper">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-sm-12">
					<p>
						Our mission is to provide the world’s most trusted platform for retail and institutional investors to access a
						new global asset class and to provide global adoption for cryptocurrency.
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
        <h2>Our Values</h2>
				<div class="row justify-content-between">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4>Safety</h4>
						<div class="virgo-cx-a-lows-canad-pFQedc font-class-1">
							VirgoCX allows Canadians to buy and sell cryptocurrency conveniently. We provide the means for you to trade Bitcoin, Ethereum, Litecoin, USDT Tether, Bitcoin Cash, EOS, PAX Gold, and more. We make depositing and trading available within seconds after verification.</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4>Fairness</h4>
						<div class="we-take-pride-in-our-IfDNHD font-class-1">
							We take pride in our competitive pricing and liquidity of our trading platform, offering the best prices in Canada for any investor to secure their cryptocurrencies.</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4>Transparency</h4>
						<div class="your-trust-requires-gc2QiZ font-class-1">
							Your trust requires our transparency. Our trading platform has removed trading fees so what you see is what you get.</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4>Professionalism</h4>
						<div class="we-are-regulated-and-sziVuj font-class-1">
							We are regulated and we operate diligently. Our company is externally audited and we hold the highest standard of legal compliance, business conduct and ethics.  
						</div>
					</div>
				</div><!-- end of row -->
		</div>
	</div>

	<div id="in-the-community" class="container-wrapper">
		<div class="container">
        <h2>In the Community</h2>

				<div id="grey-bg"></div>
        <img class="photo4-C61RwL" src="<?= get_template_directory_uri() ?>/img/aboutus/04-about-us-photo4-158E4D4D-3E06-461F-87D2-99710B67B617.png" />
		</div>
	</div>

	<div id="join-team" class="half-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<h2>Join the Virgo Team</h2>
          <div class="since-our-humble-beg-1DesI1 font-class-1">
            Since our humble beginning, our team has been rapidly growing with people that have interdisciplinary skill sets. We are always looking for the talented, the inspired, and the striving to join us to lead the financial revolution. If you are interested in joining the VirgoCX team, we encourage you to click the link below to learn about our career opportunities!
          </div>
					<div class="view-openings">
						<a href="https://www.linkedin.com/company/virgocx/" class="btn blue-gradient-btn">View Openings</a>
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
