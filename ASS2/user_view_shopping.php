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
</head>

<body>

    <?php include("header.php"); ?>
    <br/><br/><br/>
    <div class="content" style="margin: 80px 30px 30px 30px; height: 400px">
        
        <table class="table table-striped" style="padding: 10px 10px 10px 10px;">
            <tr>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Loại Xe Đã Mua</th>
                <th>Giá Tiền</th>
                <th>Cách Thức Thanh Toán</th>
                <th> Địa Chỉ </th>
            </tr>
            <?php
                include('config.php');
                $id_login1 = $_SESSION['id_login'];

                $sql= "SELECT * FROM mua_hang  WHERE id_tai_khoan = '$id_login1'";
                    
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        // $id_booking = $row['id'];
                        // $id_user = $row['id_tai_khoan'];
                        // $date = $row['ngay_dat'];
                        // $time = $row['gio_dat'];
                        // $symptom = $row['trieu_chung'];

                        // $sql1 = "SELECT * FROM thong_tin_tai_khoan WHERE id_tai_khoan='$id_user' ";
                        // $result1 = mysqli_query($conn, $sql1);
                        // if (mysqli_num_rows($result1) > 0){
                        //     $row = mysqli_fetch_array($result1);
                        //     $user_name = $row['name'];
                        //     $user_surname = $row['sur_name'];
                        // }

                        // $sql1 = "SELECT * FROM tai_khoan WHERE id = '$id_user' ";
                        // $result1 = mysqli_query($conn, $sql1);
                        // if (mysqli_num_rows($result1) > 0){
                        //     $row = mysqli_fetch_array($result1);
                        //     $user_number_phone = $row['so_dien_thoai'];
                        // }
                        $sanpham = $row['sp'];
                        $ten = $row['ten'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $gia = $row['price'];
                        $address = $row['dia_chi'];
                        $pmode = $row['pmode']; 

                        echo "<td> $ten</td>";
                        echo "<td> $phone </td>";
                        echo "<td> $sanpham </td>";
                        echo "<td> $gia </td>";
                        echo "<td> $pmode </td>";
                        echo "<td> $address </td></tr>";
                    }
                }
            ?>
        </table>
    </div>

    <?php include("footer.php"); ?>


</body>