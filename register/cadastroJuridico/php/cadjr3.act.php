
<?php
include('../../../connect.php');
include('../../../check2.php');
extract($_POST);

if(mysqli_query($con, "INSERT INTO `endereco_jr` (`id`, `estado`, `cidade`, `id_juridico`) 
VALUES (NULL, '$estado', '$cidade', '$id_jr');")){
    header("location:../cadjuridico4.php");
}else{
    echo "Tente Novamente";
}

?>