<?php 
  include("admincp/config/config.php");

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bán Điện Thoại</title>
  <link rel="shortcut icon" href="../img/favicon.ico"/>
  <link rel="stylesheet" href="js/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="js/owlcarousel/owl.theme.default.min.css">
  <script src="js/Jquery/Jquery.min.js"></script>
	 <script src="js/owlcarousel/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="../libary/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/menu.css">
  <link rel="stylesheet" href="./css/tuyendung.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/taikhoan.css">
  <link rel="stylesheet" href="./css/trangchu.css">
  <link rel="stylesheet" href="./css/tintuc.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/gioithieu.css">
  <link rel="stylesheet" href="./css/baohanh.css ">
  <link rel="stylesheet" href="./css/lienhe.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/chitietsp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<?php
     session_start();
		include("pages/menu.php");
	?>
	<div class="grid wide contain">
		    <div class="row">
				<div class="col c-12 m-12 l-12">
						<?php 
              
							include("pages/header.php");
							include("pages/main.php");
							include("pages/footer.php");
						?>
				</div>
			</div>
	</div>
	
  
</body>
</html>