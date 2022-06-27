<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header('buy');
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
							<?php if(strlen($args['name']) > 12) : ?>
								<h1><span data-translate="Buy_header1_1" ></span><br /><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Buy_header1_2"></span></h1>
							<?php else : ?>
								<h1><span data-translate="Buy_header1_1" ></span><span data-translate="<?= $args['name'] ?>"></span><br /><span data-translate="Buy_header1_2"></span></h1>
							<?php endif; ?>
							<p class="tag-line lineGrey" data-translate="Buy_header1_desc1"></p>
                            <a href="https://virgocx.ca/page#/register?code=BuyVirgo30" class="btn btn-primary buttonPurple" role="button" data-translate="Buy_header1_desc2"></a>
							<?php if($args['name']=="Celo") : ?>
								<p class="tag-line lineGrey" style="color:#6B47ED; font-size:14px; margin-top:-10px;" data-translate="Buy_header1_desc4"></p>
							<?php else : ?>
								<p class="tag-line lineGrey" style="color:#6B47ED; font-size:14px; margin-top:-10px;" data-translate="Buy_header1_desc3"></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-5 col-md-12">
					<img src="<?= get_template_directory_uri() ?>/img/buy_coins/coins/<?= $args['ticker'] ?>.png" alt="flags" width="100%"/>
					</div>
				</div>
			</div>
		</div>

		<div id="buy-steps" style="background-color: #F9F9F9; padding-bottom: 15px">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="border-left:6px solid #6B47ED; margin-top:60px; margin-left:15px;">
						<h2>
							<span data-translate="Buy_header13_desc1"></span> 
							<span data-translate="<?= $args['name'] ?>"></span>
							<span data-translate="Buy_header13_desc2"></span>
						</h2>
						<h2>
							<span data-translate="Buy_header13_desc3" style="color: #6B47ED;"></span> 
							<span data-translate="Buy_header13_desc4"></span> 
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h3 data-translate="Buy_header10"></h3>
						<p >
							<span data-translate="Buy_header10_desc1"></span>
							<a href="https://virgocx.ca/page#/register?code=BuyVirgo30" data-translate="Buy_header10_desc2" style="color: #6B47ED; text-decoration:underline; font-weight:700;"></a> 
							<span data-translate="Buy_header10_desc3"></span>
							<span data-translate="Buy_header10_desc4" style="color: #6B47ED;"></span>
							<span data-translate="Buy_header10_desc5"></span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/app_display_new2.png" alt="images not found" width="100%"/>
					</div>

					<div class="col-lg-6 col-md-12">
						<?php get_template_part('template-parts/app', 'qrNew'); ?>
					</div>
				</div>
				<div id="step-2" class="row">
					<div class="col-lg-6 col-md-12">
						<div class="step-header">
							<h3 data-translate="Buy_header11"></h3>
							<p>
								<span data-translate="Buy_header11_desc1" style="color: #6B47ED;"></span>
								<?php if($args['name']=="Chiliz" || $args['name']=="Gala" || $args['name']=="Kusama") : ?>
									<span data-translate="Buy_header11_desc2_is"></span>
								<?php elseif($args['name']=="Smooth Love Potion") : ?>
									<span data-translate="Buy_header11_desc2_another"></span>
								<?php else : ?>
									<span data-translate="Buy_header11_desc2_are"></span>
								<?php endif; ?>

								<?php if($args['name']=="Ankr") : ?>
									<span>Choose the payment method that best suits your needs to buy Ankr.</span>
								<?php else : ?>
									<span data-translate="Buy_header11_desc3"></span>
								<?php endif; ?>
							</p>
						</div>
						<div class="step-header" style="padding-top:50px">
							<h3>
								<span data-translate="Buy_header12"></span> 
								<span data-translate="<?= $args['name'] ?>"></span>
								<?php if($args['name']=="Avalanche" || $args['name']=="Cosmos" || $args['name']=="Polygon" || $args['name']=="Shiba Inu") : ?>
									<span data-translate="<?= $args['ticker'] ?>"></span>
								<?php endif; ?>
							</h3>
							<p >
								<?php if($args['name']=="Polygon") : ?>
									<span>Buy Polygon directly - </span>
								<?php endif; ?>
								<?php if($args['name']=="ApeCoin" || $args['name']=="Gala" || $args['name']=="Storj" || $args['name']=="dYdX") : ?>
									<span data-translate="Buy_header12_desc1_purchase"></span>
								<?php else : ?>
									<span data-translate="Buy_header12_desc1_buy"></span>
								<?php endif; ?>
								<?php if($args['name']=="Decentraland") : ?>
									<span></span>
								<?php else : ?>
									<span data-translate="<?= $args['name'] ?>"></span>
								<?php endif; ?>

								<?php if($args['name']=="Audius"||$args['name']=="Avalanche"||$args['name']=="Axie Infinity"||$args['name']=="Cosmos"||$args['name']=="Decentraland"||$args['name']=="Dogelon Mars"||$args['name']=="Polygon") : ?>
									<span data-translate="<?= $args['ticker'] ?>"></span>
								<?php elseif($args['name']=="Shiba Inu") : ?>
									<span>coin</span>
								<?php endif; ?>
								<span data-translate="Buy_header12_desc2"></span>
								<span data-translate="Buy_header12_desc3" style="color: #6B47ED;"></span>
								<span data-translate="Buy_header12_desc4"></span>
								<span data-translate="Buy_header12_desc5" style="color: #6B47ED;"></span>
							</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-12">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coin_step_new2.png" alt="images not found" width="100%"/>
					</div>
				</div>
			</div>
		</div>

		<div id="why-buy"  style="padding-bottom: 100px">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="border-right:6px solid #6B47ED; margin-top:80px; margin-right:15px;">
						<h2>
							<span data-translate="Buy_header14_desc1"></span> 
							<span data-translate="<?= $args['name'] ?>"></span>
							<?php if($args['name']=="Shiba Inu") : ?>
								<span>SHIB</span>
							<?php endif; ?>
							<span data-translate="Buy_header14_desc2"></span> 
						</h2>
						<h2>
							<span data-translate="Buy_header14_desc3"></span> 
							<span data-translate="Buy_header14_desc4" style="color: #6B47ED;"></span> 
						</h2>
					</div>
				</div>
				<div class="row" style="margin-top:30px">
					<div class="col-lg-12 col-md-12">
						<div data-translate="Buy_header15" style="text-align: right; font-size: 18px;"></div>
					</div>
				</div>
				
				<div class="row" style="margin-top:20px">
					<div class="col-lg-6 col-md-12">
						<div class="whyBuyBox">
							<h3 style="color:#6950D0" data-translate="Buy_header16"></h3>
							<div class="innerBox" style="background-color: #6950D0;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon1.png" />
								<p>
									<?php if($args['name']=="Avalanche") : ?>
										<span>Buy Avalanche AVAX and sell Avalanche AVAX</span>
									<?php elseif($args['name']=="Axie Infinity") : ?>
										<span>Buy Axie Infinity coins and sell Axie Infinity AXS</span>
									<?php elseif($args['name']=="Cosmos") : ?>
										<span>Buy and sell Cosmos ATOM</span>
									<?php elseif($args['name']=="Decentraland") : ?>
										<span>Buy and sell MANA</span>
									<?php elseif($args['name']=="Polygon") : ?>
										<span>Buy and sell Polygon MATIC</span>
									<?php elseif($args['name']=="Shiba Inu") : ?>
										<span>Buy and sell Shiba Inu SHIB</span>
									<?php elseif($args['name']=="Bancor") : ?>
										<span>Buy or sell Bancor</span>
									<?php else : ?>
										<span data-translate="Buy_header16_desc1"></span>
										<span data-translate="<?= $args['name'] ?>"></span>
									<?php endif; ?>
									<span data-translate="Buy_header16_desc2"></span>
								</p>
							</div>
						</div>
						<div class="whyBuyBox">
							<h3 style="color:#E7A645" data-translate="Buy_header17"></h3>
							<div class="innerBox" style="background-color: #E7A645;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon2.png" />
								<p>
									<?php if($args['name']=="Bitcoin"||$args['name']=="Bitcoin_Cash"||$args['name']=="Aave"||$args['name']=="Chainlink"
									||$args['name']=="Curve"||$args['name']=="Dai"||$args['name']=="Dogecoin"||$args['name']=="EOS"
									||$args['name']=="Litecoin"||$args['name']=="PAX_Gold"||$args['name']=="Stellar"||$args['name']=="Synthetix"
									||$args['name']=="Uniswap"||$args['name']=="USD_Coin") : ?>
										<span data-translate="Buy_header17_desc1_USD"></span>
									<?php elseif($args['name']=="Amp" || $args['name']== "Mirror Protocol" || $args['name']== "Quant" || $args['name']== "Ethereum Classic") : ?>
										<span data-translate="Buy_header17_desc1_fiatCurrency"></span>
									<?php elseif($args['name']=="Audius") : ?>
										<span data-translate="Buy_header17_desc1_fiatMoeny"></span>
									<?php else : ?>
										<span data-translate="Buy_header17_desc1_fiatCurrencies"></span>
									<?php endif; ?>
									<span data-translate="Buy_header17_desc2" style="font-weight:700"></span>
									<span data-translate="Buy_header17_desc3"></span>
								</p>
							</div>
						</div>
						<div class="whyBuyBox">
							<h3 style="color:#306CBE" data-translate="Buy_header18"></h3>
							<div class="innerBox" style="background-color: #306CBE;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon3.png" />
								<p>
									<?php if($args['name']=="Bitcoin"||$args['name']=="Bitcoin_Cash"||$args['name']=="Aave"||$args['name']=="Chainlink"
									||$args['name']=="Curve"||$args['name']=="Dai"||$args['name']=="Dogecoin"||$args['name']=="EOS"
									||$args['name']=="Litecoin"||$args['name']=="PAX_Gold"||$args['name']=="Stellar"||$args['name']=="Synthetix"
									||$args['name']=="Uniswap"||$args['name']=="USD_Coin") : ?>
										<span data-translate="Buy_header18_desc1_noCharge"></span>
									<?php elseif($args['name']=="Ocean Protocol"||$args['name']=="Smooth Love Potion"||$args['name']=="dYdX") : ?>
										<span data-translate="Buy_header18_desc1_lessCharge"></span>
									<?php else : ?>
										<span data-translate="Buy_header18_desc1_charge"></span>
									<?php endif; ?>

									<?php if($args['name']=="Avalanche") : ?>
										<span>You will buy and sell Avalanche AVAX</span>
									<?php elseif($args['name']=="Axie Infinity") : ?>
										<span>You will buy Axie Infinity and sell Axie Infinity</span>
									<?php elseif($args['name']=="Cosmos") : ?>
										<span>You will buy and sell Cosmos ATOM</span>
									<?php elseif($args['name']=="Shiba Inu") : ?>
										<span>You will buy and sell Shiba Inu SHIB coin</span>
									<?php else : ?>
										<span data-translate="Buy_header18_desc2"></span>
										<span data-translate="<?= $args['name'] ?>"></span>
									<?php endif; ?>
									<span data-translate="Buy_header18_desc3"></span>
								</p>
							</div>
						</div>
						<div class="whyBuyBox">
							<h3 style="color:#C45F53" data-translate="Buy_header19"></h3>
							<div class="innerBox" style="background-color: #C45F53;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon4.png" />
								<p>
									<span data-translate="Buy_header19_desc1"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
									<?php if($args['name']=="Avalanche ") : ?>
										<span>AVAX</span>
									<?php elseif($args['name']=="Shiba Inu") : ?>
										<span>coin</span>
									<?php endif; ?>
									<?php if($args['name']=="Amp" || $args['name']=="Crypterium" || $args['name']=="Fantom" || $args['name']=="Gala" || $args['name']=="Kusama" || $args['name']=="Loopring" || $args['name']=="Maker" || $args['name']== "Quant" || $args['name']== "SushiSwap" || $args['name']== "Terra" || $args['name']== "The Graph") : ?>
										<span data-translate="Buy_header19_desc2_a"></span>
									<?php else : ?>
										<span data-translate="Buy_header19_desc2_noA"></span>
									<?php endif; ?>
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="whyBuyBox box1">
							<h3 style="color:#6D9E8E" data-translate="Buy_header20"></h3>
							<div class="innerBox" style="background-color: #6D9E8E;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon5.png" />
								<p data-translate="Buy_header20_desc1" style="margin-bottom:0px;padding-bottom:0px"></p>
								<p>
									<?php if($args['name']=="Bitcoin"||$args['name']=="Bitcoin_Cash"||$args['name']=="Aave"||$args['name']=="Chainlink"
									||$args['name']=="Curve"||$args['name']=="Dai"||$args['name']=="Dogecoin"||$args['name']=="EOS"
									||$args['name']=="Litecoin"||$args['name']=="PAX_Gold"||$args['name']=="Stellar"||$args['name']=="Synthetix"
									||$args['name']=="Uniswap"||$args['name']=="USD_Coin") : ?>
										<span data-translate="Buy_header20_desc2_usd"></span>
									<?php elseif($args['name']=="API3") : ?>
										<span data-translate="Buy_header20_desc2_money"></span>
									<?php else : ?>
										<span data-translate="Buy_header20_desc2_asset"></span>
									<?php endif; ?>
								</p>
							</div>
						</div>
						<div class="whyBuyBox">
							<h3 style="color:#986471" data-translate="Buy_header21"></h3>
							<div class="innerBox" style="background-color: #E59994;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon6.png" />
								<p>
									<?php if($args['name']=="dYdX") : ?>
										<span data-translate="Buy_header21_desc1_dYdX"></span>
									<?php else : ?>
										<span data-translate="Buy_header21_desc1_normal"></span>
									<?php endif; ?>
									<?php if($args['name']=="Decentraland" || $args['name']=="Polygon") : ?>
										<span></span>
									<?php else : ?>
										<span data-translate="<?= $args['name'] ?>"></span>
									<?php endif; ?>
									<?php if($args['name']=="Axie Infinity"||$args['name']=="Cosmos"||$args['name']=="Decentraland") : ?>
										<span data-translate="<?= $args['ticker'] ?>"></span>
									<?php elseif($args['name']=="Polygon") : ?>
										<span>and purchase MATIC in Canada within minutes through a Canadian cryptocurrency trading platform.</span>
									<?php elseif($args['name']=="Shiba Inu") : ?>
										<span>coin</span>
									<?php endif; ?>
									<span data-translate="Buy_header21_desc2"></span>
								</p>
							</div>
						</div>
						<div class="whyBuyBox">
							<h3 style="color:#24397C" data-translate="Buy_header22"></h3>
							<div class="innerBox" style="background-color: #24397C;">
								<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon7.png" />
								<p data-translate="Buy_header22_desc1"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div id="learn-about" style="background-color: #F9F9F9; padding-bottom: 15px">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12" >
						<h1 style="margin-top:77px">
							<span data-translate="Buy_header23"></span>
							<span data-translate="<?= $args['name'] ?>"></span>
						</h1>
					</div>
				</div>
				<div class="line1"></div>
				<div class="row">
					<div class="col-lg-6 col-md-12" >
						<h2>
							<span data-translate="Buy_header24"></span>
							<span data-translate="<?= $args['name'] ?>"></span>
							<span data-translate="Buy_header24_1"></span>
							<?php if($args['name']=="Axie Infinity") : ?>
								<span>(AXS)</span>
							<?php endif; ?>
							<div style="background-color:#D4CCF7; height: 18px; margin-top:-20px;"></div>
						</h2>
					</div>
					<div class="col-lg-6 col-md-12" >
						<p id="introduction" data-translate="<?= $args['name'] ?>_intro" class="introSmall"></p>
						<button id="introBtn1" data-translate="Buy_header24_desc2" onclick="viewMore()" class="introButton1"></button>
						<button id="introBtn2" data-translate="Buy_header24_desc3" onclick="viewLess()" class="introButton2"></button>
					</div>
				</div>
				<div class="row" style="margin-top:90px; margin-bottom:50px;">
					<div class="col-lg-12 col-md-12" >
						<h2>
							<?php if($args['name']=="Bitcoin"||$args['name']=="Bitcoin_Cash"||$args['name']=="Aave"||$args['name']=="Chainlink"
							||$args['name']=="Curve"||$args['name']=="Dai"||$args['name']=="Dogecoin"||$args['name']=="EOS"
							||$args['name']=="Litecoin"||$args['name']=="PAX_Gold"||$args['name']=="Stellar"||$args['name']=="Synthetix"
							||$args['name']=="Uniswap"||$args['name']=="USD_Coin") : ?>
								<span data-translate="Buy_header25_purchase"></span>
							<?php else : ?>
								<span data-translate="Buy_header25_buy"></span>
							<?php endif; ?>
							<span data-translate="<?= $args['name'] ?>"></span>
							<span data-translate="Buy_header25_1"></span>
							<div style="background-color:#D4CCF7; height: 18px; margin-top:-20px;"></div>
						</h2>
						<div style="margin-top:50px;">
							<img src="<?= get_template_directory_uri() ?>/img/buy_coins/recommendBtn.png" style="margin-right:6px; width:39px; height:39px;" />
							<span data-translate="Buy_header26_1" class="recommendBth"></span>
						</div>
						<h3>
							<?php if($args['name']=="Hedera" || $args['name']=="Mirror Protocol" || $args['name']=="Chiliz" || $args['name']=="Fantom" || $args['name']=="Kusama" || $args['name']=="Ocean Protocol" || $args['name']== "SushiSwap") : ?>
								<span data-translate="Buy_header26_platforms"></span>
							<?php else : ?>
								<span data-translate="Buy_header26_platform"></span>
							<?php endif; ?>
						</h3>
						<p>
							<?php if($args['name']=="Axie Infinity") : ?>
								<span>If you’re new to the crypto world, the most convenient way for buying Axie Infinity and selling Axie Infinity</span>
							<?php elseif($args['name']=="Terra Classic") : ?>
								<span>If you’re new to the crypto world, the most convenient way for buying Terra Classic (LUNA) and selling Terra Classic</span>
							<?php else : ?>
								<span data-translate="Buy_header26_desc1"></span>
								<span data-translate="<?= $args['name'] ?>"></span>
							<?php endif; ?>
							<?php if($args['name']=="Kusama") : ?>
								<span>(KSM)</span>
							<?php elseif($args['name']=="Loopring") : ?>
								<span>(LRC)</span>
							<?php elseif($args['name']=="Terra") : ?>
								<span>(LUNA)</span>
							<?php elseif($args['name']=="Polygon") : ?>
								<span>MATIC</span>
							<?php elseif($args['name']=="Ethereum Classic") : ?>
								<span>ETC</span>
							<?php endif; ?>
							<span data-translate="Buy_header26_desc2"></span>
							<?php if($args['name']=="Tezos") : ?>
								<span>You can use multiple exchanges or buy and sell on the same exchange.</span>
							<?php endif; ?>
						</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-6 col-md-12" style="display:flex;align-items: center;">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon8.png" />
						<div>
							<h4 data-translate="Buy_header27"></h4>
							<p>
								<?php if($args['name']=="Hedera" || $args['name']=="Chiliz" || $args['name']=="Kusama" || $args['name']=="Axie Infinity") : ?>
									<span data-translate="Buy_header27_desc1_buy"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
									<span data-translate="Buy_header27_desc1_sell"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
								<?php elseif($args['name']=="Compound") : ?>
									<span data-translate="Buy_header27_desc1_purchase"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
									<span data-translate="Buy_header27_desc1_sell"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
								<?php elseif($args['name']=="Fantom") : ?>
									<span>Fast onboarding, buy FTM and sell FTM</span>
								<?php elseif($args['name']=="Loopring") : ?>
									<span>Fast onboarding, buy LRC and sell LRC</span>
								<?php elseif($args['name']=="Maker") : ?>
									<span>Fast onboarding, buy MKR and sell MKR</span>
								<?php elseif($args['name']=="SushiSwap") : ?>
									<span>Fast onboarding, buy SUSHI and sell SUSHI</span>
								<?php elseif($args['name']=="Polygon") : ?>
									<span>Fast onboarding, buy and sell Polygon MATIC</span>
								<?php elseif($args['name']=="Shiba Inu") : ?>
									<span>Fast onboarding, buy and sell Shiba Inu coin</span>
								<?php elseif($args['name']=="Terra") : ?>
									<span>Fast onboarding, buy LUNA and sell LUNA</span>
								<?php elseif($args['name']=="Terra Classic") : ?>
									<span>Fast onboarding, buy LUNA and sell LUNA</span>
								<?php else : ?>
									<span data-translate="Buy_header27_desc1_buySell"></span>
									<span data-translate="<?= $args['name'] ?>"></span>
								<?php endif; ?>
								<span data-translate="Buy_header27_desc2"></span>
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12" style="display:flex;align-items: center;">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon9.png" />
						<div>
							<h4 data-translate="Buy_header28"></h4>
							<p data-translate="Buy_header28_desc1"></p>
						</div>
					</div>
				</div>
				<div class="row box2">
					<div class="col-lg-6 col-md-12" style="display:flex;align-items: center;">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon10.png" />
						<div>
							<h4 data-translate="Buy_header29"></h4>
							<p data-translate="Buy_header29_desc1"></p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12" style="display:flex;align-items: center;">
						<img src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon11.png" />
						<div>
							<h4 data-translate="Buy_header30"></h4>
							<p data-translate="Buy_header30_desc1"></p>
						</div>
					</div>
				</div>

				
				<div class="row" style="margin-top:90px; margin-bottom:60px;">
					<div class="col-lg-12 col-md-12" >
						<?php if($args['name']=="Bitcoin") : ?>
							<h3 data-translate="Buy_header41"></h3>
							<p data-translate="Buy_header41_desc1" style="margin-bottom:50px;"></p>
							<h3 data-translate="Buy_header42"></h3>
							<p data-translate="Buy_header42_desc1" style="margin-bottom:90px;"></p>
						<?php elseif($args['name']=="Crypterium" || $args['name']=="Loopring" || $args['name']=="Ethereum Classic") : ?>
							<h3 data-translate="Buy_header31"></h3>
							<p data-translate="Buy_header31_desc1_card" style="margin-bottom:90px;"></p>
						<?php else : ?>
							<h3 data-translate="Buy_header31"></h3>
							<p data-translate="Buy_header31_desc1_cards" style="margin-bottom:90px;"></p>
						<?php endif; ?>
						<h2>
							<span data-translate="Buy_header32"></span>
							<span data-translate="<?= $args['name'] ?>"></span>
							<?php if($args['name']=="Bitcoin"||$args['name']=="Bitcoin_Cash"||$args['name']=="Aave"||$args['name']=="Chainlink"
							||$args['name']=="Curve"||$args['name']=="Dai"||$args['name']=="Dogecoin"||$args['name']=="EOS"
							||$args['name']=="Litecoin"||$args['name']=="PAX_Gold"||$args['name']=="Stellar"||$args['name']=="Synthetix"
							||$args['name']=="Uniswap"||$args['name']=="USD_Coin") : ?>
								<span>(</span>
								<span data-translate="<?= $args['name'] ?>"></span>
								<span>Usage)?</span>
							<?php else : ?>
								<span data-translate="Buy_header32_1"></span>
							<?php endif; ?>
							<div style="background-color:#D4CCF7; height: 18px; margin-top:-20px;"></div>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12" >
						<h3 data-translate="Buy_header33"></h3>
						<p data-translate="Buy_header33_desc1"></p>
					</div>
					<div class="col-lg-6 col-md-12" >
						<h3 data-translate="Buy_header34" class="box3"></h3>
						<p data-translate="Buy_header34_desc1"></p>
					</div>
				</div>
				<div class="row" style="margin-top:50px; margin-bottom:30px;">
					<div class="col-lg-12 col-md-12" >
						<h3 data-translate="Buy_header35"></h3>
						<p>
							<?php if($args['name']=="Compound") : ?>
								<span>You can either trade Compound or purchase COMP</span>
							<?php elseif($args['name']=="Filecoin") : ?>
								<span>You can either trade Filecoin or buy FIL</span>
							<?php elseif($args['name']=="Loopring") : ?>
								<span>You can either trade LRC or buy LRC</span>
							<?php elseif($args['name']=="OMG Network") : ?>
								<span>You can either trade OMG Network or purchase OMG Network</span>
							<?php elseif($args['name']=="Avalanche") : ?>
								<span>You can either trade Avalanche or purchase Avalanche</span>
							<?php elseif($args['name']=="Axie Infinity") : ?>
								<span>You can either trade Axie Infinity or purchase Axie Infinity AXS</span>
							<?php elseif($args['name']=="Cosmos") : ?>
								<span>You can either trade Cosmos or purchase Cosmos</span>
							<?php elseif($args['name']=="Decentraland") : ?>
								<span>You can either trade Decentraland or buy MANA</span>
							<?php elseif($args['name']=="Dogelon Mars") : ?>
								<span>You can either trade Dogelon Mars or purchase Dogelon Mars</span>
							<?php elseif($args['name']=="Polygon") : ?>
								<span>You can either trade Polygon MATIC or buy Polygon MATIC</span>
							<?php elseif($args['name']=="Shiba Inu") : ?>
								<span>You can either trade Shiba Inu SHIB or purchase Shiba Inu coin</span>
							<?php else : ?>
								<span data-translate="Buy_header35_desc1"></span>
								<span data-translate="<?= $args['name'] ?>"></span>
								<span data-translate="Buy_header35_desc2"></span>
								<span data-translate="<?= $args['name'] ?>"></span>
							<?php endif; ?>

							<?php if($args['name']=="API3") : ?>
								<span data-translate="Buy_header35_desc3_exchangeWallet"></span>
							<?php else : ?>
								<span data-translate="Buy_header35_desc3_exchange"></span>
							<?php endif; ?>
							<span data-translate="<?= $args['name'] ?>"></span>
							
							<?php if($args['name']=="Alchemy Pay") : ?>
								<span data-translate="Buy_header35_desc4_alchemy"></span>
							<?php else : ?>
								<span data-translate="Buy_header35_desc4_normal"></span>
							<?php endif; ?>
						</p>
						<p data-translate="Buy_header35_desc5"></p>
					</div>
				</div>

				
				<div class="row">
					<div class="col-lg-6 col-md-12 walletBox1" >
						<img style="padding:0 0 10px 0" src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon12.png" />
						<p data-translate="Buy_header36_desc1"></p>
					</div>
					<div class="col-lg-6 col-md-12 walletBox2">
						<img style="padding:0 0 10px 0" src="<?= get_template_directory_uri() ?>/img/buy_coins/buy_icon13.png" />
						<p data-translate="Buy_header37_desc1" style="color:#FFFFFF"></p>
					</div>
				</div>
				
				<div class="row" style="margin-top:50px; margin-bottom:50px;">
					<div class="col-lg-12 col-md-12" >
						<h3 data-translate="Buy_header38"></h3>
						<p>
							<span data-translate="Buy_header38_desc1"></span>
							<span data-translate="<?= $args['name'] ?>"></span>
							<?php if($args['name']=="dYdX") : ?>
								<span data-translate="Buy_header38_desc2_dYdX"></span>
							<?php elseif($args['name']=="Polygon") : ?>
								<span> MATIC </span>
								<span data-translate="Buy_header38_desc2_normal"></span>
							<?php elseif($args['name']=="Shiba Inu") : ?>
								<span> SHIB </span>
								<span data-translate="Buy_header38_desc2_normal"></span>
							<?php else : ?>
								<span data-translate="Buy_header38_desc2_normal"></span>
							<?php endif; ?>
						</p>
					</div>
				</div>
				<div class="row" style="margin-bottom:70px;">
					<div class="col-lg-12 col-md-12" >
						<h3 data-translate="Buy_header39"></h3>
						<p data-translate="Buy_header39_desc1"></p>
					</div>
				</div>

			</div>
		</div>

		
		<section class="getStart-area" style="padding-top:70px; padding-bottom:70px;background-image: none;">
			<div class="container custom-container">
				<div class="buyFooterText">
					<span data-translate="Buy_header40_desc1"></span>
					<a href="https://virgocx.ca/public_front/termsOofService.html" style="color: #6B47ED; text-decoration:underline;">
						https://virgocx.ca/public_front/termsOofService.html
					</a> 
					<span data-translate="Buy_header40_desc2"></span>
				</div>
			</div>
		</section>
	</div>


