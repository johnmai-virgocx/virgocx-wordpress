(function ($) {
    $(document).ready(function () {
        // Scroll to Top
        jQuery('.scrolltotop').click(function () {
            jQuery('html').animate({'scrollTop': '0px'}, 800);
            return false;
        });

        jQuery(window).scroll(function () {
            var upto = jQuery(window).scrollTop();
            if (upto > 500) {
                jQuery('.scrolltotop').fadeIn();
            } else {
                jQuery('.scrolltotop').fadeOut();
            }
        });

        var forEach = function (t, o, r) {
            if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t); else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
        };
        var hamburgers = document.querySelectorAll(".hamburger");
        if (hamburgers.length > 0) {
            forEach(hamburgers, function (hamburger) {
                hamburger.addEventListener("click", function () {
                    this.classList.toggle("is-active");
                }, false);
            });
        }
        ;

        function initLivePricesCarousel() {
            $("#myCarousel").carousel({
                interval: false,
            });

            $(".carousel .carousel-item").each(function () {
                var minPerSlide = 4;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(":first");
                }
                next.children(":first-child").clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(":first");
                    }

                    next.children(":first-child").clone().appendTo($(this));
                }
            });
        }

        let _virgo_selected_base = 'BTC';
        let _virgo_selected_quote = 'CAD';
        const baseInput = document.getElementById('base-input');
        const quoteInput = document.getElementById('quote-input');

        function handleBaseValueChange(rawValue) {
            const value = parseFloatInput(rawValue);
            const thePair = getSelectedPair();
            // console.log('base input key up', {
            //     value,
            //     thePair,
            // });
            if (!thePair) {
                return;
            }

            quoteInput.value = (thePair * value).toFixed(2);
        }

        function handleQuoteValueChange(rawValue) {
            const value = parseFloatInput(rawValue);
            const thePair = getSelectedPair();
            // console.log('quote value changed', {
            //     value,
            //     thePair,
            // });

            if (!thePair) {
                return;
            }

            // console.log('going to change the base input value to ', value / thePair);
            baseInput.value = value / thePair;
        }

        if (baseInput) {
            baseInput.addEventListener('keyup', function (event) {
                handleBaseValueChange(event.target.value);
            });


            quoteInput.addEventListener('keyup', function (event) {
                handleQuoteValueChange(event.target.value);
            });

            fetchPrices();
            //setInterval(fetchPrices, 10000);

            fetchLivePrices();
        }

        const baseValue = document.getElementById('base-value');
        const quoteValue = document.getElementById('quote-value');

        function getSelectedPair() {
            return window._pairs[`${baseValue.value}/${quoteValue.value}`];
        }

        function parseFloatInput(raw) {
            if (!raw) {
                return;
            }

            const value = parseFloat(raw);
            if (isNaN(value)) {
                alert('Please enter a number');
                throw new Error('Not a valid number');
            }

            return value
        }

        function handleConversion(data) {
            if (!data.success) {
                return;
            }

            // Format the price into pairs
            const pairs = {};
            const cryptoToFiatPairs = {};
            data.data.marketList.forEach(function (list) {
                list.marketInfoList.forEach(function (crypto) {
                    const pair = `${crypto.coinName}/${list.coinName}`;
                    pairs[pair] = parseFloat(crypto.lastPrice);

                    if (cryptoToFiatPairs[crypto.coinName]) {
                        cryptoToFiatPairs[crypto.coinName].push(list.coinName);
                    } else {
                        cryptoToFiatPairs[crypto.coinName] = [list.coinName];
                    }
                })
            });

            // console.log('all the pairs', pairs, cryptoToFiatPairs);

            // Render it if its the first time
            if (!window._pairs) {
                renderConversion(pairs, cryptoToFiatPairs, _virgo_selected_base, _virgo_selected_quote);
            }

            window._pairs = pairs;
            window._cryptoToFiatPairs = cryptoToFiatPairs;
        }

        function renderConversion(pairs, cryptoToFiatPairs, selectedBase, selectedQuote) {
            // Render the crypto option
            const cryptoOptions = document.getElementById('crypto-options');
            cryptoOptions.innerHTML = '';

            const cryptoSelected = document.getElementById('crypto-selected');
            cryptoSelected.innerHTML = '';
            Object.keys(cryptoToFiatPairs).forEach(function (coinName) {
                const li = document.createElement('li');
                li.classList.add('input-option');
                li.dataset.value = coinName;
                const image = `<img src="${_virgocx_theme_url}/img/${coinName}.png" /> ${coinName}`;
                li.innerHTML = image;

                // console.log('going through coin name', {
                //     coinName,
                //     selectedBase,
                // })
                if (coinName === selectedBase) {
                    cryptoSelected.innerHTML = image;
                    // console.log('going to add', coinName, cryptoSelected, li);
                }
                cryptoOptions.append(li);
            })

            const fiatOptions = document.getElementById('fiat-options');
            fiatOptions.innerHTML = '';

            const fiatSelected = document.getElementById('fiat-selected');
            fiatSelected.innerHTML = '';

            const fiats = cryptoToFiatPairs[selectedBase];

            // Render the fiat
            function renderFiatOption(fiats, selectedQuote) {
                fiats.forEach(function (name) {
                    const li = document.createElement('li');
                    li.classList.add('input-option');
                    li.dataset.value = name;
                    const image = `<img src="${_virgocx_theme_url}/img/${name}.png" /> ${name}`;
                    li.innerHTML = image;

                    if (name === selectedQuote) {
                        fiatSelected.innerHTML = image;
                    }
                    fiatOptions.append(li);
                });
            }

            renderFiatOption(fiats, selectedQuote);

            // Make the dropdown work
            baseDropdown();
            quoteDropdown();
        }

        function fetchPrices() {
            // fetch('/wordpress/wp-content/themes/virgocx/marketList.json')
            fetch('/market/list')
                .then(res => res.json())
                .then(data => handleConversion(data))
        }

        function baseDropdown() {
            // Set
            var main = $("div.mm-dropdown .selected-option");
            var li = $("div.mm-dropdown > ul > li.input-option");
            var default_text = `Select`;
            var ul = $("div.mm-dropdown > ul");
            ul.hide();
            li.show();
            var isShow = false;
            

            // Animation
            main.click(function () {
                main.html(default_text);
                // li.toggle("fast");
                if(isShow==true){
                    ul.hide();
                    isShow=false;
                }else{
                    ul.show();
                    isShow=true;
                }
            });

            // Insert Data
            li.click(function () {
                // hide
                // li.toggle("fast");
                if(isShow==true){
                    ul.hide();
                    isShow=false;
                }else{
                    ul.show();
                    isShow=false;
                }
                var livalue = $(this).data("value");
                var lihtml = $(this).html();
                main.html(lihtml);
                baseValue.value = livalue;

                _virgo_selected_base = livalue;
                _virgo_selected_quote = window._cryptoToFiatPairs[livalue][0];
                renderConversion(window._pairs, window._cryptoToFiatPairs, _virgo_selected_base, _virgo_selected_quote);
                baseInput.value = '';
                quoteInput.value = '';
            });
        }

        function quoteDropdown() {
            // Set
            var main = $("div.mm-dropdown2 .selected-option");
            var li = $("div.mm-dropdown2 > ul > li.input-option");
            var default_text = `Select`;

            // Animation
            main.click(function () {
                main.html(default_text);
                li.toggle("fast");
            });

            // Insert Data
            li.click(function () {
                // hide
                li.toggle("fast");
                var livalue = $(this).data("value");
                var lihtml = $(this).html();
                main.html(lihtml);
                quoteValue.value = livalue;

                _virgo_selected_quote = livalue;
                handleQuoteValueChange(quoteInput.value);
            });
        }

        function renderLivePrices(prices) {
            const itemsWrapper = document.getElementById('carousel-items-wrapper');

            // Empty it
            itemsWrapper.innerHTML = '';

            const tradingMapping = {
                'btc/cad': '/page#/advancedTrade/24',
                'eth/cad': '/page#/advancedTrade/25',
                'usdt/cad': '/page#/advancedTrade/26',
                'ltc/cad': '/page#/advancedTrade/30',
                'eos/cad': '/page#/advancedTrade/31',
                'paxg/cad': '/page#/advancedTrade/34',
                'xlm/cad': '/page#/advancedTrade/56',
                'usdc/cad': '/page#/advancedTrade/55',
                'dai/cad': '/page#/advancedTrade/58',
                'uni/cad': '/page#/advancedTrade/59',
                'doge/cad': '/page#/advancedTrade/57',
                'bch/cad': '/page#/advancedTrade/29',
                'btc/usd': '/page#/advancedTrade/32',
                'usdt/usd': '/page#/advancedTrade/33',
                'link/cad': '/page#/advancedTrade/60',
                'crv/cad': '/page#/advancedTrade/61',
                'aave/cad': '/page#/advancedTrade/62',
                'snx/cad': '/page#/advancedTrade/64',
                'knc/cad': '/page#/advancedTrade/65',
                'bat/cad': '/page#/advancedTrade/66',
                'cmp/cad': '/page#/advancedTrade/67',
            }

            let index = 1;
            prices.forEach(function (price) {
                const link = tradingMapping[price.symbol.toLowerCase()];

                // console.log('go through each price', price)
                const item = document.createElement('div');
                item.classList.add('carousel-item');
                if (index === 1) {
                    item.classList.add('active');
                }
                index++;

                item.id = `item-${price.symbol.replace('/', '-')}`;

                if (price.changeRate.charAt(0) == '-') {
                    item.innerHTML = `
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="bcl-item">
                                    <a href="${link}" class="pg-top">
                                        <div class="pg-img">
                                            <img src="${price.logo}" alt="images not found" />
                                        </div>
                                        <div class="pg-text">
                                            <div class="d-flex justify-content-between">
                                              <h5>${price.fullName}</h5>
                                              <h5>${price.symbol}</h5>
                                            </div>
                                            <p>
                                                <strong>
													${price.changeRate} 
													<img src="${_virgocx_theme_url}/img/arrowD.svg" alt="images not found" /> 
												</strong>
												
												<span>
													$${price.lastPrice}
												</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
        	`
                } else {
                    item.innerHTML = `
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="bcl-item">
                                    <a href="${link}" class="pg-top">
                                        <div class="pg-img">
                                            <img src="${price.logo}" alt="images not found" />
                                        </div>
                                        <div class="pg-text">
                                            <div class="d-flex justify-content-between">
                                              <h5>${price.fullName}</h5>
                                              <h5>${price.symbol}</h5>
                                            </div>
                                            <p>
                                                <strong>
													${price.changeRate} 
													<img src="${_virgocx_theme_url}/img/arrowU.svg" alt="images not found" /> 
												</strong>
												
												<span>
													$${price.lastPrice}
												</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
        `
                }
                itemsWrapper.append(item);
            });

            initLivePricesCarousel();
        }

        function handleLivePrices(data) {
            if (!data.success || !data.data.indexList) {
                return;
            }

            renderLivePrices(data.data.indexList);
        }

        function fetchLivePrices() {
            // fetch('/wordpress/wp-content/themes/virgocx/indexPage.json')
            fetch('/indexPage')
                .then(res => res.json())
                .then(data => handleLivePrices(data))
        }


        // Registration form success message
        document.addEventListener('wpcf7mailsent', function (event) {
            alert('Thanks, its all done!');

            const getStartedForm = [78];
            if (getStartedForm.indexOf(parseInt(event.detail.contactFormId, 10)) !== -1) {
                const emailEl = event.target.querySelector('.wpcf7-email');
                window.location.href = `/page#/register?email=${emailEl.value}`;
            }

            //jQuery('#myModal2').modal('show'); //this is the bootstrap modal popup id
        }, false);

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
                            redirection(url, key,false);
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
                    if(this.value === 'Get Started'||this.value === '一键开启'){
                        $(this).attr('value',dictionary['frontpage_Started'])
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
                redirection(url,language,true);
                currentLang = language;
            }
        });

        // set switcher to currentLang
        function loadLangSwitcher() {
            $("#lang").val(currentLang);
        };

        loadLangSwitcher();

        //lang redirect
        async function redirection(url,language,fromSwitcher) {
            if (language == '' || language == null){
                language = sessionStorage.getItem('lang')?sessionStorage.getItem('lang'): 'en';
                currentLang = language;
            }else{
                sessionStorage.setItem('lang', language);
                currentLang = language;
            }
            const promises = Object.keys(languagePair).map(async function (key) {
                var langParam = '/' + key + '-';
                if (url.indexOf(langParam) > -1) {
                    langPageIndicator = 1;
                    if(fromSwitcher){
                        window.location = url.replace(langParam, '/' + language + '-');
                    }
                }
            })
            const result = await Promise.all(promises);

            if (langPageIndicator == 0 &&  window.location.href !== url){
                window.location.href = url;
            }
        }

        // force hard coded href goes to right lang page
        $('a').click(function(event) {
            // avoid data-toggle and data-slide button
            if([false, null, 'undefined',undefined].indexOf( this.attributes['data-toggle'])>=0 &&
                [false, null, 'undefined',undefined].indexOf( this.attributes['data-slide'])>=0){
                event.preventDefault();
                const url =$(this).attr('href');
                redirection(url,'',true);
                return false; // for good measure
            }
        });



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


// affilicat sesstion detector start

        function checkAffiliateSessionId(){
            var url = window.location.href;
            if(url.indexOf('affiliate_id')>=0 && url.indexOf('offer_id')>=0 ){
                var affIdIndexStartingPoint = url.indexOf('&affiliate_id')+14;
                var affIdIndexEnds = url.length;
                var offerIdIndexStartingPoint = url.indexOf('offer_id')+9;
                var offerIdIndexEnds = url.indexOf('&affiliate_id');
                var offerId = url.slice(offerIdIndexStartingPoint,offerIdIndexEnds);
                var affId = url.slice(affIdIndexStartingPoint,affIdIndexEnds);
                sessionName = 'offerId_affId';
                sessionStorage.setItem(sessionName, offerId+','+affId+','+Date.parse(Date()));
            }
        };
        checkAffiliateSessionId();
// affilicat sesstion detector
// **************************************************************************************
// **************************************************************************************





    });
})(jQuery);
