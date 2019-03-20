    <?php
        $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
        mysqli_set_charset($conn,"utf8");
    ?>
    <?php
    // include './connect_db.php'; 
    if(isset($_POST["btnsubmit"])){
        $maLSP = NULL;
        $TenLSP=$_POST["tenLSP"];        
        $sql = "INSERT INTO loaisanpham(MaLoai,TenLoai) VALUES ('$maLSP','$TenLSP')";
     
        if ($conn->query($sql) === TRUE)
           header("Location: add_Loai.php?inserted");
        else
            header("Location: add_Loai.php?failure");
        $conn->close();
    }
    if(isset($_POST["btnre"])){
        header("Location: index.php");
    }
?>
<?php
    if(isset($_GET["inserted"])){
        echo "<h2>Thêm mới Loại sản phẩm thành công</h2>";
    }
?>
<div>
    <form action="add_Loai.php" method="post" enctype="multipart/form-data">
        <h2>Thêm loại bánh mới</h2>
        <div class="row">
            <div class="lbltitle">
                <lable>Tên loai sản phẩm</lable>
            </div>
            <div class="lblinput">
                <input type="text" name="tenLSP" value="<?php echo isset($_POST["tenLSP"]) ? $_POST["tenLSP"] : "" ; ?>" />
            </div>
        </div>

        <div class="row" style="padding-top: 12px">
            <div class="submit">
                <input type="submit" name="btnsubmit" value="Thêm loại sản phẩm" />
                <input type="submit" name="btnre" value="Quay lại" />
            </div> 
        </div>
        <?php
            $conn->close();
        ?>
    </form>   
</div>