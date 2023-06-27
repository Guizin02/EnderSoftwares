<?php
require('connect.php');
    extract($_POST);
    $email = $_POST['email'];
    $senha = md5($senha);

    $busca = "SELECT * FROM `cliente`
    LEFT JOIN `endereco`
    ON cliente.id_cliente = endereco.id_cliente
    LEFT JOIN `profissional`
    ON endereco.id_cliente = profissional.id_cliente
    WHERE cliente.email = '$email'";

    $aniver = "SELECT DATE_FORMAT(cliente.aniversario, '%d/%m/%Y')
    AS nasceu
    FROM cliente WHERE cliente.email = '$email'";

    $busca2 = mysqli_query($con, $busca);
    $aniver2 = mysqli_query($con, $aniver);

    session_start();

    if($busca2->num_rows == 1){
        $conta = mysqli_fetch_array($busca2);
        $aniversario = mysqli_fetch_array($aniver2);
        if($senha === $conta['senha']){
            echo "E-mail e senha corretos";
            $_SESSION = $conta;
            $_SESSION['id'] = $conta['id_cliente'];
            $_SESSION['nasceu'] = $aniversario['nasceu'];
            $_SESSION['login'] = true;
            $target = "location:../index.php";
        }else{
            echo "E-mail ou senha incorretos";
            $target = "location:../front-end/login.php";
        }
    }
@session_start();
$_SESSION['msg'] = $msg;
header($target);
?>