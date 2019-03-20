<?php
    $conn = new mysqli('localhost','root','','webbanbanhphp') or die ('Kết nối csdl thất bại!');
    mysqli_set_charset($conn,"utf8");
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col" colspan="3">Tên loại sản phẩm</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <?php                                
              $truyvan="SELECT * FROM loaisanpham ";
              $result=mysqli_query($conn,$truyvan);
              while($item=mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <th scope="row"><?php echo $item['MaLoai']; ?></th>
            <td colspan="3"><input type="text" value="<?php echo $item['TenLoai']; ?>" class="form-control form-control-sm" disabled></td>
            <td class="text-center">
                <button class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-minus-circle"></i></button>
            </td>
        </tr>
        <?php 
        }
        ?>

<!--         <tr>
    <th scope="row">2</th>
    <td colspan="3">Jacob</td>  
    <td class="text-center">
    <button class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></button>
        <button class="btn btn-sm btn-danger"><i class="fas fa-minus-circle"></i></button>
    </td>
</tr>
<tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
    <td class="text-center">
        <button class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></button>
        <button class="btn btn-sm btn-danger"><i class="fas fa-minus-circle"></i></button>
    </td>
</tr> -->
    </tbody>
<a href="add_Loai.php"><button class="btn btn-primary mr-4" style="float: right;">Thêm loại</button></a>
</table>                    
