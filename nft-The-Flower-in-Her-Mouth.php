<?php

/**
 * Template Name: NFT The Flower in Her Mouth page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */
// 关联数组
$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where id = 14', ARRAY_A);
$detail = $rows[0];
get_header('otc');
?>
<div class="nft-detail-container">
  <div class="content-container">
      <div class="image-container">
          <img class="image" src="<?php echo $detail["thumbnail"]; ?>" alt="">
      </div>
    <div class="content">
      <p class="title"><?php echo $detail["title"]; ?></p>
      <p class="value"><?php echo $detail["blockchain_value"]; ?> <?php echo $detail["blockchain"]; ?></p>

      <div class="link">
            <?php if(!empty($detail["recent_link"])): ?>
                <a onclick="window.open('<?php echo  $detail["recent_link"] ?>','_blank').focus();"><img class="icon" style="margin-right: 15px;" src="<?= get_template_directory_uri() ?>/img/nft/See_recent_trends.svg" alt=""><span data-translate="NFT_SeeTrends">See
                  Recent Trends </span></a>
            <?php endif; ?>
            <?php if(!empty($detail["analytics_link"])): ?>
                <a onclick="window.open('<?php echo $detail["analytics_link"] ?>','_blank').focus();"
                ><img class="icon" style="margin-right: 15px;" src="<?= get_template_directory_uri() ?>/img/nft/see_analytics.svg" alt=""><span data-translate="NFT_SeeAnalytics" >See
                      Analytics</span></a>
            <?php endif; ?>
      </div>
      <p class="desc" data-translate="<?php echo $detail["description"]; ?>"></p>

      <div class="action">
        <a data-translate="NFT_Buy" class="buy" href="../en-otc-nft-brokerage/?#contact-form" target ="_blank">Buy with VirgoCX</a>
        
      </div>
    </div>
  </div>
  <div class="table">
    <div class="header" data-translate="NFT_Details">Details</div>

    <div class="stats" data-translate="NFT_Stats">Stats</div>
    <div class="stats-value"><?php echo $detail["stats"]; ?></div>
    <div class="stats" data-translate="NFT_ContractAddress">Contract Address</div>
    <div class="stats-value"><?php echo $detail["contract_address"]; ?></div>
    <div class="stats-wrap">
      <div class="stats" data-translate="NFT_TokenID">Token ID</div>
      <div class="stats-value"><?php echo $detail["token_id"]; ?></div>
      <div class="stats" data-translate="NFT_Blockchain">Blockchain</div>
      <div class="stats-value"><?php echo $detail["blockchain"]; ?></div>
    </div>
  </div>
</div>

