<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
?>

<?php
    include("../config.php");
    $_SESSION['id_rep'] = $_POST['id_user'];
?>