<?php
    include('../../../connect.php');
    include('../../../check.php');

    extract($_POST);
    $email = $_POST['email'];
    $senha = md5($senha);

    if($conta = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email' && `senha` = '$senha'")){
        mysqli_query($con, "UPDATE `user` SET `online` = now() WHERE `email` = '$email' && `senha` = '$senha'");
        $msg = "Sucesso ao enviar suas informações!";
        $user = mysqli_fetch_array($conta);
        setcookie("ID",$user['id_cliente'], time() + (86400 * 30), "/");
        header("../../../feed/feed.php");
    }else{
        echo "Falha ao fazer login";
    }
?>
