<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header('otc');
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
							<?php if(strlen($args['name']) > 12 && $args['name']!=="Axie Infinity" ) : ?>	
								<h1><span data-translate="Sell_header1_1_otc"></span><br /><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header1_2_otc"></span></h1>
							<?php else : ?>
								<h1><span data-translate="Sell_header1_1_otc"></span><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header1_2_otc"></span></h1>
							<?php endif; ?>
							<p class="tag-line">
								<span data-translate="Sell_header1_1_desc_otc"></span>
								<span data-translate="<?= $args['ticker'] ?>"></span>
								<span data-translate="Sell_header1_2_desc_otc"></span>
							</p>

							<div class="hero-signup get-started-content">
								<input type="submit" onclick="goToSignUp()" value="Get Started" class="wpcf7-form-control wpcf7-submit" aria-invalid="false">
							</div>
						</div>
					</div>

					<div class="col-lg-5 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/coins/otc_coins_background/<?= $args['ticker'] ?>.png" alt="flags" width="100%"/>
					</div>
				</div>
			</div>
		</div>

		<div id="buy-steps">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h2 data-translate="Sell_header2_otc"></h2>
						<p>
							<span class="span-gold" data-translate="Sell_header2_desc1_otc"></span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h2 data-translate="Sell_header3_otc"></h2>
						<p class="span-gold" data-translate="Sell_header3_desc_otc"></p>
					</div>
					<div class="bg-img">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_coin_step_otc.png" alt="images not found" width="100%"/>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<?php if(strlen($args['name']) > 12  && $args['name']!=="Axie Infinity") : ?>
							<h2><span data-translate="Sell_header4_1_otc"></span><br /><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Sell_header4_2_otc"></h2>
						<?php else : ?>	
							<h2><span data-translate="Sell_header4_1_otc"></span><span data-translate="<?= $args['name'] ?>"></span><span data-translate="Sell_header4_2_otc"></h2>
						<?php endif; ?>
							<p class="span-gold" ><span data-translate="Sell_header4_desc1_otc"></span><span data-translate="<?= $args['ticker'] ?>"></span> <span data-translate="Sell_header4_desc2_otc"> </p>
					</div>
				</div><!-- end of row -->

				<div class="row">
					<div class="col-lg-12">
						<h2 data-translate="Sell_header5_otc"></h2>
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
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/compliant_and_regulated.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag1_otc"></h3>
								<p data-translate="Sell_header5_tag1_desc_otc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/safe_and_secure.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag2_otc"></h3>
								<p data-translate="Sell_header5_tag2_desc_otc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/low_fees.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag3_otc"></h3>
								<p data-translate="Sell_header5_tag3_desc_otc"></p>
							</div>
						</div>
					</div>
				</div><!-- end of row -->

				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/best_price.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag4_otc"></h3>
								<p data-translate="Sell_header5_tag4_desc_otc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/easy_and_convenient.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag5_otc"></h3>
								<p data-translate="Sell_header5_tag5_desc_otc"></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12">
						<div class="item-explain">
							<div class="rmain2-link-one-img">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/otc_icons/247_support.png" alt="images not found">
							</div>
							<div class="rmain2-link-one-para">
								<h3 data-translate="Sell_header5_tag6_otc"></h3>
								<p data-translate="Sell_header5_tag6_desc_otc"></p>
							</div>
						</div>
					</div>
				</div><!-- end of row -->
			</div>
		</div><!-- core values -->

		<section class="getStart-area">
			<div class="container custom-container">
				<h3 data-translate="Sell_header6_otc"></h3>
				<div class="getStart-content get-started-content">
					<input onclick="goToSignUp()" type="submit"  value="Get Started" class="wpcf7-form-control wpcf7-submit" aria-invalid="false">
				</div>
			</div>
		</section>

<style type="text/css">
#buy-coin .buy-coin-header {
	padding-top: 8rem;
	padding-bottom: 8rem;
	margin-bottom: 3rem;
	background-color: #F5F5F5;
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
	position: relative;
}

#buy-steps #step-2 {
	margin-top: 5rem;
}

#buy-steps .row .step-header {
	margin-bottom: 5rem;
}

#core-values {
	background-color: #05004D;
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
	color: #C7BA9A;
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
.rmain2-link-one-para p{
	color:#FFFFFF;
}
.tag-line{
	color: #C7BA9A;
}
.hero-signup input[type=submit]{
    background: #C7BA9A !important;
}
.getStart-content input[type=submit]{
	margin-left:187px;
	width:125px;
	height:46px;
	border:none;
	color:#fff;
	background: #C7BA9A;
	border-radius:5px;
}
.getStart-area{
	background-image: url(/wp-content/themes/virgocx/img/bg3.svg);
}
@media screen and (min-width: 900px) {
	.bg-img{
		position:absolute;
		top:-60px;
		right:0;
		width:403px;
		height:271px;
	}
	.span-gold{
		width:650px;
		word-wrap: normal;
		color: #C7BA9A;
	}
}
@media screen and (max-width: 900px) {
	.bg-img{
		width:100%;
	}
	.span-gold{
		width:100%;
		word-wrap: normal;
		color: #C7BA9A;
	}
}
</style>

<script type="text/javascript">
document.addEventListener( 'wpcf7invalid', function( event ) {
	alert('Please provide a valid email address');
});
function goToSignUp(){
	var url = window.location.href;
	var redirect = url.substr(0,url.indexOf('-'))+'-otc-direct/#contact-form'
	window.location.href =redirect;
};
</script>

	</div>

<?php
get_footer('otc');
