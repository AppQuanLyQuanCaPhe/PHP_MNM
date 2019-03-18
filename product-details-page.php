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
          <header class="wrap-header purple-top-dot">
            <div class="top-absolute">
              <?php 
                include 'header.php';
              ?>
              <div class="triangle">
                &nbsp;
              </div>
            </div>
            <div class="tittle-sub-top pad-top-150">
              <a href="index.php"><div class="container">
                Home</a>
                <h1>
                   /Details
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
          <?php
              if($_GET["id"]==0||$_GET["id"]==null){
                
               } else{
                $id=$_GET["id"];
                $sql = "SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND MaSP='$id'";
              $rows = mysqli_query($conn,$sql);
              $item = mysqli_fetch_assoc($rows);                                 
          ?>  
          <script> console.log(<?= json_encode($sql) ?>);</script>
          <div class="chart-cake">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <img alt="Cake-one" src="./hinhbanhngot/<?php echo $item['TenLoai']; ?>/<?php echo $item['anh']; ?>" style = "width: 275px;">
                </div>
                <div class="col-sm-6">
                  <div class="shop-back">
                    <a href="shop.php">&lt;-- Continue Shopping</a>
                  </div>
                  <div class="tittle-chart-cake">
                    <h1 class="pink-color">
                      <?php echo $item['TenSP']; ?>
                    </h1>
                  </div>
                  
                  <div class="tittle-chart-cake mar-top-10 mar-btm-10">
                    <h1 class="pink-color">
                      <?php echo $item['GIaSP']; ?>đ
                    </h1>
                  </div>
                  <p class="mar-top-0 mar-btm-20">
                    <?php echo $item['ChiTietSP']; ?>
                  <form action="chart-page.php" class="btn-inline">
                    <button class="btn btn-pink-cake mar-right-10">Add to Chart</button>
                  </form>
                  <form action="shop.php" class="btn-inline">
                    <button class="btn btn-grey-cake">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
              <?php 
              }
              ?>
        </section>
        <!-- End Header Cake -->
        <div class="green-arrow">
          &nbsp;
              </div>
        <!-- Start Footer Cake -->
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
