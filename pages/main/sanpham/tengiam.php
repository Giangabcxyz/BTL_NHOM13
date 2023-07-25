<?php 

    $sql_get_data = "SELECT * FROM  sanpham ORDER BY  tensp DESC";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
      <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product">
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <h3 ><?php echo $row['tensp'] ?></h3>
               <div class=" price"><?php echo $row['giaban'] ?>VND</div>
               
                     <div class="ratingresult"><?php for ($i = 0; $i< 5; $i++) {
                             print '<i class="fa fa-star" style="color: #f9f115;"></i>';
                        }?> 

                     <?php 
                            echo rand(1, 1000);
                        ?> đánh giá</div>
				    
                   <div class="tooltip">
				<button class="themvaogio" >
					<span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
					+
				</button>
			</div>
                    
         </div> 
     </a>
<?php 
    }
?>