<?php

extract($_POST);
$senha = md5($senha);


require('connect.php');

$busca = mysqli_query($con, "Select * from `user` where `email` = '$email'");
session_start();
if($busca->num_rows == 1){
    $contato = mysqli_fetch_array($busca);
    if($senha === $contato['senha']){
        echo "email e senha corretos";
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $contato['nome'];
        $target = "location:./feed/feed.php";
    }else{
        $msg = "Email ou senha incorretos!";
        $target = "location:./login.php";
    }
    
}else{
    $msg = "Email ou senha incorretos!";
    $target = "location:login.php";
}
$_SESSION['msg'] = $msg;
header($target);



?>