
<form action="javascript:void(0);" method="POST" class="btn-inline">
    <button name="muangay" onclick="<?php $_SESSION["count"]=(int)$count+1;?>" data-toggle="modal" data-target="#order" class="btn btn-pink-cake mar-right-10">Mua ngay</button>
    </form>
<!-- formaction="chart-page.php?id=<?php echo $item['MaSP'] ?>" formmethod="post" -->
<div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form action="#" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title" style="color:black;"></h4>
        </div>
        <div class="modal-body pl-2 pr-2">
            <p>Bạn đã thêm vào giỏ hàng!</p>
        </div>
        <div class="modal-footer">
            <button onclick="window.location.reload();" data-dismiss="modal" class="btn btn-primary" >Tiếp tục mua hàng</button>
            <button type="submit" class="btn btn-danger" formaction="chart-page.php" formmethod="post" >đến giỏ hàng</button>
        </div>
      </div>
    </form>
  </div>
</div>

