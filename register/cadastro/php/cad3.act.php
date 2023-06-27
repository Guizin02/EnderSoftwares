
<?php
include('../../../connect.php');
include('../../../check.php');
extract($_POST);

if(mysqli_query($con, "INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `id_cliente`) 
VALUES (NULL, '$pais', '$estado', '$cidade', '$user_id');")){
    header("location:../cad4.php");
}else{
    echo "Tente Novamente";
}

?>