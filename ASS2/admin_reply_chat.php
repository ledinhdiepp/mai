<?php
    session_start();
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
	<script src="js/chat.js"></script>

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
  <link href="assets/css/admin_chat.css" rel="stylesheet">
	<script>
        function dangXuat(){
            window.location.href='login.php';
        }
        function chatDaNhan(){
            $.ajax({
                    method: "GET",
                    url: "process/chat_admin_allChat.php",
                    success : function(response){
                        document.getElementById("da_nhan").innerHTML= response;
                    }
            });
        }

        function traLoiTinNhan(idRep){
            document.getElementById("tra_loi").style.display = "block";
            $.ajax({
                method: "POST",
                data:{
                    id_user: idRep
                },
                url: "process/chat_admin_change.php",
                success : function(response){
                }
            });
        }

        function chatLog_admin(){
            {$.ajax({
                    method: "GET",
                    url: "process/chat_admin_chatLog.php",
                    success : function(response){
                        document.getElementById("chat_log_admin").innerHTML= response;
                    }
            });
            }
        }

        function sendChat_admin(){
            var noiDung = $("#noi_dung_chat_admin").val();
            $.ajax({
                    method: "POST",
                    url: "process/chat_admin_sendChat.php",
                    data: {
                        noi_dung : noiDung,
                    }
            });
            document.getElementById("noi_dung_chat_admin").value="";
        }
	</script>
</head>

<body>
	
    <?php include("header.php") ?>
    
    <div class="container">
        <?php include("admin_nav.php"); ?>
    </div>

    <main class="mainPage">
        <div class="container">
            <div class="row" id="content">
                <div class="col-md-4">
                    <div id="da_nhan">
                        <script>
                            chatDaNhan();
                            setInterval(chatDaNhan,2000);
                        </script>
                    </div>
                </div>

                <div class="col-md-8">
                    <div id="tra_loi" style="display:None;" >
                        <div style='text-align:center;'><b> Nội dung Chat </b></div>
                            <script>
                                chatLog_admin();
                                setInterval(chatLog_admin,100);
                            </script>

                        <div id="chat_log_admin">
                        </div>
                        <div id="send_content">
                            <textarea class="form-control" rows="2" id="noi_dung_chat_admin"></textarea>
                            <button onclick="sendChat_admin()" class='btn btn-success'>Send</button>
                        </div>
                    </div>
                <div class="col-md-4">
            </div>
        </div>
    </main>

	<?php include("common/chat_box.php"); ?>
	<?php include("footer.php"); ?>
</body>
</html>