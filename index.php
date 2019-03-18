<?php
    session_start();
    include'connect_db.php'; 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cake&#39;s Dream is Beautiful Template " name="description">
    <meta content="" name="author">
    <link href="assets/images/favicon-32x32.png" rel="shortcut icon">
    <title>Cake's Dreams</title>
    <link href="assets/stylesheets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/stylesheets/css/font-family.css" rel="stylesheet">
    <link href="assets/stylesheets/css/responsive.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">
    <link href="assets/javascripts/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/css/global.css" rel="stylesheet">
    <link href="assets/stylesheets/css/effect2.css" rel="stylesheet" type="text/css">
    <script src="assets/javascripts/modernizr.custom.js"></script>
  </head>
  <body class="demo-1">
    <div class="ip-container" id="ip-container">
      <!--initial header-->
      <header class="ip-header">
        <div class="ip-loader">
          <svg class="ip-inner" height="60px" viewbox="0 0 80 80" width="60px"><path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path><path class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" id="ip-loader-circle"></path></svg>
        </div>
      </header>
      <!--main content-->
      <div class="ip-main">
        <div class="top-highlight hide">
          &nbsp;
        </div>
        <!-- Start Header Cake -->
        <section class="header-wrapper">
          <header class="wrap-header">
            <?php 
              include 'header.php';
            ?>
            <div class="tittle-cake text-center pad-top-150">
              <div class="container">
                <h2>
                  Beautiful
                </h2>
                <h1>
                  CUPCAKES
                </h1>
              </div>
            </div>
            <div class="slider-cake">
              <div class="container pad-md-100">
                <div class="center">
                  <div class="img-relative">
                    <img alt="Cake-one" src="assets/images/cake-one.png">
                    <div class="price-cake hidden-xs">
                      <p>
                        $40
                      </p>
                    </div>
                  </div>
                  <div>
                    <img alt="Cake-Two" src="assets/images/cake-two.png">
                  </div>
                  <div>
                    <img alt="Cake-Three" src="assets/images/cake-three.png">
                  </div>
                  <div>
                    <img alt="Cake-Four" src="assets/images/cake-four.png">
                  </div>
                  <div>
                    <img alt="Cake-Five" src="assets/images/cake-five.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="green-table mar-to-top">
              &nbsp;
            </div>
            <div class="green-arrow">
              &nbsp;
            </div>
          </header>
        </section>
        <!-- End Header Cake --><!-- Start About Cake -->
        <!-- <section class="about-cake">
          <div class="container">
            About Content
            <h2 class="hide">
              &nbsp;
            </h2>
            <div class="about-content">
              <img alt="Cake-White" src="assets/images/cake-white.png">
              <p>
                Toffee sugar plum halvah liquorice <b>brownie gummies</b>&nbsp;chocolate bar muffin candy canes.Dessert jelly-o tootsie roll jelly sesame snaps icing.
              </p>
            </div>
          </div>
        </section> -->
        <!-- End About Cake --><!-- Start Product Cake -->

        <section class="product-cake">
          <div class="container">
            <!-- Product Tittle -->
            <div class="product-tittle">
              <img alt="Cake-Purple" src="assets/images/cake-purple.png">
              <h2>
                TOP PRODUCTS
              </h2>
            </div>
            <!-- Product Content -->
            <div class="product-content">
              <div class="row">
                <!-- Column -->
                <?php
                  $rows = mysqli_query($conn,"SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai=1 ORDER BY GIaSP DESC LIMIT 1");
                  $item = mysqli_fetch_assoc($rows);                                 
                ?>
                <div class="col-sm-4">
                  <div class="wrap-product">
                    <!-- class="top-product blue-cake"  -->
                    <div class="top-product blue-cake" style="background: url('./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>') no-repeat right; background-size: 360px;">
                      <!-- <h1 class="normal-heading">
                        <?php echo $item["GIaSP"]; ?>đ
                      </h1>
                      <p class="mar-top-10 mar-btm-0">
                        <?php echo $item['TenSP']; ?>
                      </p> -->
                      <!-- <span>Lorem ipsum set <br>amet.</span> -->
                    </div>
                    <div class="bottom-product bottom-blue">
                      <div class="bottom-product-abs blue-dot">
                        <div class="button-cake">
                          <div class="blue-button-cake">
                            <a href="./product-details-page.php?id=<?php echo $item['MaSP']; ?>"><button class="button-d-cake pink-button-cake"> CHI TIẾT</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-bottom-cake">
                        <p>
                          <?php echo $item['ChiTietSP']; ?>
                        </p>
                        <div class="blue-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Column -->
                <?php
                  $rows = mysqli_query($conn,"SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai=2 ORDER BY GIaSP DESC LIMIT 1");
                  $item = mysqli_fetch_assoc($rows);                                 
                ?>
                <div class="col-sm-4">
                  <div class="wrap-product">
                    <div class="top-product red-cake" style="background: url('./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>') no-repeat right; background-size: 360px;">
                      <!-- <h1 class="normal-heading">
                        <?php echo $item["GIaSP"]; ?>đ
                      </h1>
                      <p class="mar-top-10 mar-btm-0">
                        <?php echo $item['TenSP']; ?>
                      </p> -->
                     <!--  <span>Lorem ipsum set <br>amet.</span> -->
                    </div>
                    <div class="bottom-product bottom-red">
                      <div class="bottom-product-abs pink-dot">
                        <div class="button-cake">
                          <div class="blue-button-cake">
                            <a href="./product-details-page.php?id=<?php echo $item['MaSP']; ?>"><button class="button-d-cake pink-button-cake"> CHI TIẾT</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-bottom-cake">
                        <p>
                          <?php echo $item['ChiTietSP']; ?>
                        </p>
                        <div class="red-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <?php
                  $rows = mysqli_query($conn,"SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai=3 ORDER BY GIaSP DESC LIMIT 1");
                  $item = mysqli_fetch_assoc($rows);                                 
                ?>
                <div class="col-sm-4">
                  <div class="wrap-product">
                    <div class="top-product orange-cake" style="background: url('./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>') no-repeat right; background-size: 360px;">
                      <!-- <h1 class="normal-heading">
                        <?php echo $item["GIaSP"]; ?>đ
                      </h1>
                      <p class="mar-top-10 mar-btm-0">
                        <?php echo $item['TenSP']; ?>
                      </p> -->
                      <!-- <span>Lorem ipsum set <br>amet.</span> -->
                    </div>
                    <div class="bottom-product bottom-orange">
                      <div class="bottom-product-abs orange-dot">
                        <div class="button-cake">
                          <div class="blue-button-cake">
                            <a href="./product-details-page.php?id=<?php echo $item['MaSP']; ?>"><button class="button-d-cake pink-button-cake"> CHI TIẾT</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-bottom-cake">
                        <p>
                          <?php echo $item['ChiTietSP']; ?>
                        </p>
                        <div class="orange-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <?php
                  $rows = mysqli_query($conn,"SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai=4 ORDER BY GIaSP DESC LIMIT 1");
                  $item = mysqli_fetch_assoc($rows);                                 
                ?>
                <div class="col-sm-4">
                  <div class="wrap-product">
                    <!-- class="top-product blue-cake"  -->
                    <div class="top-product blue-cake" style="background: url('./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>') no-repeat right; background-size: 360px;">
                      <!-- <h1 class="normal-heading">
                        <?php echo $item["GIaSP"]; ?>đ
                      </h1>
                      <p class="mar-top-10 mar-btm-0">
                        <?php echo $item['TenSP']; ?>
                      </p> -->
                      <!-- <span>Lorem ipsum set <br>amet.</span> -->
                    </div>
                    <div class="bottom-product bottom-blue">
                      <div class="bottom-product-abs blue-dot">
                        <div class="button-cake">
                          <div class="blue-button-cake">
                            <a href="./product-details-page.php?id=<?php echo $item['MaSP']; ?>"><button class="button-d-cake pink-button-cake"> CHI TIẾT</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-bottom-cake">
                        <p>
                          <?php echo $item['ChiTietSP']; ?>
                        </p>
                        <div class="blue-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <?php
                  $rows = mysqli_query($conn,"SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai=5 ORDER BY GIaSP DESC LIMIT 1");
                  $item = mysqli_fetch_assoc($rows);                                 
                ?>
                <div class="col-sm-4">
                  <div class="wrap-product">
                    <div class="top-product red-cake" style="background: url('./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>') no-repeat right; background-size: 360px;">
                      <!-- <h1 class="normal-heading">
                        <?php echo $item["GIaSP"]; ?>đ
                      </h1>
                      <p class="mar-top-10 mar-btm-0">
                        <?php echo $item['TenSP']; ?>
                      </p> -->
                      <!-- <span>Lorem ipsum set <br>amet.</span> -->
                    </div>
                    <div class="bottom-product bottom-red">
                      <div class="bottom-product-abs pink-dot">
                        <div class="button-cake">
                          <div class="blue-button-cake">
                            <a href="./product-details-page.php?id=<?php echo $item['MaSP']; ?>"><button class="button-d-cake pink-button-cake"> CHI TIẾT</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-bottom-cake">
                        <p>
                          <?php echo $item['ChiTietSP']; ?>
                        </p>
                        <div class="red-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column Tittle -->
                <div class="col-sm-12">
                  <p class="text-content text-center">
                    Sản phẩm của chúng tôi vô cùng <b class="purple-color">thơm ngon và chất lượng</b>&nbsp;được sản xuất với những nguyên liệu tốt nhất.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Product Cake --><!-- Start News Cake -->
        <!-- <section class="news-cake">
          <div class="triangle-no-animate">
            &nbsp;
          </div>
          News Content
          <div class="new-cake-content mar-top-20">
            Tittle News Content
            <div class="tittle-cake text-center">
              <div class="container">
                <img alt="Cake-White" src="assets/images/cake-white.png">
                <h2>
                  New's Cake
                </h2>
              </div>
            </div>
            Content News
            <div class="container mar-top-20">
              <div class="row">
                <div class="col-sm-6 no-pad-right">
                  <div class="left-news">
                    <h1>
                      CAKE <span>Wedding</span>
                    </h1>
                  </div>
                  <div class="right-news">
                    <div class="text-table">
                      <p>
                        <a href="shop.php"><span class="discount">40<span class="percent">%</span><br></span><span class="sale">Sale Product</span></a>
                      </p>
                    </div>
                    <div class="text-table dot-background">
                      <p>
                        <img alt="Client" src="assets/images/client.png">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 no-pad-left">
                  <div class="top-news-right">
                    <div class="left-news-right">
                      <div class="text-table">
                        <a class="fancybox" data-fancybox-group="contentnews" href="assets/images/ice-cream.png">
                          <div class="wizz-effect wizz-orange">
                            <div class="wrap-info">
                              Ice Cream
                            </div>
                          </div>
                        </a>
                        <p>
                          <img alt="Ice Cream" class="img-100" src="assets/images/ice-cream.png">
                        </p>
                      </div>
                    </div>
                    <div class="right-news-right">
                      <div class="text-table">
                        <a class="fancybox" data-fancybox-group="contentnews" href="assets/images/ice-cream-cake.png">
                          <div class="wizz-effect wizz-green">
                            <div class="wrap-info">
                              Cake's Flavors
                            </div>
                          </div>
                        </a>
                        <p>
                          <img alt="Ice Cream Cake" class="img-100" src="assets/images/ice-cream-cake.png">
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-new-right">
                    <div class="quote">
                      <div>
                        <span class="mar-right-10"><img alt="Quote" class="Quote" src="assets/images/quote.png"></span>
                        <p>
                          <span class="bold-font-lg">Adam Grilss, </span><span>&nbsp; CEO B </span>
                        </p>
                        <p>
                          That’s great product wonderfull place and cakes, so yummy this cake.
                        </p>
                      </div>
                      <div>
                        <span class="mar-right-10"><img alt="Quote" class="Quote" src="assets/images/quote.png"></span>
                        <p>
                          <span class="bold-font-lg">Natasya, </span><span>&nbsp; CEO B </span>
                        </p>
                        <p>
                          That’s great product wonderfull place and cakes, so yummy this cake.
                        </p>
                      </div>
                      <div>
                        <span class="mar-right-10"><img alt="Quote" class="Quote" src="assets/images/quote.png"></span>
                        <p>
                          <span class="bold-font-lg">Melody, </span><span>&nbsp; CEO B </span>
                        </p>
                        <p>
                          That’s great product wonderfull place and cakes, so yummy this cake.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            End Content News
          </div>
          End News Content
        </section> -->
        <!-- End News Cake --><!-- Start Option Cake -->
        <section class="option">
          <!-- Tittle Option -->
          <div class="green-table pad-top-10 pad-btm-10">
            <div class="container">
              <div class="tittle-cake text-center">
                <img alt="Cake-White" src="assets/images/cake-white.png">
                <h2>
                  CATEGORY
                </h2>
              </div>
            </div>
          </div>
          <div class="green-arrow"></div>
          <!-- Option Content -->
          <div class="option-content">
            <div class="container">
              <!-- Column -->
              <div class="col-sm-4">
                <a href="./category.php?id=1">
                  <div class="messes">
                    <div class="messes-show"></div>
                    <div class="round-wrap green-option"></div>
                  </div>
                </a>
                <h4 class="green-color">
                  Bread
                </h4>
                <div class="line-temp line-green-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Bánh mì nướng với nhiều hương vị khác nhau sẽ khiến bạn thích thú.
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <a href="./category.php?id=2">
                  <div class="messes">
                    <div class="messes-show"></div>
                    <div class="round-wrap orange-option"></div>
                  </div>
                </a>
                <h4 class="orange-color">
                  Choux
                </h4>
                <div class="line-temp line-orange-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Bánh su kem ngon ngọt với nhiều hình dáng độc đáo sẽ khiến bạn thích thú.
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <a href="./category.php?id=3">
                  <div class="messes">
                    <div class="messes-show"></div>
                    <div class="round-wrap blue-option"></div>
                  </div>
                </a>
                <h4 class="blue-color">
                  Cookie
                </h4>
                <div class="line-temp line-blue-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Bánh quy giòn sẽ khiến bạn thích thú với nhiều kiểu dáng khác nhau.
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <a href="./category.php?id=4">
                  <div class="messes">
                    <div class="messes-show"></div>
                    <div class="round-wrap pink-option"></div>
                  </div>
                </a>
                <h4 class="pink-color">
                  Cupcake
                </h4>
                <div class="line-temp line-pink-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Bánh bông lan xốp mềm thơm ngon với nhiều hương vị sẽ khiến bạn thích thú.
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <a href="./category.php?id=5">
                  <div class="messes">
                    <div class="messes-show"></div>
                    <div class="round-wrap purple-option"></div>
                  </div>
                </a>
                <h4 class="purple-color">
                  Donut
                </h4>
                <div class="line-temp line-purple-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Bánh vòng ngon ngọt giòn tan với nhiều hương vị độc đáo.
                </p>
              </div>
              <!-- Column -->
              <!-- <div class="col-sm-4">
                <div class="messes">
                  <div class="messes-show"></div>
                  <div class="round-wrap dpurple-option"></div>
                </div>
                <h4 class="dpurple-color">
                  Make Cake
                </h4>
                <div class="line-temp line-dpurple-sm">
                  &nbsp;
                </div>
                <p class="text-center mar-top-10">
                  Cookie apple pie donut gingerbread sweet roll pudding topping marshmallow.
                </p>
              </div> -->
            </div>
          </div>
        </section>
        <!-- End Option Cake --><!-- Start Pricing Cake -->
        <!-- <section class="pricing-cake">
          <div class="triangle-no-animate">
            &nbsp;
          </div>
          Content Pricing Cake
          <div class="content-pricing-cake">
            <div class="tittle-cake text-center">
              <div class="container">
                <img alt="Cake-White" src="assets/images/cake-white.png">
                <h2>
                  Our Price
                </h2>
              </div>
            </div>
            <div class="container mar-top-20">
              Column
              <div class="col-sm-3 mar-btm-20">
                <div class="img-wrap-price">
                  <img alt="Price-Purple" class="img-full-sm" src="assets/images/price-purple.png">
                </div>
                <div class="content-price content-price-tag text-center">
                  <h4 class="dpurple-color">
                    $ 100/<span>Package</span>
                  </h4>
                  <div class="price-purple">
                    <div class="triangle-no-animate">
                      &nbsp;
                    </div>
                    <div class="text-price">
                      Just Cupcakes + Free Order
                    </div>
                    <ul class="text-left list-price pad-top-0i">
                      <li class="purple-line">
                        - 10 Cupcakes
                      </li>
                      <li class="purple-line">
                        - Free 1 Cupcakes 
                      </li>
                      <li class="purple-line">
                        - Free Order
                      </li>
                    </ul>
                    <div class="price-btn price-purple-btn">
                      Order
                    </div>
                  </div>
                </div>
              </div>
              Column
              <div class="col-sm-3 mar-btm-20">
                <div class="img-wrap-price">
                  <img alt="Price-Pink" class="img-full-sm" src="assets/images/price-pink.png">
                </div>
                <div class="content-price content-price-tag text-center">
                  <h4 class="pink-color">
                    $ 200/<span>Package</span>
                  </h4>
                  <div class="price-pink">
                    <div class="triangle-no-animate">
                      &nbsp;
                    </div>
                    <div class="text-price">
                      Cupcakes + Ice Cream + Free Order
                    </div>
                    <ul class="text-left list-price pad-top-0i">
                      <li class="pink-line">
                        - 20 Cupcakes + 5 Ice Cream
                      </li>
                      <li class="pink-line">
                        - Free 5 Cupcakes 
                      </li>
                      <li class="pink-line">
                        - Free Order
                      </li>
                    </ul>
                    <div class="price-btn price-pink-btn">
                      Order
                    </div>
                  </div>
                </div>
              </div>
              Column
              <div class="col-sm-3 mar-btm-20">
                <div class="img-wrap-price">
                  <img alt="Price-Green" class="img-full-sm" src="assets/images/price-green.png">
                </div>
                <div class="content-price content-price-tag text-center">
                  <h4 class="green-color">
                    $ 300/<span>Package</span>
                  </h4>
                  <div class="price-green">
                    <div class="triangle-no-animate">
                      &nbsp;
                    </div>
                    <div class="text-price">
                      Cupcakes + Ice Cream + Cookies
                    </div>
                    <ul class="text-left list-price pad-top-0i">
                      <li class="green-line">
                        - 25 Cupcakes + 5 Ice Cream
                      </li>
                      <li class="green-line">
                        - Free 5 Cupcakes
                      </li>
                      <li class="green-line">
                        - 2 Cookies Free Order
                      </li>
                    </ul>
                    <div class="price-btn price-green-btn">
                      Order
                    </div>
                  </div>
                </div>
              </div>
              Column
              <div class="col-sm-3 mar-btm-20">
                <div class="img-wrap-price">
                  <img alt="Price-Blue" class="img-full-sm" src="assets/images/price-blue.png">
                </div>
                <div class="content-price content-price-tag text-center">
                  <h4 class="blue-color">
                    $ 400/<span>Package</span>
                  </h4>
                  <div class="price-blue">
                    <div class="triangle-no-animate">
                      &nbsp;
                    </div>
                    <div class="text-price">
                      Special Cupcakes + Ice Cream + Cookies
                    </div>
                    <ul class="text-left list-price pad-top-0i">
                      <li class="blue-line">
                        - 30 Special Cupcakes
                      </li>
                      <li class="blue-line">
                        - Free 10 Cupcakes 
                      </li>
                      <li class="blue-line">
                        - 10 Ice Cream
                      </li>
                    </ul>
                    <div class="price-btn price-blue-btn">
                      Order
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="triangle-top-no-animate">
            &nbsp;
          </div>
        </section> -->
        <!-- End Pricing Cake --><!-- Start Team Cake -->
        <section class="abouts-cake">
          <div class="tittle-cake text-center mar-top-20">
            <div class="container">
              <img alt="Cake-Pink" src="assets/images/cake-pink.png">
              <h2 class="pink-color">
                Contact Us
              </h2>
            </div>
          </div>
          <div class="container mar-top-20">
            <div class="col-sm-offset-3 col-sm-6">
              <div class="form-group">
                <input class="form-control form-default-cakes" placeholder="Full Name" type="text">
              </div>
              <div class="form-group">
                <input class="form-control form-default-cakes" placeholder="Email" type="email">
              </div>
              <textarea class="form-control form-default-cakes" placeholder="Your Message"></textarea>
              <div class="form-group">
                <button class="btn btn-lg btn-pink-cake btn-send mar-top-20">Send</button>
              </div>
            </div>
          </div>
        </section>
        <!-- End Option Cake --><!-- Start Footer Cake -->
        <?php 
          include 'footer.php';
        ?>
        <!-- End Option Cake -->
      </div>
    </div>
    <script src="assets/javascripts/jquery.js"></script>
    <script src="assets/javascripts/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/javascripts/slick.js"></script>
    <script src="assets/javascripts/wow/wow.js"></script>
    <script src="assets/javascripts/custom.js"></script>
    <script src="assets/javascripts/bootstrap.js"></script>
    <script src="assets/javascripts/classie.js"></script>
    <script src="assets/javascripts/pathLoader.js"></script>
    <script src="assets/javascripts/main.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
  </body>
</html>
