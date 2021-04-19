<?php
/**
 * Template Name: Fees page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

<style type="text/css">
#fees-content .hero-area-wrapper {
	padding: 0 0 3rem 0;
	background-color: #f8f7fe;
	color: #66617f;
	background-image: url(/wp-content/themes/virgocx/img/bg.png);
	background-position: right;
	background-repeat: inherit;
	height: 400px;
}

#fees-content .hero-area {
	position: relative;
}

#fees-content .hero-box {
	padding: 40px 0 40px 0;
}

#fees-content .hero-box img {
	height: 85px;
}

#fees-content tbody {
	font-size: 0.8rem;
}

#fees-content .coin-col {
	font-size: 0.8rem;
	padding-left: 1rem;
}

#fees-content .fee-content {
	color: rgb(0, 206, 171);
}

#fees-content .foot-note {
	font-size: 0.8rem;
}

@media screen and (max-width: 992px) {
	.hero-feature-item {
		margin-top: 1rem;
	}

	#fees-primary {
		padding-top: 20rem;
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
	#fees-primary {
		padding-top: 40rem;
	}
}

/*
====================================
Xtra Small Screen - Small Mobile
====================================
*/

@media screen and (max-width: 576px) {
	#fees-primary {
		padding-top: 40rem;
	}
}
</style>
</style>
<div id="fees-content">
	<div class="hero-area-wrapper">
		<div class="custom-container hero-area">
			<div class="hero-space">
			</div>
			<div class="hero-box">
				<div class="container">
					<div class="row justify-content-md-center">
							<div class="fees-header">
								<h2>Fees</h2>
								<p>Enjoy low fees with full transparency from VirgoCX.</p>
							</div>
					</div>

					<div class="row align-items-center">
						<div class="col-lg-3 col-md-6 d-flex justify-content-center">
							<div class="hero-feature-item" href="#personalinformation">
								<img src="<?= get_template_directory_uri() ?>/img/fees_zero_fees.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Zero Trading Fee</h5>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-flex justify-content-center">
							<div class="hero-feature-item" href="#fund">
								<img src="<?= get_template_directory_uri() ?>/img/fees_impeccable_security.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Impeccable Security</h5>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-flex justify-content-center">
							<div class="hero-feature-item" href="#system">
								<img src="<?= get_template_directory_uri() ?>/img/fees_fiat_payment.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Efficient Fiat Payment</h5>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-flex justify-content-center">
							<div class="hero-feature-item" href="#system">
								<img src="<?= get_template_directory_uri() ?>/img/fees_regulated.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Fully Regulated Service</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<main id="fees-primary" class="site-main background-grey">
		<div class="custom-container">
			<div id="fees-tables">
			</div><!-- end of custom container -->

			<p class="foot-note"><sup>1</sup>Processing time refers to the amount of time needed by VirgoCX staff to process your transaction. Fiat currency transactions may be further delayed by banks and/or Interac for reasons beyond VirgoCX’s control. Wire transfer requests submitted after our wire transfer cut-off time or on a weekend will be processed on the next working day. Furthermore, wire transfer transactions requested on US/Canada statutory or banking holidays will be processed on the next working day. Cryptocurrency networks may become congested and during such times of congestion, transactions may require significantly longer times to settle. Further delays may result from VirgoCX internal reviews or other reasons as stated within our <a href="https://www.virgocx.ca/termsOofService.html">Terms of Service</a>.</p>
			<p class="foot-note"><sup>2</sup>Please see our <a href="https://virgocx.zendesk.com/hc/en-us/articles/360052293232-Fiat-Rejection-Fees">Other Fees</a> page for fiat currency rejection fees</p>

			<p class="foot-note"><sup>3</sup>Transaction/gas fees will be charged by the respective networks. Fees charged by VirgoCX will cover all network transaction/gas fees for outbound (withdrawal) transactions. Please be aware that various cryptocurrency networks may become congested from time to time and will cause delays beyond VirgoCX’s control.</p>
		</div>
	</main><!-- #main -->

	<script type="text/javascript">

