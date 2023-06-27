
<?php

require('../../../connect.php');
extract($_POST);
$senha = md5($senha);   
if(mysqli_query($con, "INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `id_cliente`)
 VALUES (NULL, '$pais', '$estado', '$cidade', '');")){
$msg = "Sucesso ao enviar suas informações!";
}else{
    $msg = "Tente Novamente";
}
session_start();
$_SESSION['msg'] = $msg;

header("location:../../cadcontinue3.php");
?>