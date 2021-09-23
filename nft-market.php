<?php

/**
 * Template Name: NFT market page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */
// 关联数组
$pageSize = 6;
$currentPage = 1;
$sortType = '';
if (!empty($_REQUEST['current_page'])) {
  $currentPage = $_REQUEST['current_page'];
}
if (!empty($_REQUEST['sort'])) {
  $sortType = $_REQUEST['sort'];
}



//$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where trending_collections = 0 limit ' . ($page - 1) * $pageSize . ',' . $pageSize, ARRAY_A);
//
//$all_rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where trending_collections = 0', ARRAY_A);
//$total = count($all_rows);
//$pageTotal = ceil($total / $pageSize);
$keyword = '';
$sort = '';

$sql = 'where marketing = 1 
AND trending_collections = 0';

if (!empty($_REQUEST['keyword'])) {
  $keyword = $_REQUEST['keyword'];
  $sql = " where marketing = 1 AND trending_collections = 0 AND  title like'%" . $keyword . "%'";
}
if (!empty($_REQUEST['sort'])) {
  $sort = $_REQUEST['sort'];
  if ($sort === 'up') {
    $sql .= " order by blockchain_value ";
  }
  if ($sort === 'down') {
    $sql .= " order by id desc ";
  }
}
$rows = $wpdb->get_results("SELECT * FROM wp_virgocx_article " . $sql . " limit " . ($currentPage - 1) * $pageSize . ',' . $pageSize, ARRAY_A);
$all_rows = $wpdb->get_results("SELECT * FROM wp_virgocx_article " . $sql, ARRAY_A);
$total = count($all_rows);
$pageTotal = ceil($total / $pageSize);