<style type="text/css">
#buy-coin .buy-coin-header {
	padding-top: 8rem;
	padding-bottom: 8rem;
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
	font-size: 48px;
    font-weight: 700;
}
#buy-steps h3 {
	font-size: 32px;
    font-weight: 700;
}
#buy-steps p {
	font-size: 18px;
}
#buy-steps .row {
	margin-bottom: 2.5rem;
}
#buy-steps #step-2 {
	margin-top: 5rem;
}

.lineGrey{
	margin-top: 40px;
	margin-bottom: 40px;
	color: #888888;
	font-size: 20px;
}
.buttonPurple{
	color: #FFFFFF;
	background-color: #6B47ED;
	border-radius: 50px;
	font-size: 20px;
	width: 335px;
	height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
	margin-bottom: 20px;
}
.recommendBth{
	color: #E3897D;
	font-size: 21px;
	font-weight: 700;
	line-height: 27px;
}

.whyBuyBox{
	width: 100%;
	background-color: #F7F5F3;
	border-radius: 20px;
	margin-top: 45px;
}
.innerBox{
	width: 100%;
	border-radius: 20px;
	padding: 0px 25px;    
	display: flex;
    flex-direction: column;
    align-items: center
}
#why-buy h2 {
	font-size: 48px;
    font-weight: 700;
	text-align: right;
}
#why-buy h3 {
	font-size: 28px;
    font-weight: 700;
	text-align: center;
	padding-top: 50px;
	padding-bottom: 40px;
}
#why-buy p {
	font-size: 18px;
	text-align: center;
	color: #FFFFFF;
	padding-bottom: 35px;
	padding-top: 10px;
}
#why-buy img {
	margin-top: -35px;
}

