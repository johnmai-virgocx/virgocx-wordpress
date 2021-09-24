<?php

/**
 * Template Name: NFT home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where trending_virgocx = 1', ARRAY_A);
get_header('otc');
?>
<div class="nft-home-container">
  <div class="banner-container">
    <div class="content">
      <div class="title">
        <span class="gold" data-translate="NFT_Find">FIND</span>
        <span data-translate="NFT_Comma">,</span>
        <span class="gold" data-translate="NFT_Trade">TRADE</span>
        <span data-translate="NFT_And">, and </span>
        <span class="gold" data-translate="NFT_Collect">COLLECT</span>
        <span data-translate="NFT_Collect_zh"></span>
        <span class= "gold" data-translate="NFT_Collect_zh2"></span>
        <span data-translate="NFT_Valuable">valuable NFTs with our Brokerage Service.</span>
      </div>
      <div class="action">
          <button class="buy" data-translate="NFT_BuyNFT"
                  href="https://forms.office.com/Pages/ResponsePage.aspx?id=UGpbGTMbYkSNfBKfZ4hKr3630pdCL95AhPslXfIR9odUOUsxWkg1MFhCTTVVQVE0UFNSRzlUVUxNRy4u" target ="_blank">Buy
              an NFT</button>
        <button class="sell" data-toggle="modal" data-target="#myModal" data-translate="NFT_SellNFT">Sell your
          NFT</button>
      </div>
    </div>

    <img class="banner-image" src="<?= get_template_directory_uri() ?>/img/nft/Banner_Desktop.svg" alt="">
  </div>

  <!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p data-translate="NFT_ModalTitle_1">We would like to know more about your NFT. </p>
          <p data-translate="NFT_ModalTitle_2">I would like to :</p>
          <p
            onclick="window.open('https://forms.office.com/Pages/ResponsePage.aspx?id=UGpbGTMbYkSNfBKfZ4hKr3630pdCL95AhPslXfIR9odUREZGVEhVTlE5NzJSMVRSSUE2RkNWREE0Sy4u','_blank').focus();"
            data-translate="NFT_ModalOption_1">
            Sell an NFT from existing collection</p>
          <p
            onclick="window.open('https://forms.office.com/Pages/ResponsePage.aspx?id=UGpbGTMbYkSNfBKfZ4hKr3630pdCL95AhPslXfIR9odUMEI0Mjk2UUU0R05KRVpJSjVHWUVVOUZZRy4u','_blank').focus();"
            data-translate="NFT_ModalOption_2">
            Deploy my own collection</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal -->
  </div>




  <div class="slider-container">
    <h3 data-translate="NFT_TrendingNFT">Trending on VirgoCX</h3>

    <div class="slider-bg">
      <img class="top-image" src="<?= get_template_directory_uri() ?>/img/nft/star.svg" alt="">
      <img class="bottom-image" src="<?= get_template_directory_uri() ?>/img/nft/bg_element.svg" alt="">
    </div>

    <section class="carousel-area">
      <div class="container custom-container">
        <div class="tabs-horizontal">
          <div class="row carousel-background">
            <div class="container">
              <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage">
                    <?php foreach ($rows as $row) { ?>
                    <div class="owl-item card">
                      <a class="pg-top" >
                        <div class="img-container">
                          <img src="<?php echo $row["thumbnail"]; ?>" alt="">
                        </div>
                        <div class="content">
                          <p class="title"><?php echo $row["title"]; ?></p>
                          <p class="desc" data-translate="<?php echo $row["description"]; ?>"></p>
                            <p class="value" href="<?php echo $row["detail_link"] ?>" target ="_blank"> <span data-translate="NFT_ViewProfile">View Profile</span></p>

                        </div>
                      </a>
                    </div>

                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="action">
      <a class="view-more round-btn-light" data-translate="NFT_ViewMore"  href="../en-otc-nft-market/" target ="_blank">View More</a>
    </div>
  </div>

  <div class="middle-block">
    <div class="left">
      <span class="text" data-translate="NFT_note1">The VirgoCX NFT Brokerage helps our clients </span>
        <span class="gold" data-translate="NFT_note2">find and trade high value art pieces & collectables.</span>
    </div>
    <div class="right">
      <span data-translate="NFT_note3">We navigate the markets to find rare and upcoming NFTs. Our insider reports
        provides actionable insights for
        our clients to make purchasing decisions. </span>
    </div>
  </div>


  <section class="how-area">
    <h2 data-translate="NFT_HowItWorks">How It Works?</h2>

    <div class="tabs">
      <nav class="tab-switch row">
        <a class="selected" data-translate="NFT_BuyingNFT">Buying an NFT</a>
        <a data-translate="NFT_SellingNFT">Selling your NFT </a>
      </nav>
      <div class="how-container">
        <div class="row custom-container">
          <div class="icon-box">

            <img class="image" style="width: 65px"
              src="<?= get_template_directory_uri() ?>/img/nft/How_it_works_buying_an_NFT.svg" alt="">
          </div>
          <div class="num-box">
            <p>1.</p>
            <p>2.</p>
            <p>3.</p>
            <p>4.</p>
          </div>
          <div class="content-box">
            <p data-translate="NFT_BuyNote1"></p>
            <p data-translate="NFT_BuyNote2"></p>
            <p data-translate="NFT_BuyNote3"></p>
            <p data-translate="NFT_BuyNote4"></p>
          </div>
        </div>
      </div>
      <div class="how-container" style="display: none;">
        <div class="row custom-container">
          <div class="icon-box">
            <img class="image" style="width: 65px"
              src="<?= get_template_directory_uri() ?>/img/nft/How_it_works_Selling_your_NFT.svg" alt="">

          </div>
          <div class="num-box">
            <p>1.</p>
            <p>2.</p>
            <p>3.</p>
            <p>4.</p>
          </div>
          <div class="content-box">
            <p data-translate="NFT_SellNote1"></p>
            <p data-translate="NFT_SellNote2"></p>
            <p data-translate="NFT_SellNote3"></p>
            <p data-translate="NFT_SellNote4"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="getstart-btn scroll-to-sign-up" data-translate="NFT_GetStarted">Get Started</div>
  </section>


  <section class="faq" aria-label="Question Accordions">
    <div class="custom-container">
      <h2 data-translate="NFT_FAQ">Frequently Asked Questions </h2>
      <div class="panel-group" id="faq" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse0"
                aria-expanded="true" aria-controls="collapse0">
                <span data-translate="NFT_Q1">What are NFTs (Non Fungible Tokens)</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p data-translate="NFT_A1"></p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse1"
                aria-expanded="true" aria-controls="collapse1">
                <span data-translate="NFT_Q2">How do I buy the NFT and where do I store it?</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />

              </div>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body px-3 mb-4">
              <p data-translate="NFT_A2"></p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse2"
                aria-expanded="true" aria-controls="collapse2">
                <span data-translate="NFT_Q3">Can I sell an NFT that I bought?</span>
                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body px-3 mb-4">
              <p data-translate="NFT_A3_1"></p>
              <p data-translate="NFT_A3_3"></p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse3"
                aria-expanded="true" aria-controls="collapse3">
                <span data-translate="NFT_Q4">How do I get started?</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body px-3 mb-4">
              <p data-translate="NFT_A4_1"></p>
              <a data-translate="NFT_A4_2" href="#contact-form" class="faq_gold"></a>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse4"
                aria-expanded="true" aria-controls="collapse4">
                <span data-translate="NFT_Q5">Why would i buy from you and not on OpenSea?</span>
                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
            <div class="panel-body px-3 mb-4">
              <p data-translate="NFT_A5"></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="background-img">
      <img src="<?= get_template_directory_uri() ?>/img/bg3.svg" alt="images not found">
      <img class="mobile" src="<?= get_template_directory_uri() ?>/img/bg3_mobile.svg" alt="images not found">
    </div>
  </section>


  <section class="signup-area">
    <div class="background-img">
      <img src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 2.svg" alt="images not found">
      <img src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 1.svg" alt="images not found">
    </div>
    <div class="container custom-container" id="contact-form">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-12">
          <div class="">
            <h2 data-translate="NFT_SignUp">Sign Up Today</h2>
          </div>
          <div class="how-content">
            <div class="how-item">
              <?= do_shortcode('[contact-form-7 id="70" title="NFT-signup"]') ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<style type="text/css">
    h1,h2,h1> span, h2>span,h3 ,h4{
        font-family: "Matter-Bold"!important;
    }
    nav>a,p,span,div{
        font-family: "Matter-Regular"!important;
    }
.nft-home-container {}

.faq_gold{
  cursor: pointer;
  color: #C7BA9A;
}

.banner-container {
  padding: 0 50px;
  height: 600px;
  display: flex;
  align-items: center;
  position: relative;
  width: 1440px;
  margin: 0 auto;
}

.banner-container .content {}

.banner-container .banner-image {}

.banner-container .title {
    font-family: "Matter-Bold"!important;
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  line-height: 56px;
  /* or 117% */
  color: #05004D;
}
    .banner-container .title span{

        font-family: "Matter-Bold"!important;
    }

    .banner-container .title .gold {
  font-style: normal;
  font-weight: bold;
  font-size: 48px;
  line-height: 56px;
  /* or 117% */
  text-transform: uppercase;
  /* OTC Glold */
  color: #C7BA9A;
}

