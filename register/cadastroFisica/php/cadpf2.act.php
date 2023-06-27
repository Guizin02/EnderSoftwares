
<?php
include('../../../connect.php');
include('../../../check.php');
extract($_POST);

if(mysqli_query($con, "INSERT INTO `endereco` (`id`, `estado`, `cidade`, `id_cliente`) 
VALUES (NULL, '$estado', '$cidade', '$user_id');")){
    $msg = "Sucesso ao enviar suas informações!";
    header("location:../cadpf3.php");
}else{
    echo "Tente Novamente";
}

?>