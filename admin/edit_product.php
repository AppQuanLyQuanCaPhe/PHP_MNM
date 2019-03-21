<h2>SỬA THÔNG TIN SẢN PHẨM</h2>
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
<div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="lbltitle">
            <lable>Tên sản phẩm</lable>
        </div>
          	<?php       
          		$id=$_GET["id"] ;
		        $sql= "SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaSP='$id'";
		        $query=mysqli_query($conn,$sql);
		        $item=mysqli_fetch_assoc($query);
        
        	?>
        <div class="lblinput">
            <input type="text" name="tenSP" value="<?php echo $item['TenSP']; ?>" />
        </div>
    </div>

    <div class="row">
        <div class="lbltitle">
            <lable>Mô tả chi tiết sản phẩm</lable>
        </div>
        <div class="lblinput">
            <textarea name="ChiTietSP" cols="21" rows="10" value="" ><?php echo $item['ChiTietSP']; ?></textarea>
        </div>    
    </div>

    <div class="row">
        <div class="lbltitle">
            <lable>Giá sản phẩm</lable>
        </div>

        <div class="lblinput">
            <input type="text" name="GIaSP" value="<?php echo $item['GIaSP']; ?>" />
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
            <lable><?php echo $item['anh']; ?></lable>
        </div>
        <div class="lblinput">
            <input type="file" id="anh" name="anh" accept=".PNG,.GIF,.JPG"  />
        </div>
    </div>

    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="Cập nhật sản phẩm" />
        </div> 
    </div>
    <?php
    	$conn->close();
    ?>
</form>
</div>