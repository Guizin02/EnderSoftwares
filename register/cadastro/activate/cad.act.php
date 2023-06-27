
<?php

require('../../../connect.php');
extract($_POST);
$email = $_POST['email'];
$senha = md5($senha);
session_start();   
if(mysqli_query($con, "INSERT INTO `cliente` (`id_cliente`, `nome`, `sobrenome`, `email`, `senha`)
VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha');")){
header("location:../cad3.php");
}else{
    $msg = "Tente Novamente";
}
@session_start();
$_SESSION['msg'] = $msg;




// require('../connect.php');
// extract($_POST);
// $email = $_POST['email'];
// $senha = md5($senha);
// if(mysqli_query($con, "INSERT INTO `cliente` (`id_cliente`, `nome`, `sobrenome`, `email`, `senha`,`criacao`)
// VALUES (NULL, '$firstname', '$lastname', '$email', '$senha', NOW())")){
// include_once('login.act.php');
// header("location:../cad3.php");
// }else{
//     echo "Erro ao cadastrar";
//     echo date("Y/m/d h:i:s");
// }
?>