function renderTradingFee(tradingFee, title) {
	const tableWrapper = document.createElement('div');
	tableWrapper.classList.add('fee-table-wrapper');

	const theContent = `
				<h4>${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
						</thead>
							<tr>
								<th scope="row">
									<img src="${_virgocx_theme_url}/img/fees_commission.png" width="40" alt="commissions" />
									Commission
								</th>
								<td>
									<span>${tradingFee.maker === '0' ? 'Free' : tradingFee.maker}</span>
								</td>
								<td>
								</td>
							</tr>
						<tbody>
						</tbody>
					</table>
				</div>
	`

	tableWrapper.innerHTML = theContent;
	return tableWrapper;
}
function renderCryptoPerEntryTable(data, title) {
	const tableWrapper = document.createElement('div');
	tableWrapper.classList.add('fee-table-wrapper');

	const rowContent = data.fee.reduce(function(acc, entry) {
		acc += `
				<tr>
					<th scope="row" class="d-flex">
						<img src="${entry.image}" height="40" width="40" alt="entry.coinName" />
						<div class="coin-col">
							${entry.full_name}
							<br />
							${entry.coinName}
						</div>
					</th>
					<td class="fee-content">
						${entry.fee === 0 ? 'Free' : entry.fee} ${entry.coinName}
					</td>
					<td>
						${entry.minQty} ${entry.coinName}
					</td>
					<td>
						Immediate<sup>1,3</sup>
					</td>
				</tr>
		`;

		return acc;
	}, '');

	const theContent = `
				<h4>${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Fee</th>
								<th scope="col">Minimum</th>
								<th scope="col">Processing Time</th>
							</tr>
						</thead>
						<tbody>
							${rowContent}
						</tbody>
					</table>
				</div>
	`

	tableWrapper.innerHTML = theContent;
	return tableWrapper;
}
function renderFeesBundle(data, title) {
	const tableWrapper = document.createElement('div');
	tableWrapper.classList.add('fee-table-wrapper');

	let rowContent = `
			<tr>
					<th class="col-3" scope="row">
						<img src="${_virgocx_theme_url}/img/all_crypto_coin.png" width="40" alt="All cryptocurrency" />
						All Cryptocurrency
					</th>
		`

	const cellContent = data.fee.reduce(function(acc, entry) {
		acc += `
			<div class="crypto-fee">
				<img src="${entry.image}" width="40" alt="${entry.fee}" />
				${entry.fee}
			</div>
		`;

		return acc;
	}, '');
	rowContent += `
		<td class="col-6">
			<div class="crypto-fee-wrapper">
				${cellContent}
			</div>
		</td>
		<td>
			${data.processingTime}
		</td>
	</tr>
		`;

	const theContent = `
				<h4>${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Fee</th>
								<th scope="col">Processing Time</th>
							</tr>
						</thead>
						<tbody>
							${rowContent}
						</tbody>
					</table>
				</div>
	`

	tableWrapper.innerHTML = theContent;
	return tableWrapper;
}

