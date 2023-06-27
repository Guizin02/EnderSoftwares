<?php
    require('connect.php');

    session_start();
    extract($_POST);

    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $id = $_SESSION['id'];

    if(mysqli_query($con, "INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `rua`, `id_cliente`) 
    VALUES (NULL, '$pais', '$estado', '$cidade', '$rua', '$id')"))
    {
        $msg = "Endereço adicionado com sucesso";
    }
    else{
        $msg = "Erro ao adicionar endereço. Tente novamente";
    }

    $_SESSION['msg'] = $msg;

    header("location:../front-end/cad2.php");
?>