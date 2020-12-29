<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OtoVinFast - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/vinfast1.png" rel="icon">
  <link href="assets/img/vinfast1.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/admin.css" rel="stylesheet">

</head>
<body>
<br><br><br><br><br><br>
<?php include("header.php"); ?>

<div class="content">
        <div class="item">
            <h1> Quản Lý Tài Khoản </h1>
            <div class="row">
                <a href="admin_view_account.php"> Xem thông tin tài khoản </a>
                
            </div>
        </div>

        <hr/>

        
        
        <hr/>
        
        <div class="item">
            <h1> Quản Lý Thông Tin Mua Hàng </h1>
            <div class="row">
                <a href="admin_view_shopping.php"> Thông tin xe </a>
              
            </div>
        </div>

        <hr/>

        <div class="item">
            <h1> Quản lí chat </h1>
            <div class="row">
                <a href="admin_reply_chat.php"> Trả lời tin nhắn </a>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>