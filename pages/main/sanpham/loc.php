<?php 

    $sql_get_data = "SELECT * FROM  sanpham ORDER BY  giaban ASC";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
     <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product">
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <p class="name_pr"><?php echo $row['tensp'] ?></p>
               <p class="name_ic"><?php echo $row['giaban'] ?>VND</p>
               <div class="danhgia">
                     <p><?php for ($i = 0; $i< rand(1, 4); $i++) {
                             print '<i class="fa-solid fa-star" style="color: #f9f115;"></i>';
                        }?> </p>
                     <p><?php 
                            echo rand(1, 1000);
                        ?> đánh giá</p>
                    <p>Thêm</p>
               </div>
               
         </div>
     </a>
<?php 
    }
?>