
    <div class="khungSanPham" >
				<h3 class="tenKhung" style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%)">Sản Phẩm Đề Xuất</h3>
				<div class="listSpTrongKhung flexContain">
<?php 

    $sql_get_data = "SELECT * FROM sanpham  ORDER BY giaban DESC LIMIT 4";
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
                </div>
    </div>

	<div class="khungSanPham" style=" border: 2px solid pink; ">
				<h3 class="tenKhung" style="background: linear-gradient(to bottom, #ff9a9e, #fad0c4, #f5cac3, #d6cbd3, #c7cedf);">Sản Phẩm Mới</h3>
				<div class="listSpTrongKhung flexContain">
<?php 

    $sql_get_data = "SELECT * FROM sanpham  ORDER BY id_sanpham LIMIT 4";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
     <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product"  >
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <h3 ><?php echo $row['tensp'] ?></h3>
               <div class=" price"><?php echo $row['giaban'] ?>VND</div>
               
                     <div class="ratingresult"><?php for ($i = 0; $i< rand(1,5); $i++) {
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
                </div>
    </div>

	<div class="khungSanPham" style=" border: 2px solid blue ">
				<h3 class="tenKhung" style="background: linear-gradient(to bottom, #00c6ff, #0072ff);">Giá Rẻ Cho Mọi Nhà</h3>
				<div class="listSpTrongKhung flexContain">
<?php 

    $sql_get_data = "SELECT * FROM sanpham  ORDER BY giaban ASC LIMIT 4";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
     <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product"  >
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <h3 ><?php echo $row['tensp'] ?></h3>
               <div class=" price"><?php echo $row['giaban'] ?>VND</div>
               
                     <div class="ratingresult"><?php for ($i = 0; $i< rand(1,5); $i++) {
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
                </div>
    </div>
	
	<div class="khungSanPham"  style=" border: 2px solid gray; ">
				<h3 class="tenKhung" style="background: linear-gradient(to bottom, #000000, #FFFFFF);">Hàng Chính Hãng </h3>
				<div class="listSpTrongKhung flexContain">
<?php 

    $sql_get_data = "SELECT * FROM sanpham  ORDER BY id_sanpham DESC LIMIT 4";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
     <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product"  >
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <h3 ><?php echo $row['tensp'] ?></h3>
               <div class=" price"><?php echo $row['giaban'] ?>VND</div>
               
                     <div class="ratingresult"><?php for ($i = 0; $i< rand(1,5); $i++) {
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
                </div>
    </div>
	