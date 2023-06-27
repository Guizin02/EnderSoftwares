
<?php
include('../../../connect.php');
include('../../../check.php');
extract($_POST);

if(mysqli_query($con, "UPDATE `user` SET `datanasc` = '$date'
WHERE `id_cliente` = '$user_id';")){
$msg = "Sucesso ao enviar suas informações!";
header("location:../cadpf4.php");
}else{
    $msg = "Tente Novamente";
}
$_SESSION['msg'] = $msg;


?>
