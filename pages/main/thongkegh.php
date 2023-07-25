
<style>
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
tr:hover {background-color: #D6EEEE;}
.img_tkssp{
      width: 120px;
      height: 120px;
}
</style>
<div class="tkdh">
      <table>
        <tr>
          <th>ID</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá bán</th>
          <th>Số lượng</th>
          <th>Hình ảnh</th>
          <th>ThanhTien</th>
          <th>Hành Động</th>
        </tr>
        <?php 
       
              if(isset($_SESSION['cart']))
              { 
                  $i = 0;
                  $tongtien = 0;
                    foreach ($_SESSION['cart'] as $cart_item) {
                        $thanhtien = ($cart_item['soluong']*(float)$cart_item['giaban']);
                        $tongtien+= $thanhtien;
                  $i++;
                    
        ?>
             <tr>
                   <td><?php echo $i  ?></td>
                   <td><?php  echo $cart_item['tensp']  ?></td>
                   <td><?php  echo  $cart_item['giaban']  ?></td>
                   <td><?php  echo $cart_item['soluong']  ?></td>
                   <td><img class="img_tkssp" src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>
                   <td><?php  echo $thanhtien ?></td>
                   <td><a style="color:black; ext-decoration: none;" href="pages/main/giohang.php?xoasp=<?php echo $cart_item['id_sanpham']?>">Xóa</a></td>
             </tr>
                     
             <?php 
              }?>
                   <tr>
                          <td colspan="6">Tổng tiên :<?php  echo $tongtien ?></td>
                          <td colspan="1"><a style="color:black; text-decoration: none;" href="pages/main/giohang.php?xoatatca=1">Xóa tất cả</a></td>
                   </tr>
              <?php 
              }else{
             ?>  
                  <tr>

                        <td colspan="7"><h2>Hiện tại giỏ hang đang trống</h2></td>
                        
                  </tr>
             <?php } ?>
        </table>  
</div>