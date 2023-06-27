
<?php
require('../../../connect.php');
extract($_POST);
extract($_FILES);
if(isset($_COOKIE["ID"])){
    $user_id = $_COOKIE["ID"];
}
$picture = rand(1000,100000).$_FILES['foto']['name'];
$caminho = "../../pictures/".$picture;

move_uploaded_file($foto['tmp_name'], $caminho);

if(mysqli_query($con, "UPDATE `user` SET `foto` = '$picture' WHERE `cliente`.`id_cliente` = '$user_id';")){
$msg = "Sucesso ao enviar suas informações!";
header("location:../../");
}else{
    $msg = "Tente Novamente";
}
?>