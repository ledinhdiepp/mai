<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
?>

<?php
    include('../config.php');
    $error = false;
    $response = '';
    $id_modify = $_SESSION['id_account_modify'];

    if(isset($_POST['name']) and $_POST['name']!=""){
        $name =$_POST['name'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập họ và tên của người dùng! <br/>';
    }

    if(isset($_POST['surname']) and $_POST['surname']!=""){
        $sanpham =$_POST['surname']; //san pham
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập tên của sản phẩm! <br/>';
    }

    if(isset($_POST['email']) and $_POST['email']!=""){
        $email =$_POST['email'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập email của user! <br/>';
    }

    if(isset($_POST['phone']) and $_POST['phone']!=""){
        $phone =$_POST['phone'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập số điện thoại của user! <br/>';
    }

    if(isset($_POST['cmnd']) and $_POST['cmnd']!=""){
        $pmode =$_POST['cmnd'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập số pmode của user! <br/>';
    }

    if(isset($_POST['address']) and $_POST['address']!=""){
        $address =$_POST['address'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập địa chỉ user! <br/>';
    }
    if(isset($_POST['price']) and $_POST['price']!=""){
        $price =$_POST['price'];
    }
    else{
        $error = true;
        $response = $response . '- Hãy nhập gia! <br/>';
    }
    if(!$error){
        $sql ="UPDATE mua_hang SET ten ='$name',sp='$sanpham',email='$email',phone ='$phone',pmode = '$pmode',dia_chi='$address',price='$price' WHERE id_tai_khoan =$id_modify";
        if ($conn->query($sql) == TRUE) {
            echo "1";
        } else {
            echo "Không thể cập nhật dữ liệu vào database";
        }
    }
    else{
        echo "$response";
    }
    $conn->close();
?>