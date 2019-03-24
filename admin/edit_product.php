<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="col-12 navbar pr-0 navbar-light bg-light border mt-2">
                <span class="navbar-brand  h1">Sửa sản phẩm</span>
            </nav>
        </div>
        <div class="row">
            <?php
            $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
            mysqli_set_charset($conn,"utf8");
            ?>

            <?php
            // include './connect_db.php'; 
            if(isset($_POST["btnsubmit"])){
                $idd=$_GET["id"];
                $TenSP=$_POST["tenSP"];
                $GIaSP=$_POST["GIaSP"];
                $ChiTietSP=$_POST["ChiTietSP"];
                $anh=$_FILES["anh"];
                $MaLoai=$_POST["MaLoai"];

                $sql1= "UPDATE sanpham SET TenSP='$TenSP',GIaSP='$GIaSP',ChiTietSP='$ChiTietSP',anh='$anh',MaLoai=$'MaLoai' WHERE MaSP='$idd'";
                    
                if ($conn->query($sql1) === TRUE) {
                header("Location: index.php");
                } else {
                    echo "Error updating record: " . $conn->error;
            }
            }
            ?> 
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <div class="lbltitle">
                        <lable>Tên sản phẩm</lable>
                    </div>
                        <?php       
                            $id=$_GET["id"] ;
                            $sql= "SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.MaLoai,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaSP='$id' AND loaisanpham.MaLoai=sanpham.MaLoai";
                            // $sql= "SELECT * FROM sanpham WHERE sanpham.MaSP='$id'";
                            $query=mysqli_query($conn,$sql);
                            $item=mysqli_fetch_assoc($query);
                    
                        ?>
                    <div class="lblinput">
                        <input type="text" name="tenSP" value="<?php echo $item['TenSP']; ?>" />
                    </div>
                </div>

                <div>
                    <div class="lbltitle">
                        <lable>Mô tả chi tiết sản phẩm</lable>
                    </div>
                    <div class="lblinput">
                        <textarea name="ChiTietSP" cols="21" rows="10" value="" ><?php echo $item['ChiTietSP']; ?></textarea>
                    </div>    
                </div>

                <div>
                    <div class="lbltitle">
                        <lable>Giá sản phẩm</lable>
                    </div>

                    <div class="lblinput">
                        <input type="text" name="GIaSP" value="<?php echo $item['GIaSP']; ?>" />
                    </div>
                </div>

                    <div>
                    <div class="lbltitle">
                        <lable>Loại sản phẩm</lable>
                    </div>

                    <div class="lblinput">
                        <select name="MaLoai">
                            <!-- <option value="" >--Chọn--</option> -->
                            <?php
                            $cates=mysqli_query($conn,"SELECT * FROM loaisanpham");

                            while($loai=mysqli_fetch_assoc($cates))
                            {
                            ?>
                                <option value="<?php echo $loai['MaLoai'];?>" <?php if($loai['MaLoai']==$item['MaLoai']) echo "selected";?>><?php echo $loai['TenLoai'];?></option>
                            <?php
                            }
                            ?>
                        </select> 
                    </div>

                <div>
                    <div class="lbltitle">
                        <lable><?php echo $item['anh']; ?></lable>
                    </div>
                    <div class="col-sm-6">
                        <img src='./hinhbanhngot/<?php echo $item['TenLoai'];?>/<?php echo $item['anh'];?>'>      
                    </div>
                    <div class="lblinput">
                        <input type="file" id="anh" name="anh" accept=".PNG,.GIF,.JPG"  />
                    </div>
                </div>

                <div>
                    <div class="submit">
                        <input type="submit" name="btnsubmit" value="Cập nhật sản phẩm" />
                    </div> 
                </div>
                <?php
                    $conn->close();
                ?>
            </form>

        </div>    
    </div>
</body>
</html>