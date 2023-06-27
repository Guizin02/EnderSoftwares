
<?php
include('../../../connect.php');
include('../../../check2.php');
extract($_POST);

if(mysqli_query($con, "UPDATE `empresa` SET `nomefantasia` = '$name', `razaosocial` = '$razao', `cnpj` = '$cnpj'
WHERE `id_juridico` = '$id_jr'")){
header("location:../cadjuridico3.php");
}else{
    $msg = "Tente Novamente";
}
$_SESSION['msg'] = $msg;


?>