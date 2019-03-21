    <?php
        $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
        mysqli_set_charset($conn,"utf8");
    ?>
<?php       
    $id=$_GET["id"] ;
	$sql= "DELETE FROM sanpham WHERE MaSP='$id'";
	$query=mysqli_query($conn,$sql);
	/*$item=mysqli_fetch_assoc($query);*/
    if ($conn->query($sql) === TRUE) {
   		 header("Location: index.php");
		} else {
    		echo "Error updating record: " . $conn->error;
 	   }
    $conn->close();   
?>