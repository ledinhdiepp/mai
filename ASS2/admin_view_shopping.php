<?php
    session_start();
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="assets/img/vinfast1.png" rel="icon">
    <link href="assets/img/vinfast1.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<title>Thông tin người dùng</title>
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/account_admin.css" rel="stylesheet">
    <script>
        function modify_user(id_account){
            window.location = "admin_modify_shopping_info.php?id=" + id_account;
        }
        function modify_doctor(id_account){
            window.location = "admin_modify_doctor_info.php?id=" + id_account;
        }
        function change_type(){
            type_account =  document.getElementById("type-selection").value;
            window.location = "admin_view_shopping.php?type=" + type_account;
        }

        function search_ID(){
            type_account =  document.getElementById("type-selection").value;
            ID_search = document.getElementById("ID_search").value;
            $.ajax({
                method:"POST",
                url: "process/change_session_userInfo.php",
                data: { ID_search : ID_search},
                success: function(response){
                }
            });
            window.location = "admin_view_shopping.php?type=" + type_account;
        }

        function search_name(){
            type_account =  document.getElementById("type-selection").value;
            name_search = document.getElementById("name_search").value;
            $.ajax({
                method:"POST",
                url: "process/change_session_userInfo.php",
                data: { name_search : name_search},
                success: function(response){
                }
            });
            window.location = "admin_view_shopping.php?type=" + type_account;
        }

        function search_surname(){
            type_account =  document.getElementById("type-selection").value;
            surname_search = document.getElementById("surname_search").value;
            $.ajax({
                method:"POST",
                url: "process/change_session_userInfo.php",
                data: { surname_search : surname_search},
                success: function(response){
                }
            });
            window.location = "admin_view_shopping.php?type=" + type_account;
        }

        function reset(){
            type_account =  document.getElementById("type-selection").value;
            $.ajax({
                method:"POST",
                url: "process/change_session_userInfo.php",
                data: { },
                success: function(response){
                }
            });
            window.location = "admin_view_shopping.php?type=" + type_account;
        }
    </script>
</head>

<body>
<br/><br/><br/><br/><br/><br/>
<?php include("header.php"); ?>
    <div class="container">
        <?php include("admin_nav.php"); ?>
    </div>

    <?php
        $type_account = 'user';
        if(isset($_GET['type'])){
            $type_account = $_GET['type'];
        }
        if(isset($_SESSION['id_search_user'])){
            $id_search = $_SESSION['id_search_user'];
        }
        if(isset($_SESSION['name_search_user'])){
            $name_search = addslashes($_SESSION['name_search_user']);
        }
        if(isset($_SESSION['surname_search_user'])){
            $surname_search = addslashes($_SESSION['surname_search_user']);
        }
    ?>

    <div class="information">
        
        <h1 style="color:#007bff;">THÔNG TIN TÀI KHOẢN</h1>
        
        <div class="row" style="margin-bottom: 30px;margin-top:20px">
            <div class="col-md-2">
                <label for="type-selection">Loại tài khoản:</label><br/>
                <select onchange="change_type()" id="type-selection" class="custom-select">
                    <option value="user" <?php if($type_account=='user'){echo "selected";} ?> > Người dùng </option>
                    
                </select>
            </div>

            <div class="col-md-2">
                <label for="ID_search">Tìm theo ID:</label><br/>
                <input type="text" class="form-control" id="ID_search" <?php if(isset($id_search)){echo "value=\"$id_search\"";} ?>
                    onchange="search_ID()">
            </div>

            <div class="col-md-2">
                <label for="name_search">Tìm theo Họ:</label><br/>
                <input type="text" class="form-control" <?php if(isset($surname_search)){echo "value=\"$surname_search\"";} ?>
                    id="surname_search" onchange="search_surname()">
            </div>

            <div class="col-md-2">
                <label for="name_search">Tìm theo Tên:</label><br/>
                <input type="text" class="form-control" <?php if(isset($name_search)){echo "value=\"$name_search\"";} ?>
                    id="name_search" onchange="search_name()">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" onclick="reset()" style="margin-top:32px">RESET</button>
            </div>
        </div>

        <table class="table table-striped" id="data_table">
        <?php
            if($type_account == 'user'){
            
        echo   "<tr>
                    <th>ID</th>
                    <th>Họ và Tên</th>
                    <th>Số điện thoại</th>
                    <th>Loại Xe</th>
                    <th>Gmail</th>
                    <th>Địa Chỉ </th>
                    <th>Giá Tiền</th>
                    <th>PayMode </th>
                </tr>";

                if(isset($id_search) and $id_search!=''){
                    $sql= "SELECT * FROM mua_hang WHERE id_tai_khoan='$id_search';";
                }
                // else if((isset($name_search) and $name_search!='') or (isset($surname_search) and $surname_search!='')){
                //     $sql= "SELECT * FROM mua_hang WHERE ten LIKE '%$name_search%' and sanpham LIKE '%$surname_search%'";
                // }
                else{
                    $sql= "SELECT * FROM mua_hang";
                }
                    
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        $id_account = $row['id_tai_khoan'];
                        $ten = $row['ten'];
                        $sanpham =$row['sp'];
                        $gmail = $row['email'];
                        $price = $row['price'];
                        $pmode =$row['pmode'];
                        $dia_chi = $row['dia_chi'];
                        $phone = $row['phone'];
                        // $sql1= "SELECT * FROM tai_khoan WHERE id='$id_account' ";
                        // $result1 = mysqli_query($conn, $sql1);
                        // if (mysqli_num_rows($result1) > 0){
                        //     $row = mysqli_fetch_array($result1);
                        //     $soDienThoai = $row['so_dien_thoai'];
                        // }

                        echo "<tr> <td> $id_account </td>";
                        echo " <td> $ten </td>";
                        echo " <td> $phone </td>";
                        echo " <td> $sanpham</td>";
                        echo " <td> $gmail </td>";
                        echo " <td> $dia_chi </td>";
                        echo " <td> $price </td>";
                        echo " <td> $pmode </td>";
                        echo " <td> <button onclick=\"modify_user($id_account)\" type=\"button\" 
                            class=\"btn btn-primary\" style=\"background-color:#007bff\">
                            Chọn </button> </td></tr>";
                    }
                }
            }
           
            ?>
        </table>

    </div>

    <?php include("footer.php"); ?>


</body>