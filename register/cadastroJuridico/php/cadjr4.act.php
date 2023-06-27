
<?php
include('../../../connect.php');
include('../../../check2.php');
extract($_POST);

if(mysqli_query($con, "UPDATE `empresa` SET `fundacao` = '$inicio', `descricao` = '$desc'
WHERE `id_juridico` = '$id_jr';")){
header("location:../../../");
}else{
    echo "Tente Novamente";
}
?>