<style type="text/css">
    h1,h2,h1> span, h2>span,h3 ,h4{
        font-family: "Matter-Bold"!important;
    }
    nav>a,p,span,div{
        font-family: "Matter-Regular"!important;
    }
  .nft-detail-container {
    background: #fff;
    overflow: hidden;
  }

  .content-container {
    width: 1280px;
    display: flex;
    margin: 20px auto;
  }
  .nft-detail-container .content-container .image-container {
      width: 400px;
      height: 400px;
  }

  .nft-detail-container .content-container .image-container .image{
      width: auto;
      height: auto;
      max-height: 100%;
      max-width: 100%;
      position: relative;
      text-align: center;
      display: block;
      margin: auto;
  }

  .nft-detail-container .content-container .content {
    height: 400px;
    margin-left: 70px;
      max-width: 700px;
  }

  .nft-detail-container .content-container .title {
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 43px;
    text-align: left;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .nft-detail-container .content-container .value {
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 43px;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .nft-detail-container .content-container .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    /* or 139% */


    /* VirgoOTC Blue */

    color: #05004D;
  }

  .nft-detail-container .content-container .action {
    margin-top: 60px;
  }

  .nft-detail-container .content-container .action .buy {
    width: 200px;
    height: 50px;
    background: #05004D;
    border-radius: 25px;
    padding: 10px;
      border: 2px solid #05004D;

    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* FFFFFF */

    color: #FFFFFF;
  }

  .nft-detail-container .content-container .action .sell {
    width: 200px;
    height: 50px;
    border: 2px solid #05004D;
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 25px;
    margin-left: 44px;
    padding: 10px;


    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .nft-detail-container .content-container .link {
    margin: 20px 0;
  }

  .nft-detail-container .content-container .link a {
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */


    /* OTC Glold */

    color: #C7BA9A;
    margin-right: 50px;
    text-decoration: underline;
  }

  .table {
    border: 2px solid #F5F5F5;
    box-sizing: border-box;
    width: 1280px;
    border-radius: 10px;
    margin: 50px auto;
    overflow: hidden;
  }

  .table .header {
    background: #C7BA9A;
    height: 65px;
    font-weight: bold;
    font-size: 24px;
    line-height: 65px;
    padding-left: 33px;
    /* identical to box height */


    color: #000000;
  }

  .table .stats {
    background: #F5F5F5;
    height: 65px;
    line-height: 65px;
    font-size: 24px;
    font-weight: 500;

    color: #05004D;
    padding-left: 33px;
  }

  .table .stats-value {
    background: #fff;
    height: 65px;
    line-height: 65px;
    font-size: 18px;

    /* Light Text Color */

    color: #84839C;
    padding-left: 33px;
  }


  @media screen and (max-width: 900px) {

    .nft-detail-container {
      background: #fff;
      overflow: hidden;
      box-sizing: border-box;
      padding: 20px;
      width: 100vw;
    }

    .content-container {
      display: block;
      width: 100%;
      box-sizing: border-box;
      text-align: center;
    }

    .nft-detail-container .content-container .image-container {
      width: 320px;
      height: 320px;
      text-align: center;
      margin: 0 auto;
    }

      .nft-detail-container .content-container .image-container .image{
          width: auto;
          height: auto;
          max-width: 100%;
          max-height: 100%;
          position: relative;
          text-align: center;
          display: block;
          margin: auto;
      }

    .nft-detail-container .content-container .content {
      height: auto;
      margin-left: 0;
    }

    .nft-detail-container .content-container .title {
      font-style: normal;
      font-weight: bold;
      font-size: 18px;
      line-height: 22px;
      text-align: center;
      margin-top: 20px;

      /* VirgoOTC Blue */

      color: #05004D;
    }

    .nft-detail-container .content-container .value {
      font-style: normal;
      font-weight: bold;
      font-size: 18px;
      line-height: 22px;

      /* OTC Glold */

      color: #C7BA9A;
    }

    .nft-detail-container .content-container .desc {
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      /* or 139% */


      /* VirgoOTC Blue */

      color: #05004D;
    }

    .nft-detail-container .content-container .action {
      margin-top: 60px;
    }

    .nft-detail-container .content-container .action .buy {
      width: 300px;
      height: 50px;
      background: #05004D;
      border-radius: 25px;
        border: 2px solid #05004D;

      font-style: normal;
      font-weight: 500;
      font-size: 14px;
      line-height: 17px;
      /* identical to box height */

      text-align: center;

      /* FFFFFF */

      color: #FFFFFF;
    }

    .nft-detail-container .content-container .action .sell {
      width: 300px;
      height: 50px;
      border: 2px solid #05004D;
      background-color: #fff;
      box-sizing: border-box;
      border-radius: 25px;
      margin-left: 0;
      margin-top: 20px;


      font-style: normal;
      font-weight: 500;
      font-size: 14px;
      line-height: 17px;
      text-align: center;

      /* VirgoOTC Blue */

      color: #05004D;
    }

    .nft-detail-container .content-container .link {
      margin: 20px 0;
    }

    .nft-detail-container .content-container .link a {
      font-style: normal;
      font-weight: 500;
      font-size: 14px;
      line-height: 17px;
      /* identical to box height */


      /* OTC Glold */

      color: #C7BA9A;
      margin: 0 10px;
      text-decoration: underline;
    }

    .table {
      border: 2px solid #F5F5F5;
      box-sizing: border-box;
      width: 90vw;
      border-radius: 10px;
      margin: 50px auto;
      overflow: hidden;
      text-align: center;
    }

    .table .header {
      width: 100%;
      box-sizing: border-box;
      background: #C7BA9A;
      height: 65px;
      font-weight: bold;
      font-size: 24px;
      line-height: 65px;
      padding-left: 0;
      text-align: center;
      /* identical to box height */


      color: #000000;
    }

    .table .stats {
      background: #F5F5F5;
      height: 65px;
      line-height: 65px;
      font-size: 24px;
      font-weight: 500;
      text-align: center;

      color: #05004D;
      padding-left: 0;
    }

    .table .stats-value {
      background: #fff;
      height: auto;
      min-height: 65px;
      line-height: 32px;
      font-size: 18px;
      text-align: center;
      word-break: break-all;
      display: flex;
      align-items: center;
      justify-content: center;

      /* Light Text Color */

      color: #84839C;
      padding-left: 0;
      padding-top: 5px;
      padding-bottom: 5px;
    }
  }
</style>



<?php
get_footer('otc');
