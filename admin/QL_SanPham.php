<?php
    $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
    mysqli_set_charset($conn,"utf8");
?>
<h2>DANH SÁCH SẢN PHẨM</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Mã loại</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php                                
              $truyvan="SELECT * FROM sanpham ";
              $result=mysqli_query($conn,$truyvan);
              while($item=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <th scope="row"><?php echo $item['MaSP']; ?></th>
            <td><?php echo $item['TenSP']; ?></td>
            <td><?php echo $item['GIaSP']; ?></td>
            <td><?php echo $item['ChiTietSP']; ?></td>
            <td><?php echo $item['anh']; ?></td>
            <td><?php echo $item['MaLoai']; ?></td>
            <td class="text-center">
                <a href="edit_product.php?id=<?php echo $item['MaSP']?>"><button class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                <a href="delete_product.php?id=<?php echo $item['MaSP']?>"><button class="btn btn-sm btn-danger"><i class="fas fa-minus-circle"></i></button></a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
    <a href="add_product.php"><button class="btn btn-primary mr-4" style="float: right;"><i class="fas fa-plus-circle"></i></button></a>
</table>                   