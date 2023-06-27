
<?php

include('../../../connect.php');
include('../../../check.php');
extract($_POST);
$email = $_POST['email'];
$senha = md5($senha);
if(mysqli_query($con, "INSERT INTO `user` (`id_cliente`, `nome`, `sobrenome`, `email`, `senha`, `tipo_user`, 
`criacao`) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha', '$tipo', NOW())")){
include_once('loginpf.act.php');
header("location:../cadpf2.php");
}else{
    echo "Erro ao cadastrar";
    echo date("Y/m/d h:i:s");
}
?>