.banner-container .action {
  margin-top: 60px;
  text-align: left;
}

.banner-container .action .buy {
  width: 200px;
  height: 50px;
  background: #05004D;
  border-radius: 25px;


  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  /* identical to box height */

  text-align: center;

  /* FFFFFF */

  color: #FFFFFF;
}

.banner-container .action .sell {
  width: 200px;
  height: 50px;
  border: 2px solid #05004D;
  background-color: transparent;
  box-sizing: border-box;
  border-radius: 25px;
  margin-left: 44px;


  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  text-align: center;

  /* VirgoOTC Blue */

  color: #05004D;
}

.slider-container {
  position: relative;
}

.slider-bg .top-image {
  position: absolute;
  top: 0;
  left: 62%;
}

.slider-bg .bottom-image {
  position: absolute;
  bottom: 0;
  left: 0;
}

.slider-container .container {
  max-width: calc(428px * 3);
}

.slider-container h3 {

  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 50px;
  margin: 80px auto;
  /* or 139% */

  text-align: center;
  width: 100%;

  color: #1E1A5F;
}

.middle-block {
  width: 100%;
  background: #05004D;
  height: 338px;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.middle-block .left {
  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 43px;
  width: 600px;
  /* FFFFFF */
  color: #FFFFFF;
}

.middle-block .left span{
    font-family: "Matter-Bold"!important;
}

.middle-block .right {
  /* border: 2px solid #C7BA9A; */
  box-sizing: border-box;
  border-radius: 10px;
  padding: 20px 10px 36px;
  width: 475px;
  min-height: 134px;
  background: url("<?= get_template_directory_uri() ?>/img/nft/border.svg");


  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 25px;
  /* or 156% */

  text-align: right;

  /* FFFFFF */

  color: #FFFFFF;
}

.works-container {}

.works-container h3 {

  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 50px;
  /* or 139% */

  text-align: center;
  width: 100%;
  margin: 80px auto;

  color: #1E1A5F;
}


/*tabs*/
.tabs {
  display: block;
  display: -webkit-flex;
  display: -moz-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0;
  overflow: hidden;
}

.tabs [class^="tab"] label,
.tabs [class*=" tab"] label {
  color: #05004D;
  cursor: pointer;
  display: block;
  font-size: 1.5em;
  font-weight: 300;
  line-height: 1em;
  text-align: center;
}

.tabs [class^="tab"] [type="radio"],
.tabs [class*=" tab"] [type="radio"] {
  border-bottom: 1px solid rgba(239, 237, 239, 0.5);
  cursor: pointer;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: block;
  width: 100%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.tabs [class^="tab"] [type="radio"]:hover,
.tabs [class^="tab"] [type="radio"]:focus,
.tabs [class*=" tab"] [type="radio"]:hover,
.tabs [class*=" tab"] [type="radio"]:focus {
  border-bottom: 1px solid #c7ba9a;
}

.tabs [class^="tab"] [type="radio"]:checked,
.tabs [class*=" tab"] [type="radio"]:checked {
  border-bottom: 3px solid #c7ba9a;
}

.tabs [class^="tab"] [type="radio"]:checked+div,
.tabs [class*=" tab"] [type="radio"]:checked+div {
  opacity: 1;
}

.tabs [class^="tab"] [type="radio"]+div,
.tabs [class*=" tab"] [type="radio"]+div {
  display: block;
  opacity: 0;
  padding: 2rem 0;
  width: 90%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.tabs .tab-2 {
  width: 50%;
}

.tabs .tab-2 [type="radio"]+div {
  width: 200%;
  margin-left: 200%;
}

.tabs .tab-2 [type="radio"]:checked+div {
  margin-left: 0;
}

.tabs .tab-2:last-child [type="radio"]+div {
  margin-left: 100%;
}

.tabs .tab-2:last-child [type="radio"]:checked+div {
  margin-left: -100%;
}

.tab-switch {
  display: none;
}

.tab-switch a {
  color: #84839c;
  padding: 5px 50px;
}

.tab-switch a:first-child {
  margin-right: 100px;
}

.tab-switch a:hover,
.tab-switch a.selected {
  color: #05004D;
  border-bottom: 3px solid #c7ba9a;
  cursor: pointer;
  font-family: "Matter-Bold" !important;
}

.how-area .getstart-btn {
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  text-align: center;

  width: 200px;
  height: 50px;
  line-height: 46px;
  margin: 20px auto;

  /* VirgoOTC Blue */

  border: 2px solid #05004D;
  box-sizing: border-box;
  border-radius: 25px;

  /* VirgoOTC Blue */

  color: #05004D;

}

@media screen and (min-width: 900px) {
  .how-container {
    width: 100%;
  }

  .why-container {
    padding: 30px 30px 0 30px;
  }

  .tab-switch {
    display: flex;
    margin: 0 auto;
    justify-content: space-around;
    text-align: center;
    font-size: 24px;
    border-bottom: 1px solid #c7ba9a;
  }

  .custom-container .img-container img {
   width: auto;
   height: auto;
   max-width: 100%;
   max-height: 100%;
   position: absolute;
  }
    .owl-item{
        margin:36px;
    }
}

.faq .background-img .mobile {
  display: block;
  width: 100%;
  padding-top: 20px;
}

.faq .background-img img {
  display: none;
  width: 100%;
  padding-top: 100px;
  /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
}

.why-area h2,
.faq h2 {
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  color: #05004d;
  padding-bottom: 50px;
}


.how-area h2 {
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  color: #05004d;
  padding-bottom: 0px;
}

.faq {
  background-color: #F8F8F8;
  padding: 50px 0 0px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: bottom;
}

@media screen and (min-width: 900px) {
  .faq {
    padding: 200px 0 0px 0;
  }

  .how-area h2,
  .why-area h2,
  .faq h2 {
    padding-bottom: 100px;
  }

  .faq .background-img img {
    display: block;
    /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
  }

  .faq .background-img .mobile {
    display: none;
  }

  .why-area h2,
  .faq h2 {
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    color: #05004d;
    padding-bottom: 100px;
  }
    .slider-container .owl-item {
        width: 380px!important;
        height: 531px;
        margin: 20px!important;
        box-sizing: border-box;
        overflow: hidden;
        background: #FFFFFF;
        border-radius: 0px 0px 20px 20px;
    }
}

.how-area {
  padding-bottom: 0;
  margin: 50px auto;
}

.how-area h2 {

  padding-bottom: 0;
}

.how-area .row {
  display: flex;
  justify-content: space-around;
  margin-top: 50px;
}

.how-container .row {
  display: flex;
  justify-content: flex-start;
  margin-top: 80px;
}

.how-area .icon-box {
  margin-left: 100px;
}

.how-area .num-box {
  /* OTC Glold */
  border: 2px solid #C7BA9A;
  box-sizing: border-box;
  border-radius: 30px;
  width: 68px;
  height: fit-content;
  box-sizing: border-box;
  padding: 20px 0;
  margin-left: 100px;
}

.how-area .num-box p {
  font-weight: bold;
  font-size: 36px;
  /* line-height: 43px; */
  height: 60px;
  text-align: center;

  /* OTC Glold */

  color: #C7BA9A;
}

.how-area .content-box {
  width: 719px;
  margin-left: 25px;
  padding: 20px 0;
}

.how-area .content-box p {
  height: 60px;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
}


.signup-area h2 {
  text-align: center;
  font-size: 36px;
  color: white;
}

.signup-area .round-btn {
  margin: auto;
}

.faq .panel-default>.panel-heading {
  border-bottom: 1px solid black;
  padding: 0;
}

.faq .panel-default .panel-title div {
  display: block;
  font-size: 18px;
  font-weight: bold;
  color: #05004d;
}

.faq .panel-default .panel-title img {
  color: #05004d;
  float: right;
  width: 20px;
}

.faq .panel-default .panel-body {
  font-size: 16px;
}


.slider-container .owl-item a {
  display: block;
}



.slider-container .owl-item a .img-container {
  width: 380px;
  height: 380px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
    max-width: 100%;
}

.slider-container .owl-item a .img-container img {
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
  position: relative;
  text-align: center;
  display: block;
}

.slider-container .owl-item a .content .title {
  font-style: normal;
  font-weight: bold;
  font-size: 24px;
  margin-top: 18px;
  line-height: 29px;
  /* identical to box height */

  text-align: center;

  /* VirgoOTC Blue */

  color: #05004D;
}

.slider-container .owl-item a .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-overflow: ellipsis;
    /* white-space: nowrap; */
    text-align: center;
    /* max-height: 35px; */
    overflow: hidden;
    margin-left: 20px;
    margin-right: 20px;
    color: #05004D;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.slider-container .owl-item .content .value {
  font-style: normal;
  font-weight: bold;
  font-size: 18px;
  line-height: 22px;
  /* identical to box height */

  text-align: center;

  /* OTC Glold */

  color: #C7BA9A;
}

.owl-stage {

   height: 600px;
  overflow: hidden;
}

.action {
    font-family: "Matter-Regular"!important;
    font-style: normal;
    font-weight: 500;
  width: 100%;
  text-align: center;
}

.view-more {

  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  text-align: center;

  width: 200px;
    background-color: transparent;
  margin: 20px auto;
  color: #05004D;
}

.owl-nav {
  position: absolute;
  width: 100%;
  top: 160px;
  left: 0;
  z-index: 1;
  color: #05004D;
  font-size: 28px;
  font-weight: bolder;
}

.owl-prev,
.owl-next {
  width: 40px;
  height: 40px;
  border-radius: 50% !important;
  background: #FFFFFF !important;
  box-shadow: 0px 4px 4px rgba(171, 168, 168, 0.25);
}
.owl-prev img{
    margin: -8px 0 0 -3px;
}

.owl-next img{
    margin: -8px 0 0 2px;
}
.owl-prev {
  position: absolute;
  left: -30px;
    box-shadow: none;
}

.owl-next {
  position: absolute;
  right: -30px;
    box-shadow: none;
}

.owl-next:hover {
  color: #05004D !important;
    box-shadow: 0px 4px 4px rgb(171 168 168 / 25%)!important;

}

.owl-prev:hover {
  color: #05004D !important;
    box-shadow: 0px 4px 4px rgb(171 168 168 / 25%)!important;
}

.modal {
  padding-top: 20vh;
}

.modal-body {
  text-align: center;
  padding: 30px 0;
}

.modal-content {
  width: 685px;
}

.modal-dialog {

  width: 685px;
  max-width: 685px;
}

.modal-body p:nth-child(1) {
  font-weight: 500;
  font-size: 24px;
  line-height: 29px;

  /* VirgoOTC Blue */

  color: #05004D;
}

.modal-body p:nth-child(2) {
  font-size: 18px;
  line-height: 22px;
  margin-top: 60px;
  /* identical to box height */

  text-align: center;

  /* VirgoOTC Blue */

  color: #05004D;
}

.modal-body p:nth-child(3),
.modal-body p:nth-child(4) {
  font-size: 18px;
  line-height: 22px;
  /* identical to box height */

  text-align: center;

  /* OTC Glold */

  color: #C7BA9A;
}

.modal-body p:nth-child(3):hover,
.modal-body p:nth-child(4):hover {
  cursor: pointer;
}

.modal-header {
  border-bottom: none;
}

@media screen and (max-width: 900px) {

  .nft-home-container {}

  .banner-container {
    padding: 0 40px;
    display: block;
    /* align-items: center; */
    position: relative;
    width: auto;
    margin: 0 auto;
  }

  .banner-container .content {}

  .banner-container .banner-image {
    width: 90vw;
    margin-top: 50px;
  }

  .banner-container .title {


    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 38px;
    /* or 117% */

    color: #05004D;
  }

  .banner-container .title span {
    font-style: normal;
    font-weight: bold;
    font-size: 32px!important;
    line-height: 38px;
  }

  .banner-container .action {
    margin-top: 60px;
    text-align: left;
    display: flex;
    justify-content: space-around;
  }

  .banner-container .action .buy {
    width: 160px;
    height: 50px;
    background: #05004D;
    border-radius: 25px;


    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* FFFFFF */

    color: #FFFFFF;
  }

  .banner-container .action .sell {
    width: 180px;
    height: 50px;
    border: 2px solid #05004D;
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 25px;
    margin-left: 20px;


    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .slider-container {
    position: relative;
  }

  .slider-bg .top-image {
    position: absolute;
    top: 0;
    left: 62%;
  }

  .slider-bg .bottom-image {
    position: absolute;
    bottom: 0;
    left: 0;
  }

  .slider-container .container {
    max-width: calc(428px * 3);
  }

  .slider-container h3 {

    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 50px;
    margin: 80px auto;
    /* or 139% */

    text-align: center;
    width: 100%;

    color: #1E1A5F;
  }

  .middle-block {
    width: 100%;
    background: #05004D;
    height: auto;
    display: block;
    align-items: center;
    justify-content: space-around;
    padding: 30px 0;
  }

  .middle-block .left {

    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 38px;
    width: 100%;
    padding: 30px 22px;

    /* FFFFFF */

    color: #FFFFFF;
  }

  .middle-block .left span {
    /* OTC Glold */

    color: #C7BA9A;
  }

  .middle-block .right {
    /* border: 2px solid #C7BA9A; */
    margin-top: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    padding: 10px 10px 10px;
    width: 96%;
    margin: 0 auto;
    height: 134px;
    background: url("<?= get_template_directory_uri() ?>/img/nft/border.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: top;


    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    /* or 156% */

    text-align: left;

    /* FFFFFF */

    color: #FFFFFF;
  }

  .works-container {}

  .works-container h3 {

    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 50px;
    /* or 139% */

    text-align: center;
    width: 100%;
    margin: 80px auto;

    color: #1E1A5F;
  }


  /*tabs*/
  .tabs {
    display: block;
    display: -webkit-flex;
    display: -moz-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
  }

  .tabs [class^="tab"] label,
  .tabs [class*=" tab"] label {
    color: #05004D;
    cursor: pointer;
    display: block;
    font-size: 1.5em;
    font-weight: 300;
    line-height: 1em;
    text-align: center;
  }

  .tabs [class^="tab"] [type="radio"],
  .tabs [class*=" tab"] [type="radio"] {
    border-bottom: 1px solid rgba(239, 237, 239, 0.5);
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .tabs [class^="tab"] [type="radio"]:hover,
  .tabs [class^="tab"] [type="radio"]:focus,
  .tabs [class*=" tab"] [type="radio"]:hover,
  .tabs [class*=" tab"] [type="radio"]:focus {
    border-bottom: 1px solid #c7ba9a;
  }

  .tabs [class^="tab"] [type="radio"]:checked,
  .tabs [class*=" tab"] [type="radio"]:checked {
    border-bottom: 3px solid #c7ba9a;
  }

  .tabs [class^="tab"] [type="radio"]:checked+div,
  .tabs [class*=" tab"] [type="radio"]:checked+div {
    opacity: 1;
  }

  .tabs [class^="tab"] [type="radio"]+div,
  .tabs [class*=" tab"] [type="radio"]+div {
    display: block;
    opacity: 0;
    padding: 2rem 0;
    width: 90%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .tabs .tab-2 {
    width: 50%;
  }

  .tabs .tab-2 [type="radio"]+div {
    width: 200%;
    margin-left: 200%;
  }

  .tabs .tab-2 [type="radio"]:checked+div {
    margin-left: 0;
  }

  .tabs .tab-2:last-child [type="radio"]+div {
    margin-left: 100%;
  }

  .tabs .tab-2:last-child [type="radio"]:checked+div {
    margin-left: -100%;
  }

  .tab-switch {
    display: none;
    margin: 0 auto;
  }

  .tab-switch a {
    color: #84839c;
    padding: 5px 10px;
  }

  .tab-switch a:first-child {
    margin-right: 0px;
  }

  .tab-switch a:hover,
  .tab-switch a.selected {
    color: #05004D;
    border-bottom: 3px solid #c7ba9a;
    cursor: pointer;
    font-family: "Matter-Bold" !important;
  }

  .how-area .getstart-btn {
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;

    width: 200px;
    height: 50px;
    line-height: 46px;
    margin: 20px auto;

    /* VirgoOTC Blue */

    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;

  }

  .how-area {
    padding-bottom: 0;
    margin: 50px auto;
  }

  .how-area h2 {

    padding-bottom: 0;
  }

  .how-area .row {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
  }

  .how-container .row {
    display: flex;
    justify-content: flex-start;
    margin-top: 80px;
  }

  .how-area .icon-box {
    margin-left: 20px;
  }

  .how-area .num-box {
    display: none;
    /* OTC Glold */
    border: 2px solid #C7BA9A;
    box-sizing: border-box;
    border-radius: 30px;
    width: 68px;
    height: fit-content;
    box-sizing: border-box;
    padding: 20px 0;
    margin-left: 100px;
  }

  .how-area .num-box p {
    font-weight: bold;
    font-size: 36px;
    /* line-height: 43px; */
    height: 60px;
    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .how-area .content-box {
    width: 70vw;
    margin-left: 25px;
    padding: 10px 0;
  }

  .how-area .content-box p {
    height: 60px;
    margin-bottom: 30px;
    font-size: 14px;
    line-height: 17px;
    display: flex;
    align-items: center;
  }


  .signup-area h2 {
    text-align: center;
    font-size: 36px;
    color: white;
  }

  .signup-area .round-btn {
    margin: auto;
  }

  .faq .panel-default>.panel-heading {
    border-bottom: 1px solid black;
    padding: 0;
  }

  .faq .panel-default .panel-title div {
    display: block;
    font-size: 18px;
    font-weight: bold;
    color: #05004d;
  }

  .faq .panel-default .panel-title img {
    color: #05004d;
    float: right;
    width: 20px;
  }

  .faq .panel-default .panel-body {
    font-size: 16px;
  }


  .slider-container .owl-item a {
    display: block;
  }

  .slider-container .owl-item {
    /*width: 380px;*/
    height: 531px;
    /* margin: 20px; */
    box-sizing: border-box;
    overflow: hidden;
    background: #FFFFFF;
    border-radius: 0px 0px 20px 20px;
  }

  .slider-container .owl-item a img {
    width: 380px;
    height: 380px;
    display: block;
    margin: 0 auto;
  }

  .slider-container .owl-item a .content .title {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    margin-top: 18px;
    line-height: 29px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .slider-container .owl-item a .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
      text-overflow: ellipsis;
      margin-left: 20px;
      margin-right: 20px;
    /* VirgoOTC Blue */

    color: #05004D;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
  }

  .slider-container .owl-item .content .value {
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .owl-stage {

    /* height: 600px; */
    overflow: hidden;
  }

  .action {
    width: 100%;
    text-align: center;
  }

  .view-more {

    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;
    width: 200px;
    height: 50px;
    /*line-height: 46px;*/
    margin: 20px auto;
    padding: 12px 15px;
      background-color: transparent;

    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .owl-nav {
    position: absolute;
    width: 100%;
    top: 160px;
    left: 0;
    z-index: 1;
    color: #05004D;
    font-size: 28px;
    font-weight: bolder;
  }

  .owl-prev,
  .owl-next {
    width: 40px;
    height: 40px;
    border-radius: 50% !important;
    background: #FFFFFF !important;
    box-shadow: 0px 4px 4px rgba(171, 168, 168, 0.25);
  }

  .owl-next span,
  .owl-prev span {

    top: -4px;
    position: relative;
  }

  .owl-prev {
    position: absolute;
    left: -5px;
  }

    .owl-prev img{
      margin: -8px 0 0 -3px;
  }

    .owl-next img{
        margin: -8px 0 0 -3px;
    }

  .owl-next {
    position: absolute;
    right: -10px;
  }

  .owl-next:hover {
    color: #05004D !important;
  }

  .owl-prev:hover {
    color: #05004D !important;
  }

  .custom-container h2 {
    font-size: 24px;
  }

  .panel-group {
    padding: 10px;
  }

  .modal {
    padding-top: 0;
  }

  .modal-body {
    text-align: center;
    padding: 30px 10px;
  }

  .modal-content {
    width: 340px;
  }

  .modal-dialog {
    margin: auto;
    width: 340px;
    max-width: 340px;
    margin-top: 50%!important;
    transform: translateY(-50%);
  }

  .modal-body p:nth-child(1) {
    font-weight: 500;
    font-size: 24px;
    line-height: 29px;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .modal-body p:nth-child(2) {
    font-size: 18px;
    line-height: 22px;
    margin-top: 60px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .modal-body p:nth-child(3),
  .modal-body p:nth-child(4) {
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .modal-header {
    border-bottom: none;
  }
}

.nft-home-container .owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
  background: #05004D;
}

.checkbox-list {
  text-align: left;
}

.checkbox-list .checkbox-title {
  padding-left: 10px;
}

.checkbox-list .wpcf7-list-item-label {
  margin-left: 10px;
}
.card{
    border: 1px solid white;
    border-radius: 0px 0px 20px 20px;
}
.card:hover{
    /*background: #f2f2f2;*/
    overflow: hidden;
    cursor: pointer;
    box-shadow: 10px 10px 15px #E4E3DB;
}

body{
    background-color: #F5F5F5;
}

</style>

<script type="text/javascript">
(function($) {

  $('.tabs nav a').on('click', function() {
    const children = this.parentElement.querySelectorAll('a');
    children.forEach((element, index) => {
      $(element).removeClass('selected')
      $($('.how-container')[index]).css('display', 'none')
    });
    $(this).addClass('selected')
    $($('.how-container')[$(this).index()]).css('display', 'block')


  });

  // faq triangle toggle
  $('.panel-title').click(function() {
    $(this).children().children().toggleClass('flipped')
  });
})(jQuery);


(function($) {
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    var owl = $('.owl-carousel');
    if (screen.width > 900) {
      owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1500,
        pagination: true,
        nav: true,
        dots: true,
          navText : ["<img src='<?= get_template_directory_uri() ?>/img/nft/arrow_left.png' alt=''>","<img src='<?= get_template_directory_uri() ?>/img/nft/arrow_right.png' alt=''>"],
        autoplayHoverPause: true
      });
    } else {
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1500,
        pagination: false,
        dots: true,
        autoplayHoverPause: true
      });
    }


    $('.tabs-vertical nav a').on('click', function() {
      show_container_vertical($(this).index());
    });

    show_container_vertical(0);

    function show_container_vertical(index) {
      // Make the container visible
      $('.tabs-vertical .container.visible').removeClass('visible');
      $('.tabs-vertical .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

      // Set the tab to selected
      $('.tabs-vertical nav a.selected').removeClass('selected');
      $('.tabs-vertical nav .tab-dot.selected').removeClass('selected');
      $('.tabs-vertical nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
      $('.tabs-vertical nav .tab-dot:nth-of-type(' + (index + 1) + ')').addClass('selected');
    }

    $('.tabs-horizontal nav a').on('click', function() {
      show_container('.tabs-horizontal', $(this).index());
    });
    $('.product-tabs-horizontal nav a').on('click', function() {
      show_container('.product-tabs-horizontal', $(this).index());
    });

    // $('.tabs nav a').on('click', function() {
    //   scroll_to_container($(this).index());
    // });

    function scroll_to_container(index) {
      // Make the container visible
      console.log(index);
      console.log('.tabs .custom-container:nth-of-type(' + (index + 1) + ')');
      $('html, body').animate({
        scrollTop: $('.tabs .custom-container:nth-of-type(' + (index + 1) + ')').offset().top
      }, 800);
    }

    show_container('.tabs-horizontal', 0);
    show_container('.product-tabs-horizontal', 0);

    function show_container(name, index) {
      // Make the container visible
      $(name + ' .container.visible').removeClass('visible');
      $(name + ' .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

      // Set the tab to selected
      $(name + ' nav a.selected').removeClass('selected');
      $(name + ' nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
    }
  });


})(jQuery);
</script>

<?php
get_footer('otc');