function renderFundCryptoTable(entries, title) {
	const tableWrapper = document.createElement('div');
	tableWrapper.classList.add('fee-table-wrapper');

	const rowContent = entries.reduce(function(acc, entry) {
		let maximum = entry.maximum;
		if (typeof maximum !== 'string') {
			maximum = maximum === 99999 ? 'Unlimited' : '$' + entry.maximum;
		}

		let feeContent = 'Free';
		if (entry.fee !== 0) {
			feeContent = `${entry.fee * 100}%`;
			if (entry.minFee !== 0) {
				feeContent += `<br />($${entry.minFee} Minimum)`;
			}
		}

		acc += `
				<tr>
					<th scope="row">
						<img src="${entry.logo}" width="40" alt="${entry.transferWay}" />
						${entry.transferWay}
					</th>
					<td class="fee-content">
						${feeContent}<sup>3</sup>
					</td>
					<td>
						Immediate<sup>1,3</sup>
					</td>
				</tr>
		`;

		return acc;
	}, '');

	const theContent = `
				<h4>${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Fee</th>
								<th scope="col">Processing Time</th>
							</tr>
						</thead>
						<tbody>
							${rowContent}
						</tbody>
					</table>
				</div>
	`

	tableWrapper.innerHTML = theContent;
	return tableWrapper;
}
function renderFeesPerEntryTable(entries, title) {
	const tableWrapper = document.createElement('div');
	tableWrapper.classList.add('fee-table-wrapper');

	const rowContent = entries.reduce(function(acc, entry) {
		let maximum = entry.maximum;
		if (typeof maximum !== 'string') {
			maximum = maximum === 99999 ? 'Unlimited' : '$' + entry.maximum;
		}

		let feeContent = 'Free';
		if (entry.fee !== 0) {
			feeContent = `${entry.fee * 100}%`;
			if (entry.minFee !== 0) {
				feeContent += `<br />($${entry.minFee} Minimum)`;
			}
		}

		let processingTime = entry.processingTime;
		if (entry.transferWay === 'Wire Transfer') {
			processingTime = 'Up to 24 hours<br />(typically Within 45 minutes)<sup>1,2</sup>';
		} else if (entry.transferWay === 'Interac e-Transfer') {
			if (title === "Fund Canadian Dollars") {
				processingTime = 'Instantaneous<sup>1,2</sup>';
			} else if (title === "Withdrawal Canadian Dollars" ) {
				processingTime = '(typically Within 45 minutes)<sup>1,2</sup>';
			} else {
				processingTime = '(typically Within 45 minutes)<sup>1,2</sup>';
			}
		}

		acc += `
				<tr>
					<th scope="row">
						<img src="${entry.logo}" width="40" alt="${entry.transferWay}" />
						${entry.transferWay}
					</th>
					<td class="fee-content">
						${feeContent}
					</td>
					<td>
						${typeof entry.minimum === 'string' ? entry.minimum : '$' + entry.minimum}
					</td>
					<td>
						${maximum}
					</td>
					<td>
						${processingTime}
					</td>
				</tr>
		`;

		return acc;
	}, '');

	const theContent = `
				<h4>${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Fee</th>
								<th scope="col">Minimum</th>
								<th scope="col">Maximum</th>
								<th scope="col">Processing Time</th>
							</tr>
						</thead>
						<tbody>
							${rowContent}
						</tbody>
					</table>
				</div>
	`

	tableWrapper.innerHTML = theContent;
	return tableWrapper;
}

function handleFees(data) {
	console.log('handle fee data', data);
	if (!data.success) {
		return;
	}

	const container = document.getElementById('fees-tables');
	console.log('container', container);

	// Handle deposit candadian dollars
	if (data.data.fundCanadianDollars) {
		container.append(renderFeesPerEntryTable(data.data.fundCanadianDollars, 'Fund Canadian Dollars'));
	}

	if (data.data.withdrawalCanadianDollars) {
		container.append(renderFeesPerEntryTable(data.data.withdrawalCanadianDollars, 'Withdrawal Canadian Dollars'));
	}

	// Handle deposit candadian dollars
	if (data.data.fundUsDollars) {
		container.append(renderFeesPerEntryTable(data.data.fundUsDollars, 'Fund US Dollars'));
	}

	if (data.data.withdrawalUsDollars) {
		container.append(renderFeesPerEntryTable(data.data.withdrawalUsDollars, 'Withdrawal US Dollars'));
	}

	const fundCryptocurrency = [
	{
		logo: `${_virgocx_theme_url}/img/all_crypto_coin.png`,
		transferWay: 'All Cryptocurrency',
		fee: 0,
		minFee: 0,
		minimum: 'N/A',
		maximum: 'N/A',
		processingTime: 'N/A',
	}
	];
	container.append(renderFundCryptoTable(fundCryptocurrency, 'Deposit Cryptocurrency'));

	if (data.data.withdrawalCryptocurrency) {
		container.append(renderCryptoPerEntryTable(data.data.withdrawalCryptocurrency, 'Withdrawal Cryptocurrency'));
	}

	container.append(renderTradingFee(data.data.tradingFee, 'Trading Fee'));
}

//fetch('/transferFee/getList')
fetch('https://virgocx.ca/transferFee/getList')
	.then(res => res.json())
	.then(data => handleFees(data));

	</script>

	<section class="getStart-area">
			<div class="container custom-container">
					<h3>Buy and Sell Cryptocurrency Today</h3>
					<div class="getStart-content get-started-content">
							<span>Email Address</span>
							<?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started"]') ?>
					</div>
			</div>
	</section>

</div>
<?php
get_footer();
