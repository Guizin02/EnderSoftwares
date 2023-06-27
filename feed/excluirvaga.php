<?php
require('connect.php');
$id_vaga = $_GET['cod'];

    if(mysqli_query($con,"DELETE FROM `vagas` WHERE `id_vaga` = '$id_vaga'")){
        $msg = "Vaga deletada para sempre e sem volta!";
        header("location:vagas.php");

    }else{
$msg = "Erro ao excluir para sempre e sem volta!";
}

@session_start();
$_SESSION['msg'] = $msg;




?>