<?php 
         include('config/config.php');
      //    if(!isset($_SESSION['dangnhap'])){
      //           header('Location:login.php');
      //    }
      //    if(isset($_SESSION['dangnhap']) && $_SESSION['dangnhap']!='admin')
      //    {
      //         header('Location:../index.php');
      //    }else{
      //       header('Location:index.php');
      //    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Điện Thoại</title>
    <link rel="shortcut icon" href="../img/favicon.ico"/>
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="css/indexadmin.css">
    <link rel="stylesheet" href="../libary/fontawesome/css/all.min.css">

    


    <!-- <style>
          body{
            background-color: #2F353A;
          }
    </style> -->
</head>
<body>
        <h1 class="header">SmartPhone Store - Admin</h1>
        <div class="grid wide contain">
              <div class="row">
                            <?php
                                 
                                 include("modules/menu.php");
                                 include("modules/main.php");
                            ?>
                     
              </div>
        </div>
        <script src="js/admin.js"></script>
</body>
</html>