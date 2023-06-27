<?php
    include('../../../connect.php');
    include('../../../check2.php');

    extract($_POST);
    $email = $_POST['email'];
    $senha = md5($senha);

    if($conta = mysqli_query($con, "SELECT * FROM `empresa` WHERE `email` = '$email' && `senha` = '$senha' LIMIT 1")){
        mysqli_query($con, "UPDATE `empresa` SET `online` = NOW() WHERE `email` = '$email' && `senha` = '$senha'");
        $user = mysqli_fetch_array($conta);
        setcookie("ID_jr",$user['id_juridico'], time() + (86400 * 30), '/');
        header('location:../../../');
    }else{
        echo "Falha ao fazer login";
    }
?>