<?php
require('connect.php');

    $codPublicacao = $_GET['id'];
    $codUsuario = $_GET['user'];

    $busca = mysqli_query($con, "SELECT * FROM `curtidas` WHERE `codPublicacao` = '$codPublicacao' AND `codUsuario` = '$codUsuario'");
    
    if($busca->num_rows > 0){
        $atual = mysqli_fetch_array($busca);
        $codCurtida = $atual['codCurtida'];
        mysqli_query($con, "DELETE FROM `curtidas` WHERE `codCurtida` = '$codCurtida'");
        $query = "UPDATE publicacoes SET curtidas = curtidas - 1 WHERE codPublicacao = $codPublicacao";

    }else{
        mysqli_query($con, "INSERT INTO `curtidas` (`codCurtida`, `codPublicacao`, `codUsuario`) VALUES (NULL, '$codPublicacao', '$codUsuario');");
        $query = "UPDATE publicacoes SET curtidas = curtidas + 1 WHERE codPublicacao = $codPublicacao";
    }
    mysqli_query($con, $query);
    $busca = mysqli_query($con, "SELECT * FROM `publicacoes` WHERE  `codPublicacao` = '$codPublicacao'");
    $linha = mysqli_fetch_array($busca);

    echo $curtidas = $linha['curtidas'];
?>