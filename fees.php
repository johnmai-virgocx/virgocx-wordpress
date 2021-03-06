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
            height: 100px;
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
                                <h2 data-translate="Fees_title1"></h2>
                                <p style="font-size: 20px;font-weight: 700;" data-translate="Fees_title1_desc"></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="hero-feature-item" href="#personalinformation">
                                    <img src="<?= get_template_directory_uri() ?>/img/home_fee_feature/feefeature1.png"
                                         class="img-fluid" alt="Personal information is secure" width="150"/>
                                    <h5 data-translate="Fees_title1_tag1"></h5>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="hero-feature-item" href="#fund">
                                    <img src="<?= get_template_directory_uri() ?>/img/home_fee_feature/feefeature2.png"
                                         class="img-fluid" alt="Personal information is secure" width="150"/>
                                    <h5 data-translate="Fees_title1_tag2"></h5>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="hero-feature-item" href="#system">
                                    <img src="<?= get_template_directory_uri() ?>/img/home_fee_feature/feefeature3.png"
                                         class="img-fluid" alt="Personal information is secure" width="150"/>
                                    <h5 data-translate="Fees_title1_tag3"></h5>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="hero-feature-item" href="#system">
                                    <img src="<?= get_template_directory_uri() ?>/img/home_fee_feature/feefeature4.png"
                                         class="img-fluid" alt="Personal information is secure" width="150"/>
                                    <h5 data-translate="Fees_title1_tag4"></h5>
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
                <p class="foot-note">
                    <span data-translate="Fees_note_first"></span>
                    <br/>
                    <span data-translate="Fees_note_second"></span>
                </p>

                <p class="foot-note">
                    <sup>1</sup>
                    <span data-translate="Fees_note1_1"></span>
                    <a href="https://virgocx.ca/public_front/termsOofService.html" data-translate="Fees_note1_2">
                    </a>
                    <span data-translate="Fees_note1_3"></span>
                </p>
                <p class="foot-note">
                    <sup>2</sup>
                    <span data-translate="Fees_note2_1"></span>
                    <a href="https://virgocx.zendesk.com/hc/en-us/articles/360052293232-Fiat-Rejection-Fees"
                       data-translate="Fees_note2_2"></a>
                    <span data-translate="Fees_note2_3"></span>
                </p>

                <p class="foot-note">
                    <sup>3</sup>
                    <span data-translate="Fees_note3"></span>
                </p>
            </div>
        </main><!-- #main -->

        <script type="text/javascript">
            (function ($) {
                $(document).ready(function () {
// **************************************************************************************
// **************************************************************************************
// langSwitcher

                    // Some variables for later
                    var dictionary = {},
                        currentLang = 'en',
                        langPageIndicator =0,
                        languagePair = {
                            "en": "/wp-content/themes/virgocx/languages/dictionary/en.json",
                            "zh": "/wp-content/themes/virgocx/languages/dictionary/zh.json"
                            // "en": "/wordpress/wp-content/themes/virgocx/languages/dictionary/en.json", //local
                            // "zh": "/wordpress/wp-content/themes/virgocx/languages/dictionary/zh.json" //local
                        };


                    // Checking lang on page change
                    function checkSessionLang() {
                        var lang = sessionStorage.getItem('lang');
                        if (lang){
                            currentLang = lang;
                        }else{
                            var browerLang = navigator.language || navigator.userLanguage;
                            if(browerLang !=null){
                                // switch between zh and en
                                currentLang = browerLang.indexOf('en')>=0?'en':browerLang.indexOf('zh')>=0?'zh':'en';
                            }else {
                                currentLang = 'en';
                            }
                            sessionStorage.setItem('lang', currentLang);
                            $("#lang").val(currentLang);
                        }




                        // none-onload action
                        let langLoader = async function () {
                            var url = window.location.href;
                            const promises = Object.keys(languagePair).map(async function (key) {
                                var langParam = '/' + key + '-';
                                if (url.indexOf(langParam) > -1) {
                                    if(key != currentLang){
                                        // redirection(url, currentLang);
                                        redirection(url, key,false,false);
                                    }
                                }
                            })
                            const result = await Promise.all(promises);
                        }
                        langLoader();


                    }
                    checkSessionLang();

                    // Object literal behaving as multi-dictionary
                    function loadLangJson() {
                        let fileLoader = async function () {
                            const promises = Object.keys(languagePair).map(async function (key) {
                                await $.getJSON(languagePair[key], function (data) {
                                    dictionary[key] = data;
                                });
                            });
                            const result = await Promise.all(promises);
                            const menuAttrUpdate = await menuUpdate();

                            // Set initial language to browser default language
                            setLang(dictionary[currentLang]);
                        }
                        fileLoader();
                    };
                    loadLangJson();




                    // Function for swapping dictionaries
                    function setLang(dictionary) {
                        $("[data-translate]").each(function(){
                            if($(this).is( "input" )){
                                $(this).attr('placeholder',dictionary[$(this).data("translate")])
                            } else if($(this).is( ".popper-trigger" )){
                                $(this).attr('data-content',dictionary[$(this).data("translate")])
                            }else{
                                $(this).text(dictionary[$(this).data("translate")])
                            }
                        })


                        // Contact form update
                        $("input").each(function(){
                            if(this.placeholder.indexOf('data translate')>= 0){
                                //check if data-translate attribute added
                                if(this.hasAttribute("data-translate")){
                                    $(this).attr('placeholder',dictionary[$(this).data("translate")])
                                }else{
                                    var string = this.placeholder;
                                    const  key = string.substring(15,string.length);
                                    $(this).attr("placeholder", dictionary[key]);
                                    this.setAttribute("data-translate", key);
                                }
                            }else{
                                if(this.value === 'Get Started'||this.value === '????????????'){
                                    $(this).attr('value',dictionary['frontpage_Started'])
                                }
                                // for email input
                                if(this.classList.contains('emailTranslate')){
                                    $(this).attr("placeholder", dictionary['frontpage_Email_Address']);
                                }


                            }
                        })
                    }

                    // Swap languages when menu changes
                    $("#lang").on("change", function () {
                        var language = $(this).val().toLowerCase();
                        if (dictionary.hasOwnProperty(language)) {
                            var url = window.location.href;
                            if(url.indexOf('/'+currentLang+'-')<0){
                                setLang(dictionary[language]);
                            }
                            redirection(url,language,true,false);
                            currentLang = language;
                        }
                    });

                    //OTC lang switcher
                    $(".lang-dropdown").on("click", function () {
                        var language = $(this)[0].getAttribute('value').toLowerCase();
                        if (dictionary.hasOwnProperty(language)) {
                            var url = window.location.href;
                            if(url && (url.indexOf('/'+currentLang+'-')<0)){
                                setLang(dictionary[language]);
                            }
                            $(dropdownMenuLinkEN).click();
                            redirection(url,language,true,false);
                            currentLang = language;
                        }
                    });

                    // set switcher to currentLang
                    function loadLangSwitcher() {
                        $("#lang").val(currentLang);
                    };

                    loadLangSwitcher();

                    //lang redirect
                    async function redirection(url,language,fromSwitcher, newTab) {

                        if (language == '' || language == null){
                            language = sessionStorage.getItem('lang')?sessionStorage.getItem('lang'): 'en';
                            currentLang = language;
                        }else{
                            sessionStorage.setItem('lang', language);
                            currentLang = language;
                        }
                        const promises = Object.keys(languagePair).map(async function (key) {
                            var langParam = '/' + key + '-';
                            if (url && (url.indexOf(langParam) > -1)) {
                                langPageIndicator = 1;
                                if(fromSwitcher){
                                    if(newTab){
                                        window.open (url.replace(langParam, '/' + language + '-'),'_blank').focus();
                                    }else{
                                        window.location.href = url.replace(langParam, '/' + language + '-');
                                    }
                                }
                            }
                        })
                        const result = await Promise.all(promises);

                        if (url && langPageIndicator == 0 &&  window.location.href !== url){
                            if(newTab){
                                window.open (url,'_blank').focus();
                            }else{
                                window.location.href = url;
                            }
                        }
                    }

                    // force hard coded href goes to right lang page
                    $('a').click(function(event) {
                        // avoid data-toggle and data-slide button
                        if([false, null, 'undefined',undefined].indexOf( this.attributes['data-toggle'])>=0 &&
                            [false, null, 'undefined',undefined].indexOf( this.attributes['data-slide'])>=0){
                            event.preventDefault();
                            const url =$(this).attr('href');
                            const  newTab = $(this).attr('target') == '_blank';
                            redirection(url,'',true,newTab);
                            return false; // for good measure
                        }
                    });


                    $('button').click(function(event) {
                        if($(this).attr('href') != undefined){
                            var url = $(this).attr('href');
                            const  newTab = $(this).attr('target') == '_blank';
                            redirection(url,'',true, newTab);
                        }
                    })
                    $('p').click(function(event) {
                        if($(this).attr('href') != undefined){
                            var url = $(this).attr('href');
                            const  newTab = $(this).attr('target') == '_blank';
                            redirection(url,'',true, newTab);
                        }
                    })


                    // replace footer data tag
                    async function menuUpdate(){
                        const headerPromises = $('.page_item a').each(function(i, obj) {
                            var key = $( obj ).text();
                            $( obj ).attr("data-translate",key);
                        });

                        const footerPromises = $('.menu-item a').each(function(i, obj) {
                            var key = $( obj ).text();
                            $( obj ).attr("data-translate",key);
                        });

                        const header = await Promise.all(headerPromises);
                        const footer = await Promise.all(footerPromises);
                    }

// langSwitcher ends
// **************************************************************************************
// **************************************************************************************


    //                 function renderTradingFee(tradingFee, title) {
    //                     const tableWrapper = document.createElement('div');
    //                     tableWrapper.classList.add('fee-table-wrapper');
    //                     titleTranslate ='Fees_header7';
    //                     let tradingFeeMaker1 = tradingFee.maker;
    //                     if(tradingFee.maker === '0'){
    //                         tradingFeeMaker1 = 'Free';
    //                     }

    //                     const theContent = `
	// 			<h4 data-translate="${titleTranslate}">${title}</h4>
	// 			<div class="table-responsive">
	// 				<table class="table">
	// 					<thead>
	// 					</thead>
	// 						<tr>
	// 							<th scope="row" >
	// 								<img style="display:inline" src="${_virgocx_theme_url}/img/fees_commission.png" width="40" alt="commissions" />
    //                                 <div style="display:inline" data-translate="Fees_Commission">Commission</div>
	// 							</th>
	// 							<td>
    //                                 <div data-translate="Fees_${tradingFeeMaker1}">${tradingFeeMaker1}</div>
	// 							</td>
	// 							<td>
	// 							</td>
	// 						</tr>
	// 					<tbody>
	// 					</tbody>
	// 				</table>
	// 			</div>
	// `

    //                     tableWrapper.innerHTML = theContent;
    //                     return tableWrapper;
    //                 }

                    function renderCryptoPerEntryTable(data, title) {
                        const tableWrapper = document.createElement('div');
                        tableWrapper.classList.add('fee-table-wrapper');
                        titleTranslate = 'Fees_header6';

                        const rowContent = data.fee.reduce(function (acc, entry) {
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
						${entry.fee === 0 ? '0' : entry.fee} ${entry.coinName}
					</td>
					<td>
						${entry.minQty} ${entry.coinName}
					</td>
					<td>
	                    <div style="display:inline" data-translate="Fees_Immediate">Immediate</div>
                        <sup>1,3</sup>
					</td>
				</tr>
		`;

                            return acc;
                        }, '');

                        const theContent = `
				<h4 data-translate="${titleTranslate}">${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col" data-translate="Fees_Fee">Fee</th>
								<th scope="col" data-translate="Fees_Minimum">Minimum</th>
								<th scope="col" data-translate="Fees_Processing_Time">Processing Time</th>
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
						<img src="${_virgocx_theme_url}/img/all_crypto_coin.png" width="40" alt="All Cryptocurrencies" />
						All Cryptocurrencies
					</th>
		`

                        const cellContent = data.fee.reduce(function (acc, entry) {
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
								<th scope="col" data-translate="Fees_Fee">Fee</th>
								<th scope="col" data-translate="Fees_Processing_Time">Processing Time</th>
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
                        titleTranslate = 'Fees_header5';
                        const rowContent = entries.reduce(function (acc, entry) {
                            let maximum = entry.maximum;
                            if (typeof maximum !== 'string') {
                                maximum = maximum >= 999999 ? 'Unlimited' : '$' + entry.maximum;
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
						<img style="display:inline" src="${entry.logo}" width="40" alt="${entry.transferWay}" />
                        <div style="display:inline" data-translate="Fees_${entry.transferWay}">${entry.transferWay}</div>
					</th>
					<td class="fee-content">
	                    <div style="display:inline" data-translate="Fees_${feeContent}">${feeContent}</div>
                        <sup>3</sup>
					</td>
					<td>
	                    <div style="display:inline" data-translate="Fees_Immediate">Immediate</div>
                        <sup>1,3</sup>
					</td>
				</tr>
		`;

                            return acc;
                        }, '');

                        const theContent = `
				<h4 data-translate="${titleTranslate}">${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col" data-translate="Fees_Fee">Fee</th>
								<th scope="col" data-translate="Fees_Processing_Time">Processing Time</th>
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
                        titleTranslate = 'Fees_header6';
                        if (title === "Deposit US Dollars") {
                            titleTranslate = 'Fees_header3';
                        } else if (title === "Withdraw US Dollars") {
                            titleTranslate = 'Fees_header4';
                        }
                        const rowContent = entries.reduce(function (acc, entry) {
                            let maximum = entry.maximum;
                            let minimum = entry.minimum;
                            if (typeof maximum !== 'string') {
                                maximum = maximum >= 999999 ? 'Unlimited' : '$' + entry.maximum+'/24h';
                            }

                            if (typeof entry.minimum !== 'string') {
                                minimum = minimum === 0 ? "-" : '$' + entry.minimum
                            }


                            let feeContent1 = 'Free';
                            let feeContent2 = '';
                            if (entry.fee !== 0) {
                                feeContent1 = `${entry.fee * 100}%`;
                                if (entry.minFee !== 0) {
                                    feeContent2 = `($${entry.minFee} Minimum)`;
                                }
                            }

                            // let processingTime = entry.processingTime;
                            // if (entry.transferWay === 'Wire Transfer') {
                            //     processingTime = 'Up to 24 hours<br />(typically within 45 minutes)<sup>1,2</sup>';
                            // } else if (entry.transferWay === 'Interac e-Transfer') {
                            //     if (title === "Deposit Canadian Dollars") {
                            //         titleTranslate = 'Fees_header1';
                            //         processingTime = 'Instantaneous<sup>1,2</sup>';
                            //     } else if (title === "Withdraw Canadian Dollars") {
                            //         titleTranslate = 'Fees_header2';
                            //         processingTime = '(typically within 45 minutes)<sup>1,2</sup>';
                            //     } else {
                            //         processingTime = '(typically within 45 minutes)<sup>1,2</sup>';
                            //     }
                            // }
                            let processingTime1 = '';
                            let processingTime2 = '';
                            if (entry.transferWay === 'Wire Transfer') {
                                processingTime1 = 'Up to 24 hours'
                                processingTime2 = '(typically within 45 minutes)';
                            } else if (entry.transferWay === 'Interac e-Transfer') {
                                if (title === "Deposit Canadian Dollars") {
                                    titleTranslate = 'Fees_header1';
                                    processingTime2 = 'Instantaneous';
                                } else if (title === "Withdraw Canadian Dollars") {
                                    titleTranslate = 'Fees_header2';
                                    processingTime2 = 'Instantaneous';
                                } else {
                                    processingTime2 = '(typically within 45 minutes)';
                                }
                            } else if (entry.transferWay === 'Bill Payment') {
                                    processingTime2 = 'billPaymentTime';
                            }

                            acc += `
                <tr>
					<th scope="row">
                        <img style="display:inline" src="${entry.logo}" width="40" alt="${entry.transferWay}"/>
                        <div style="display:inline" data-translate="Fees_${entry.transferWay}">${entry.transferWay}</div>
					</th>
					<td class="fee-content">
	                    <div data-translate="Fees_${feeContent1}">${feeContent1}</div>
	                    <div data-translate="Fees_${feeContent2}">${feeContent2}</div>
					</td>
					<td>
	                    <div data-translate="Fees_${minimum}">${minimum}</div>
					</td>
					<td >
	                    <div data-translate="Fees_${maximum}">${maximum}</div>
					</td>
					<td>
	                    <div data-translate="Fees_${processingTime1}">${processingTime1}</div>
	                    <div style="display:inline" data-translate="Fees_${processingTime2}">${processingTime2}</div>
                        <sup style="display:inline">1,2</sup>
					</td>
				</tr>
		`;

                            return acc;
                        }, '');

                        const theContent = `
				<h4 data-translate="${titleTranslate}">${title}</h4>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col" data-translate="Fees_Fee">Fee</th>
								<th scope="col" data-translate="Fees_Minimum">Minimum</th>
								<th scope="col" data-translate="Fees_Maximum">Minimum</th>
								<th scope="col" data-translate="Fees_Processing_Time">Processing Time</th>
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
                        // console.log('handle fee data', data);
                        if (!data.success) {
                            return;
                        }

                        const container = document.getElementById('fees-tables');
                        // console.log('container', container);

                        // Handle deposit candadian dollars
                        if (data.data.fundCanadianDollars) {
                            container.append(renderFeesPerEntryTable(data.data.fundCanadianDollars, 'Deposit Canadian Dollars'));
                        }

                        if (data.data.withdrawalCanadianDollars) {
                            container.append(renderFeesPerEntryTable(data.data.withdrawalCanadianDollars, 'Withdraw Canadian Dollars'));
                        }

                        // Handle deposit candadian dollars
                        if (data.data.fundUsDollars) {
                            container.append(renderFeesPerEntryTable(data.data.fundUsDollars, 'Deposit US Dollars'));
                        }

                        if (data.data.withdrawalUsDollars) {
                            container.append(renderFeesPerEntryTable(data.data.withdrawalUsDollars, 'Withdraw US Dollars'));
                        }

                        const fundCryptocurrency = [
                            {
                                logo: `${_virgocx_theme_url}/img/all_crypto_coin.png`,
                                transferWay: 'All Cryptocurrencies',
                                fee: 0,
                                minFee: 0,
                                minimum: 'N/A',
                                maximum: 'N/A',
                                processingTime: 'N/A',
                            }
                        ];
                        container.append(renderFundCryptoTable(fundCryptocurrency, 'Deposit Cryptocurrency'));

                        if (data.data.withdrawalCryptocurrency) {
                            container.append(renderCryptoPerEntryTable(data.data.withdrawalCryptocurrency, 'Withdraw Cryptocurrency'));
                        }

                        // container.append(renderTradingFee(data.data.tradingFee, 'Trading Fee'));

                        loadLangJson();
                    }

                //  fetch('https://wordpress.virgocx.org/transferFee/getList')//testvirgocx
                    // fetch('/wordpress/wp-content/themes/virgocx/feesData.json')
                    fetch('https://virgocx.ca/transferFee/getList')//production virgocx  
                        .then(res => res.json())
                        .then(data => handleFees(data));
                });
            })(jQuery);
        </script>

        <section class="getStart-area">
            <div class="container custom-container">
                <h3 data-translate="Fees_title2"></h3>
                <div class="getStart-content get-started-content">
                    <span data-translate="Fees_Email"></span>
                    <?= do_shortcode('[contact-form-7 id="78" title="Homepage Get Started"]') ?>
                </div>
            </div>
        </section>

    </div>
<?php
get_footer();
