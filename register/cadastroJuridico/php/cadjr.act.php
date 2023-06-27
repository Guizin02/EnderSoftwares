
<?php
include('../../../connect.php');
include('../../../check2.php');
extract($_POST);
$email = $_POST['email'];
$senha = md5($senha);
if(mysqli_query($con, "INSERT INTO `empresa` (`id_juridico`, `email`, `senha`, `telefone`, `criacao`)
VALUES (NULL, '$email', '$senha', '$telefone', NOW())")){
include('loginjr.act.php');
header("location:../cadjuridico2.php");
}else{
    echo "Erro ao cadastrar";
    echo date("Y/m/d h:i:s");
}
?>