#learn-about h1{
	font-size: 48px;
    font-weight: 700;
	color: #66617F;
	text-align: center;
}
#learn-about h2{
	font-size: 36px;
    font-weight: 700;
	color: #66617F;
	display:inline-block;
	/* background-color:#D4CCF7;
	line-height: 0px;
	padding-bottom: 16px; */
}
#learn-about p{
	font-size: 18px;
	color: #616161;
}
#learn-about h3{
	font-size: 24px;
    font-weight: 700;
	color: #616161;
	margin-bottom: 17px;
}
#learn-about h4{
	font-size: 22px;
    font-weight: 700;
	color: #8B8BEA;
}
#learn-about img{
	margin-right: 20px
}
.walletBox1{
	margin-top: 20px;
	background-color:#EDD0D0; 
	border-radius: 32px 0px 0px 32px;
	padding: 30px 50px 30px 50px;
	display: flex;
    flex-direction: column;
    align-items: center;
	text-align: center;
}
.walletBox2{
	margin-top: 20px;
	background-color:#5944B1; 
	border-radius: 0px 32px 32px 0px;
	padding: 30px 50px 30px 50px;
	display: flex;
    flex-direction: column;
    align-items: center;
	text-align: center;
}
.line1{
	width:100px;
	height:6px;
	border-radius:6px;
	background-color: #6B47ED;
	margin: 0 auto;
	margin-bottom: 100px;
}


