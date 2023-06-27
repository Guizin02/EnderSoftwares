<?php
require('connect.php');
$codPublicacao = $_GET['cod'];

if(mysqli_query($con,"DELETE FROM `comentarios` WHERE `codPublicacao` = '$codPublicacao'")){
    if(mysqli_query($con,"DELETE FROM `publicacoes` WHERE `codPublicacao` = '$codPublicacao'")){
        $msg = "Publicação deletada para sempre e sem volta!";
        header("location:feed.php");

    }
}else{
$msg = "Erro ao excluir para sempre e sem volta!";
}

@session_start();
$_SESSION['msg'] = $msg;




?>