    <?php
        $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
        mysqli_set_charset($conn,"utf8");
    ?>
    <?php
    // include './connect_db.php'; 
    if(isset($_POST["btnsubmit"])){
        $maSP = NULL;
        $TenSP=$_POST["tenSP"];
        $GIaSP=$_POST["GIaSP"];
        $ChiTietSP=$_POST["ChiTietSP"];
        $anh=$_FILES["anh"];
        $MaLoai=$_POST["MaLoai"];

        $sql = "INSERT INTO sanpham(MaSP,TenSP,GIaSP,ChiTietSP,anh,MaLoai) VALUES ('$maSP','$TenSP','$GIaSP','$ChiTietSP','$anh','$MaLoai')";
        
        if ($conn->query($sql) === TRUE)
           header("Location: add_product.php?inserted");
        else
            header("Location: add_product.php?failure");
        $conn->close();
    }
?>
<?php
    if(isset($_GET["inserted"])){
        echo "<h2>Thêm mới sản phẩm thành công</h2>";
    }
?>
<div>
<form action="add_product.php" method="post" enctype="multipart/form-data">
	<h2>THÊM BÁNH MỚI</h2>
    <div class="row">
        <div class="lbltitle">
            <lable>Tên sản phẩm</lable>
        </div>
        <div class="lblinput">
            <input type="text" name="tenSP" value="<?php echo isset($_POST["tenSP"]) ? $_POST["tenSP"] : "" ; ?>" />
        </div>
    </div>


    <div class="row">
        <div class="lbltitle">
            <lable>Mô tả chi tiết sản phẩm</lable>
        </div>
        <div class="lblinput">
            <textarea name="ChiTietSP" cols="21" rows="10" value="<?php echo isset($_POST["ChiTietSP"]) ? $_POST["ChiTietSP"] : "" ; ?>" ></textarea>
        </div>    
    </div>

    <div class="row">
        <div class="lbltitle">
            <lable>Giá tiền</lable>
        </div>

        <div class="lblinput">
            <input type="text" name="GIaSP" value="<?php echo isset($_POST["GIaSP"]) ? $_POST["GIaSP"] : "" ; ?>" />
        </div>
    </div>

        <div class="row">
        <div class="lbltitle">
            <lable>Loại sản phẩm</lable>
        </div>

        <div class="lblinput">
             <select name="MaLoai">
                <option value="" selected>--Chọn--</option>
                <?php
                $cates=mysqli_query($conn,"SELECT * FROM loaisanpham");

                while($item=mysqli_fetch_assoc($cates))
                {
                ?>
                    <option value="<?php echo $item['MaLoai'];?>" selected><?php echo $item['TenLoai'];?></option>
                <?php
                 }
                ?>
            </select> 
        </div>

    <div class="row">
        <div class="lbltitle">
            <lable>Chọn hình ảnh</lable>
        </div>
        <div class="lblinput">
            <input type="file" id="anh" name="anh" accept=".PNG,.GIF,.JPG"  />
        </div>
    </div>

    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="Thêm sản phẩm" />
        </div> 
    </div>
</form>
</div>