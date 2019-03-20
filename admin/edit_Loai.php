    <?php
        $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
        mysqli_set_charset($conn,"utf8");
    ?>
    <?php
    // include './connect_db.php'; 
    if(isset($_POST["btnsubmit"])){
        $idd=$_GET["id"];
        $TenLSP=$_POST["TenLSP"];
		$sql1= "UPDATE loaisanpham SET TenLoai='$TenLSP' WHERE MaLoai='$idd'";
			
      	
      	if ($conn->query($sql1) === TRUE) {
   		   echo "<h2>Cập nhật thành công</h2>";
		} else {
    		echo "Error updating record: " . $conn->error;
        }
    }
    if(isset($_POST["btnre"])){
        header("Location: index.php");
    }
    ?>

<div>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>SỬA THÔNG TIN LOẠI SẢN PHẨM</h2>
        <div class="row">
            <div class="lbltitle">
                <lable>Tên loại sản phẩm</lable>
            </div>
              	<?php       
              		$id=$_GET["id"] ;
    		        $sql= "SELECT * FROM loaisanpham WHERE MaLoai='$id'";
    		        $query=mysqli_query($conn,$sql);
    		        $item=mysqli_fetch_assoc($query);
            
            	?>
            <div class="lblinput">
                <input type="text" name="TenLSP" value="<?php echo $item['TenLoai']; ?>" />
            </div>
        </div>

        <div class="row" style="padding-top: 12px">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Cập nhật loại sản phẩm" />
                    <input type="submit" name="btnre" value="Quay lại" />
                </div> 
                
        </div>
        <?php
        	$conn->close();
        ?>
    </form>
</div>