if ($currentPage > $pageTotal) {
  $currentPage  = 1;
  $rows = $wpdb->get_results("SELECT * FROM wp_virgocx_article " . $sql . " limit " . ($currentPage - 1) * $pageSize . ',' . $pageSize, ARRAY_A);
}
$trendingRows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where trending_collections = 1', ARRAY_A);
get_header('otc');
?>
<div class="nft-market-container">
  <div class="banner-container">
    <div class="content">
      <div class="title" data-translate="NFT_Market">
        VirgoCX NFT Market
      </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/img/nft/NFT_market_banner.svg" alt="">
  </div>

  <div class="search-header-container">
    <h3 data-translate="NFT_BuyItNow">Buy It Now</h3>
  </div>
  <div class="search-filter-container">

    <div class="search-input-box">
      <input id="keyword" type="text" value="<?php echo $keyword ?>" class="search-input" placeholder="Search for NFTs">
      <img id="searchBtn" src="<?= get_template_directory_uri() ?>/img/nft/search_btn.svg" alt="">
    </div>
    <div class="sort <?php echo $sortType == 'up' ? 'active' : '' ?>" id="upSort">
      <span data-translate="NFT_Price_lowToHigh">Price:</span>
      <img src="<?= get_template_directory_uri() ?>/img/nft/arror_up.svg" alt="">
    </div>
    <div class="sort <?php echo $sortType == 'down' ? 'active' : '' ?>" id="downSort">
      <span data-translate="NFT_ListedDate">Listed date: </span>
      <img src="<?= get_template_directory_uri() ?>/img/nft/arrow_down.svg" alt="">
    </div>
  </div>

  <ul class="search-list-container">
    <?php foreach ($rows as $row) { ?>
    <li>
      <a href="<?php echo !empty($row["detail_link"]) ? $row["detail_link"] : ''; ?>" target="_blank">
        <div class="img-container">

          <img src="<?php echo $row["thumbnail"]; ?>" alt="">
        </div>
        <div class="content">
          <p class="title"><?php echo $row["title"]; ?></p>
          <p class="desc"><?php echo $row["author"]; ?></p>
          <p class="value"><?php echo $row["blockchain_value"]; ?> <?php echo $row["blockchain"]; ?> </p>
        </div>
      </a>
    </li>
    <?php } ?>
  </ul>

  <ul class="page-list" id="page-list">
    <li class="left" data-id="<?php echo $currentPage > 1 ? $currentPage - 1 : 1; ?>">
      < </li>
        <?php for ($i = 1; $i <= $pageTotal; $i++) { ?>
    <li data-id="<?php echo $i; ?>" class="num <?php echo $currentPage == $i ? 'active' : ''; ?>"><?php echo $i; ?></li>
    <?php } ?>
    <li class="right" data-id="<?php echo $currentPage < $pageTotal ? $currentPage + 1 : $currentPage; ?>">></li>
  </ul>

  <div class="contact-container">
    <p class="content" data-translate="NFT_CantFind">Can’t find what your are looking for?</p>
    <button class="contact-btn" data-translate="NFT_ContactUs"
      onclick="location.href='../en-otc-nft-brokerage/?#contact-form'" type="button">Contact Us</button>
  </div>

  <div class="slider-container">
    <h3 data-translate="NFT_Trending">Trending Collections</h3>

    <section class="carousel-area">
      <div class="container custom-container">
        <div class="tabs-horizontal">
          <div class="row carousel-background">
            <div class="container">
              <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage">
                    <?php foreach ($trendingRows as $row) { ?>
                    <div class="owl-item ">


                      <a class="pg-top" href="<?php echo !empty($row["view_link"]) ? $row["view_link"] : ''; ?>"
                        target="_blank">
                        <div class="img-container">
                          <img src="<?php echo $row["thumbnail"]; ?>" alt="">
                        </div>

                        <div class="content">
                          <p class="title"><?php echo $row["title"]; ?></p>
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

  </div>
</div>

<style type="text/css">
h1,
h2,
h1>span,
h2>span,
h3,
h4 {
  font-family: "Matter-Bold" !important;
}

nav>a,
p,
span,
div {
  font-family: "Matter-Regular" !important;
}

@media screen and (min-width: 900px) {

  .nft-market-container {
    background: #F5F5F5;
    overflow: hidden;
  }

  .banner-container {
    padding: 0 100px;
    height: 381px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #05004D;

  }

  .banner-container .content {
    width: 655px;

  }

  .banner-container .title {
    font-style: normal;
    font-weight: bold;
    font-size: 48px;
    line-height: 58px;
    /* identical to box height */


    color: #FFFFFF;
  }

  .banner-container img {}

  .banner-container .title span {

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
    background-color: #fff;
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

  .search-header-container {}

  .search-header-container h3 {

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

  .search-list-container {
    list-style: none;
    width: 1305px;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
  }

  .search-list-container li {
    width: 380px;
    height: 531px;
    margin: 20px;
    box-sizing: border-box;
    overflow: hidden;
    background: #FFFFFF;
    border-radius: 0px 0px 20px 20px;
  }

  .img-container {
    width: 380px;
    height: 380px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .img-container img {
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
    position: relative;
    text-align: center;
    display: block;
  }

  .search-list-container li .content .title {
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

  .search-list-container li .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-align: center;

    text-overflow: ellipsis;
    white-space: nowrap;
    margin-left: 20px;
    margin-right: 20px;
    /* VirgoOTC Blue */

    color: #05004D;
  }

  .search-list-container li .content .value {
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .contact-container {
    text-align: center;
  }

  .contact-container .content {
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .contact-container .contact-btn {
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;

    width: 200px;
    height: 50px;
    line-height: 46px;
    margin: 20px auto;
    background-color: transparent;

    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;

  }


  .slider-container {}

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

  .slider-container .owl-item a {
    display: block;
  }

  .slider-container .owl-item {
    width: 380px !important;
    height: 480px;
    /* margin: 20px; */
    box-sizing: border-box;
    overflow: hidden;
    background: #FFFFFF;
    border-radius: 0px 0px 20px 20px;
    background-color: #0D0763;
  }

  /*.slider-container .owl-item a img {*/
  /*  width: 380px;*/
  /*  height: 380px;*/
  /*  display: block;*/
  /*}*/

  .slider-container .owl-item a .content .title {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    margin-top: 18px;
    line-height: 50px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #fff;
  }

  .slider-container .owl-item a .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-align: center;

    text-overflow: ellipsis;
    white-space: nowrap;
    margin-left: 20px;
    margin-right: 20px;
    /* VirgoOTC Blue */

    color: #05004D;
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
    line-height: 46px;
    margin: 20px auto;

    /* VirgoOTC Blue */

    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .search-filter-container {
    width: 1260px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .search-input-box {
    display: inline-block;
    width: 622px;
    height: 80px;

    /* FFFFFF */

    background: #FFFFFF;
    border-radius: 20px;
    overflow: hidden;
  }

  .search-input-box input {

    height: 80px;
    width: 90%;
    padding: 0 20px;
    font-size: 24px;
    border: none;
    outline: none;
  }

  .search-input-box img:hover {
    cursor: pointer;
  }

  .sort {
    /* OTC Glold */
    color: #C7BA9A;
    border: 1px solid #C7BA9A;
    box-sizing: border-box;
    border-radius: 20px;
    padding: 10px 16px;
    display: inline-block;
  }

  .sort:hover {
    cursor: pointer;
  }

  .sort span {
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;
  }

  .sort.active {
    /* OTC Glold */
    color: white;
    background-color: #C7BA9A;
  }

  .sort.active img {
    filter: brightness(2);
  }

  .sort img {}

  .page-list {
    display: flex;
    justify-content: end;
    align-items: center;
    margin-right: 250px;
    width: 1200px;
    margin: 0 auto;
  }

  .page-list li {
    margin: 10px;
    color: #999;
    font-size: 18px;
  }

  .page-list li:hover {
    cursor: pointer;
  }

  .page-list li.active {

    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }

  .page-list .left {
    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }

  .page-list .right {
    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }
}

@media screen and (max-width: 900px) {

  .nft-market-container {
    background: #F5F5F5;
    overflow: hidden;
  }

  .banner-container {
    padding: 0 20px;
    height: 381px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    background: #05004D;
    flex-direction: column;
  }

  .banner-container .content {
    width: 100%;

  }

  .banner-container .title {
    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 38px;
    /* identical to box height */


    color: #FFFFFF;
  }

  .banner-container img {
    width: 90%;
  }

  .banner-container .title span {

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
    background-color: #fff;
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

  .search-header-container {}

  .search-header-container h3 {

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

  .search-list-container {
    list-style: none;
    width: 100%;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
  }

  .search-list-container li {
    width: 320px;
    height: 463px;
    margin: 20px 40px;
    box-sizing: border-box;
    overflow: hidden;
    background: #FFFFFF;
    border-radius: 0px 0px 20px 20px;
  }

  .search-list-container li img {
    width: auto;
    height: auto;
    max-width: 100%;
    border-radius: 10px;
    max-height: 100%;
    display: block;
  }

  .search-list-container li .content .title {
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

  .search-list-container li .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-align: center;

    text-overflow: ellipsis;
    white-space: nowrap;
    margin-left: 20px;
    margin-right: 20px;
    /* VirgoOTC Blue */

    color: #05004D;
  }

  .search-list-container li .content .value {
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    /* identical to box height */

    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .contact-container {
    text-align: center;
  }

  .contact-container .content {
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .contact-container .contact-btn {

    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    text-align: center;

    width: 200px;
    height: 50px;
    line-height: 46px;
    margin: 20px auto;
    background-color: transparent;
    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;

  }


  .slider-container {}

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

  .slider-container .owl-item a {
    display: block;
  }

  .slider-container .owl-item {
    width: 380px;
    height: 480px;
    /* margin: 20px; */
    box-sizing: border-box;
    overflow: hidden;
    background: #05004D;
    border-radius: 0px 0px 20px 20px;
  }

  .slider-container .owl-item a img {
    width: 380px;
    height: 380px;
    display: block;
  }

  .slider-container .owl-item a .content .title {
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    margin-top: 18px;
    line-height: 50px;
    /* identical to box height */

    text-align: center;

    /* VirgoOTC Blue */

    color: #fff;
  }

  .slider-container .owl-item a .content .desc {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;
    text-align: center;

    text-overflow: ellipsis;
    white-space: nowrap;
    margin-left: 20px;
    margin-right: 20px;
    /* VirgoOTC Blue */

    color: #05004D;
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
    line-height: 46px;
    margin: 20px auto;

    /* VirgoOTC Blue */

    border: 2px solid #05004D;
    box-sizing: border-box;
    border-radius: 25px;

    /* VirgoOTC Blue */

    color: #05004D;
  }

  .search-filter-container {
    width: 100vw;
    display: block;
    padding: 0 10px;
  }

  .search-input-box {
    display: inline-block;
    width: 100%;
    height: 52px;
    margin: 10px auto;
    box-sizing: border-box;

    /* FFFFFF */

    background: #FFFFFF;
    border-radius: 20px;
    overflow: hidden;
  }

  .search-input-box input {

    height: 52px;
    width: 86%;
    padding: 0 20px;
    font-size: 24px;
    border: none;
    outline: none;
    font-size: 16px;
    line-height: 19px;

    /* D8D8D8 */

    color: #D8D8D8;
  }

  .search-input-box img {
    width: 24px;
    height: 24px;
  }

  .search-input-box img:hover {
    cursor: pointer;
  }

  .sort {
    border: 1px solid #C7BA9A;
    box-sizing: border-box;
    border-radius: 20px;
    padding: 10px 4px;
    display: inline-block;
  }

  .sort span {
    font-size: 12px;
    line-height: 17px;
    /* identical to box height */

    text-align: center;

    /* OTC Glold */

    color: #C7BA9A;
  }

  .sort img {
    width: 20px;
    height: 20px;
  }

  .page-list {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 0;
  }

  .page-list li {
    margin: 10px;
    color: #999;
    font-size: 18px;
  }

  .page-list li.active {

    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }

  .page-list .left {
    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }

  .page-list .right {
    color: #05004D;
    font-size: 18px;
    font-weight: bold;
  }
}

#upSort img {
  vertical-align: sub;
}

.nft-market-container .owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
  background: #05004D;
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

.owl-prev img {
  margin: -8px 0 0 -3px;
}

.owl-next img {
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
  box-shadow: 0px 4px 4px rgb(171 168 168 / 25%) !important;

}

.owl-prev:hover {
  color: #05004D !important;
  box-shadow: 0px 4px 4px rgb(171 168 168 / 25%) !important;
}
</style>
<script>
(function($) {
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    var owl = $('.owl-carousel');
    if (screen.width > 900) {
      owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 56,
        autoplay: false,
        autoplayTimeout: 1500,
        pagination: true,
        nav: true,
        dots: true,
        navText: ["<img src='<?= get_template_directory_uri() ?>/img/nft/arrow_left.png' alt=''>",
          "<img src='<?= get_template_directory_uri() ?>/img/nft/arrow_right.png' alt=''>"
        ],
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

    $('.tabs nav a').on('click', function() {
      scroll_to_container($(this).index());
    });

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

  $('#searchBtn').click(function(event) {
    const keyword = $('#keyword').val();
    let query = window.location.search
    if (query.includes('?')) {
      query = query.slice(1)
    }
    let queryList = query.split('&')
    let res = []
    queryList.forEach(item => {
      if (item.includes('keyword=')) {
        res.push('keyword=' + keyword)
      } else {

        res.push(item);
      }
    });
    if (!query.includes('keyword=') && keyword) {
      res.push('keyword=' + keyword)
    }
    window.location.href = window.location.origin + window.location.pathname + '?' + res.join('&')
  })

  $('#upSort').click(function(event) {
    $(this).addClass('active');
    $('#page-list').removeClass('active');
    let query = window.location.search
    if (query.includes('?')) {
      query = query.slice(1)
    }
    let queryList = query.split('&')
    let res = []
    queryList.forEach(item => {
      if (item.includes('sort=')) {
        res.push('sort=up')
      } else {

        res.push(item);
      }
    });
    if (!query.includes('sort=')) {
      res.push('sort=up')
    }
    window.location.href = window.location.origin + window.location.pathname + '?' + res.join('&')
  })

  $('#downSort').click(function(event) {
    let query = window.location.search
    if (query.includes('?')) {
      query = query.slice(1)
    }
    let queryList = query.split('&')
    let res = []
    queryList.forEach(item => {
      if (item.includes('sort=')) {
        res.push('sort=down')
      } else {

        res.push(item);
      }
    });
    if (!query.includes('sort=')) {
      res.push('sort=down')
    }
    window.location.href = window.location.origin + window.location.pathname + '?' + res.join('&')
  })
  $('#page-list').click(function(event) {

    $(this).addClass('active');
    $('#upSort').removeClass('active');
    if (event.target.dataset && event.target.dataset.id) {
      let query = window.location.search
      if (query.includes('?')) {
        query = query.slice(1)
      }
      let queryList = query.split('&')
      let res = []
      queryList.forEach(item => {
        if (item.includes('current_page=')) {
          res.push('current_page=' + event.target.dataset.id)
        } else {

          res.push(item);
        }
      });
      if (!query.includes('current_page=')) {
        res.push('current_page=' + event.target.dataset.id)
      }
      window.location.href = window.location.origin + window.location.pathname + '?' + res.join('&')
    }
  })

})(jQuery);
</script>


<?php
get_footer('otc');