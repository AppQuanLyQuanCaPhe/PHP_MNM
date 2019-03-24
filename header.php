  <?php 
      if(isset($_POST["DangNhap"])){
        $taikhoan = $_POST["l_tk"];
        $matkhau = $_POST["l_mk"];
        $sql = "SELECT * FROM taikhoan WHERE tendangnhap='$taikhoan' AND matkhau = '$matkhau'";
        $rows = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($rows);  
        if($count==1){
          $r=mysqli_fetch_assoc($rows);
          $_SESSION["tk"]=$r['TenDangNhap'];
        }else{
            echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác!')</script>";
        }
      }
      if(isset($_POST['DangKy'])){
        $taikhoan = $_POST["r_tk"];
        $matkhau = $_POST["r_mk"];
        $re_matkhau = $_POST["r_remk"];
        if($matkhau != $re_matkhau){
          echo "<script>alert('Mật khẩu không trùng nhau!')</script>";
        }
        else{
          $sql = "INSERT INTO taikhoan VALUES('$taikhoan','$matkhau')";
          $result = mysqli_query($conn,$sql);
          if($result==true){
            $_SESSION['tk']=$taikhoan;
          }
          else{
            echo "<script>alert('Tài khoản bị trùng,vui lòng chọn tài khoản khác!')</script>";
          }
        }
      }
    ?>
<script>
    console.log(<?= json_encode($_SESSION); ?>);
</script>



          <div class="top-absolute">
              <div class="top-header">
                <div class="col-md-2 col-sm-0"></div>
                <div class="col-md-8 col-sm-12">
                  <div class="navbar-header visible-xs">
                    <button class="navbar-toggle toggle-cake show-menu"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand navbar-cake" href="#"><img alt="Logo-Cupcakes" style="display: -webkit-inline-box;" src="assets/images/logo-100.png"></a>
                  </div>
                  <nav>
                    <ul class="header-nav hidden-xs">
                      <li>
                        <a href="index.php">Home</a>
                      </li>
                      <li>
                        <a href="shop.php?page=1">Shop</a>
                      </li>
                      <li class="pad-top-0i">
                        <img alt="Logo-Cupcakes" src="assets/images/logo-150.png">
                      </li>
                      <li>
                        <a class="show-menu" href="javascript:void(0);">Themes</a>
                      </li>
                      <li>
                        <a href="blog-center.php">Blog</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- Start Mega Menu Cake -->
                  <div class="mega-menu hide">
                    <div class="tittle-mega">
                      <h4>
                        - Mega Menu -
                      </h4>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              Blog
                            </li>
                            <li>
                              <a href="blog.php">Blog Left Content</a>
                            </li>
                            <li>
                              <a href="blog-right-content.php">Blog Right Content</a>
                            </li>
                            <li>
                              <a href="blog-center.php">Blog Center</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              Gallery
                            </li>
                            <li>
                              <a href="gallery.php">Gallery 3 Column</a>
                            </li>
                            <li>
                              <a href="gallery-4-column.php">Gallery 4 Column</a>
                            </li>
                            <li>
                              <a href="gallery-dot.php">Gallery With Text</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              OTHER PAGEs
                            </li>
                            <li>
                              <a href="chart-page.php">Chart Page</a>
                            </li>
                            <li>
                              <a href="product-details-page.php">Product Details</a>
                            </li>
                            <li>
                              <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li>
                              <a href="terms-of-use.php">Terms Of Use</a>
                            </li>
                            <li>
                              <a href="404.php">404</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="div text-center">
                        <button class="btn btn-pink-cake mar-top-20 close-menu">Close Themes</button>
                      </div>
                    </div>
                  </div>
                  <!-- End Mega Menu Cake -->
                </div>
                <div class="col-md-2 col-sm-12">
                  <button class=" btn btn-info btn-sm pull-right" style="margin-top:10px;margin-right:10px;<?php if(isset($_SESSION["tk"])){echo'display: none';}?>;" data-toggle="modal" data-target="#register">ĐĂNG KÝ</button>
                  <button class=" btn btn-info btn-sm pull-right" style="margin-top:10px;margin-right:10px;<?php if(isset($_SESSION["tk"])){echo'display: none';}?>;" data-toggle="modal" data-target="#login">ĐĂNG NHẬP</button>
                  <div class="dropdown pull-right" style="margin-top:10px;margin-right:10px;<?php if(!isset($_SESSION["tk"])){echo'display: none';}?>;">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <?php echo $_SESSION['tk'] ?>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="profile.php">Quản lý tài khoản</a></li>
                      <li><a href="#">Đơn hàng của tôi</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="/PHP_MNM/logout.php">Đăng xuất</a></li>
                    </ul>
                  </div>

                </div>
              </div>
              <div class="triangle">
                &nbsp;
              </div>
            </div>
<!-- Modal -->
<div class="modal fade" size="sm" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form action="#" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title" style="color:black;"></h4>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <span>Tài khoản: </span>
            <input class="form-conctrol-sm form-control" type="text" name="l_tk" required />
          </div>
          <div class="mb-2">
            <span>Mật khẩu:</span>
            <input type="password" class="form-control form-control-sm" name="l_mk" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="DangNhap">Đăng nhập</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form action="#" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title" style="color:black;"></h4>
        </div>
        <div class="modal-body pl-2 pr-2">
          <div class="mb-2">
            <span>Tài khoản: </span>
            <input class="form-conctrol-sm form-control" type="text" name="r_tk" required />
          </div>
          <div class="mb-2">
            <span>Mật khẩu:</span>
            <input type="password" class="form-control form-control-sm" name="r_mk" required />
          </div>
          <div class="mb-2">
            <span>Nhập lại mật khẩu:</span>
            <input type="password" class="form-control form-control-sm" name="r_remk" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="DangKy">Đăng ký</button>
        </div>
      </div>
    </form>
  </div>
</div>