.item-explain {
	text-align: center;
	min-height: 220px;
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
.tag-line2{
	font-size: 24px;
	color: #6B47ED;
	font-weight: 700;
	margin-top: 40px;
}
.introSmall{
	height:145px; 
	overflow: hidden;
}
.introButton1{
	color: #6B47ED;
	border-width: 0px;
	background-color: #F9F9F9;
	padding-left: 0px;
}
.introButton2{
	color: #6B47ED;
	border-width: 0px;
	background-color: #F9F9F9;
	padding-left: 0px;
	display: none;
}
.box1{
	margin-top:180px
}
.box2{
	margin-top:50px
}
.buyFooterText{
	color: #979797;
	font-size: 16px;
	line-height: 22px;
}
@media screen and (max-width: 992px) {
	.box1{
		margin-top:50px
	}
	.box2{
		margin-top:5px
	}
	.box3{
		margin-top:30px
	}
}
@media screen and (max-width: 576px) {
	.walletBox1{
		margin-left: 20px;
		margin-right: 20px;
	}
	.walletBox2{
		margin-left: 20px;
		margin-right: 20px;
	}
}
</style>

<script type="text/javascript">
document.addEventListener( 'wpcf7invalid', function( event ) {
	alert('Please provide a valid email address');
});
function viewMore(){
	introduction.style.height="auto";
	introBtn1.style.display="none";
	introBtn2.style.display="block";
}
function viewLess(){
	introduction.style.height="145px";
	introBtn1.style.display="block";
	introBtn2.style.display="none";
}
</script>

</div>

<?php
get_footer();
