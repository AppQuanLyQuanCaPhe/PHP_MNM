<?php
    session_start();
    include 'connect_db.php'; 
    if(!isset($_SESSION["count"])){
      $_SESSION["count"]=0;
    }
    if(!isset($_SESSION["cart"])){
      $_SESSION["cart"][]=null;
    }
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
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet prefetch'>
    <script src="assets/javascripts/modernizr.custom.js"></script>
  </head>
  <body class="demo-1">
    <script>
      console.log(<?= json_encode($_GET["id"]); ?>);    
    </script>

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
          <header class="wrap-header purple-top-dot">
            <?php 
              include 'header.php';
            ?>
            <div class="tittle-sub-top pad-top-150">
              <div class="container">
                Home /
                <h1>
                  Chart
                </h1>
                <h2>
                  Cake
                </h2>
              </div>
            </div>
          </header>
          <div class="purple-arrow">
            &nbsp;
          </div>
          <div class="chart-cake">
            <div class="container">
              <table class="table table-bordered table-hover hidden-xs">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Sản phẩm
                    </th>
                    <th>
                      Mô tả
                    </th>
                    <th>
                      ngày
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                      Giá bán
                    </th>
                    <th>
                      Trạng thái
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach( $_SESSION["cart"] as $key => $value ){
                      $sql = "SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND sanpham.MaSP = $value";
                      $rows = mysqli_query($conn,$sql);
                      if($item=mysqli_fetch_assoc($rows)){
                            
                ?>
                  <tr>
                    <td>
                      <?php echo "".(int)$key+1 ?>
                    </td>
                    <td>
                      <img alt="Cake-one" class="img-100px" src="./hinhbanhngot/<?php echo $item['TenLoai'];?>/<?php echo $item['anh'];?>">
                    </td>
                    <td class="chart-description">
                      <h4 class="mar-btm-0">
                        <?php echo "".$item['TenSP']?>
                      </h4>
                      <ul class="star normal-heading">
                        <li>
                          <div class="icon-star-active">
                            &nbsp;
                          </div>
                        </li>
                        <li>
                          <div class="icon-star-active">
                            &nbsp;
                          </div>
                        </li>
                        <li>
                          <div class="icon-star-active">
                            &nbsp;
                          </div>
                        </li>
                        <li>
                          <div class="icon-star-disable">
                            &nbsp;
                          </div>
                        </li>
                        <li>
                          <div class="icon-star-disable">
                            &nbsp;
                          </div>
                        </li>
                        <li>
                          <span class="grey-color"><i>Required</i></span>
                        </li>
                      </ul>
                      <p class="mar-top-10 pad-top-10 top-dashed">
                        <?php echo "".$item['ChiTietSP']; ?>
                      </p>
                    </td>
                    <td>
                      27 tháng 4 năm 2019
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      <?php echo "".$item['GIaSP'];?>
                    </td>
                    <td class="chart-center">
                      <button class="btn btn-primaty mar-right-10">Chưa đặt hàng</button>
                    </td>
                  </tr>
                  <?php 
                    }}
                  ?>
                </tbody>
              </table>
              <button class="btn btn-danger" style="float:right;" name="datmua">Đặt mua</button>
              <div class="visible-xs">
                <div class="top-cake-table">
                  <div class="top-cake-no">
                    No : 1
                  </div>
                  <div class="top-cake-product">
                    Product : Purple Cake
                    <ul class="star normal-heading">
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <span class="grey-color"><i>Required</i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="top-cake-desription">
                    Description : 
                    <p>
                      Toffee sugar plum halvah liquorice brownie gummies chocolate bar muffin candy canes. Dessert jelly-o tootsie roll jelly sesame snaps icing.
                    </p>
                  </div>
                  <div class="top-cake-img">
                    <img alt="Cake-one" class="img-150px" src="assets/images/cake-one-buy.png">
                  </div>
                  <div class="top-cake-button text-center">
                    <button class="btn btn-pink-cake mar-right-10">Checkout</button>
                  </div>
                </div>
                <div class="top-cake-table">
                  <div class="top-cake-no">
                    No : 2
                  </div>
                  <div class="top-cake-product">
                    Product : Pink Cake
                    <ul class="star normal-heading">
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <span class="grey-color"><i>Required</i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="top-cake-desription">
                    Description : 
                    <p>
                      Toffee sugar plum halvah liquorice brownie gummies chocolate bar muffin candy canes. Dessert jelly-o tootsie roll jelly sesame snaps icing.
                    </p>
                  </div>
                  <div class="top-cake-img">
                    <img alt="Cake-one" class="img-150px" src="assets/images/cake-two-buy.png">
                  </div>
                  <div class="top-cake-button text-center">
                    <button class="btn btn-pink-cake mar-right-10">Checkout</button>
                  </div>
                </div>
                <div class="top-cake-table">
                  <div class="top-cake-no">
                    No : 3
                  </div>
                  <div class="top-cake-product">
                    Product : Pink Cake
                    <ul class="star normal-heading">
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-active">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <div class="icon-star-disable">
                          &nbsp;
                        </div>
                      </li>
                      <li>
                        <span class="grey-color"><i>Required</i></span>
                      </li>
                    </ul>
                  </div>
                  <div class="top-cake-desription">
                    Description : 
                    <p>
                      Toffee sugar plum halvah liquorice brownie gummies chocolate bar muffin candy canes. Dessert jelly-o tootsie roll jelly sesame snaps icing.
                    </p>
                  </div>
                  <div class="top-cake-img">
                    <img alt="Cake-one" class="img-150px" src="assets/images/cake-three-buy.png">
                  </div>
                  <div class="top-cake-button text-center">
                    <button class="btn btn-pink-cake mar-right-10">Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Header Cake -->
        <div class="green-arrow">
          &nbsp;
        </div>
        <!-- Start More Cake -->
        <section class="more-cake text-center">
          <div class="container">
            <img alt="Cake-White" class="mar-top-20" src="assets/images/cake-white.png">
            <p class="mar-top-20 mar-btm-20">
              You can found&nbsp;<b>See More Product</b>&nbsp;below this.
            </p>
            <div class="row">
              <div class="col-sm-4">
                <div class="more-product">
                  <img alt="More-Product" class="img-100" src="assets/images/shop-cake1.jpg">
                </div>
                <div class="detail-product">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="normal-heading green-color">
                        $40
                      </h1>
                    </div>
                    <div class="col-sm-6">
                      <b>Green </b><i>Cupcake</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="more-product">
                  <img alt="More-Product" class="img-100" src="assets/images/shop-cake2.jpg">
                </div>
                <div class="detail-product">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="normal-heading green-color">
                        $40
                      </h1>
                    </div>
                    <div class="col-sm-6">
                      <b>Cream </b><i>Cupcake</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="more-product">
                  <img alt="More-Product" class="img-100" src="assets/images/shop-cake3.jpg">
                </div>
                <div class="detail-product">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="normal-heading green-color">
                        $40
                      </h1>
                    </div>
                    <div class="col-sm-6">
                      <b>Choco </b><i>Cupcake</i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End More Cake -->
        <div class="green-arrow">
          &nbsp;
        </div>
        <div class="pad-top-150"></div>
        <!-- Start Footer Cake -->
        <footer>
          <div class="triangle-no-animate">
            &nbsp;
          </div>
          <div class="container">
            <div class="abs-logo-footer">
              <img alt="Logo-Cake" src="assets/images/logo-150.png">
            </div>
            <div class="top-footer">
              <div class="row">
                <div class="col-sm-6">
                  <img alt="Logo-White" class="img-cake-center-res mar-btm-20" src="assets/images/logo-white.png">
                </div>
                <div class="col-sm-6 text-right">
                  <ul class="sosmed-cake">
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-facebook">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-twitter">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-behance">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-dribbble">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-pinterest">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line-top-white mar-btm-20 mar-top-20">
              &nbsp;
            </div>
            <div class="content-about-footer">
              <!-- Column -->
              <div class="col-sm-4">
                <h4>
                  Cake's Dream
                </h4>
                <p class="mar-btm-20">
                  Cookie apple pie donut gingerbread <br>sweet roll pudding topping <br>marshmallow.<br>
                </p>
                <p class="mar-btm-20">
                  Jl Kalidam RT 05 RW 10 <br>Cimahi Selatan, Indonesia<br>
                </p>
                <p class="mar-btm-20">
                  Telp : <strong>085 327787266</strong>
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4 hidden-xs">
                <ul class="list-picture-footer">
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-1.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-1.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-2.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-2.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-3.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-3.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-4.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-4.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-5.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-5.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-6.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-6.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-7.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-7.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-8.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-8.jpg"></a>
                  </li>
                </ul>
                <div class="clear"></div>
                <p>
                  Cookie apple pie donut gingerbread <br>sweet roll pudding topping
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <ul class="list-link-home">
                  <li>
                    <a href="shop.php">Shop</a>
                  </li>
                  <li>
                    <a href="gallery.php">Gallery</a>
                  </li>
                  <li>
                    <a href="privacy-policy.php">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="terms-of-use.php">Terms Of Use</a>
                  </li>
                  <li>
                    <a href="blog-center.php">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="logo-dn">
              <img alt="Delip Nugraha" src="assets/images/dn.png">
            </div>
          </div>
        </footer>
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
