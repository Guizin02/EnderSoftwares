
<?php
require('../../../connect.php');
extract($_POST);
if(isset($_COOKIE["ID"])){
    $user_id = $_COOKIE["ID"];
}

if(mysqli_query($con, "UPDATE `user` SET `bio` = '$bio', `caracteristicas` = '$carac', `datanasc` = '$date'
WHERE `id_cliente` = '$user_id';")){
$msg = "Sucesso ao enviar suas informações!";
header("location:../cad2.php");
}else{
    $msg = "Tente Novamente";
}
$_SESSION['msg'] = $msg;


?>