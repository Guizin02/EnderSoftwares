
<?php
include('../../../connect.php');
include('../../../check.php');
extract($_POST);

if(mysqli_query($con, "UPDATE `user` SET `bio` = '$bio', `caracteristicas` = '$carac', `datanasc` = '$date'
WHERE `id_cliente` = '$user_id';")){
header("location:../cad2.php");
}else{
    $msg = "Tente Novamente";
}
$_SESSION['msg'] = $msg;


?>