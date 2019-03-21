<?php
        $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
        mysqli_set_charset($conn,"utf8");
?>
<?php 
    $id=$_GET["id"] ;
    $truyvan="SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai='$id'";
    $result=mysqli_query($conn,$truyvan); 
    if(null!==mysqli_fetch_assoc($result))
    {
        echo "Có sản phẩm thuộc loại này vui lòng xóa sản phẩm trước" ;  
    ?> 
        <div>
        <a href="index.php"><button class="btn btn-primary mr-4" style="float: left;">Quay lại</button></a>
        </div>
    <?php
    }
    else
    {
    	$sql= "DELETE FROM loaisanpham WHERE MaLoai='$id'";
    	$query=mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE) {
       		 header("Location: index.php");
    		} else {
        		echo "Error updating record: " . $conn->error;
     	   }
        $conn->close();   
    }
?>
