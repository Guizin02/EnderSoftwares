
<?php
require('../../../connect.php');
extract($_POST);
if(isset($_COOKIE["ID"])){
    $user_id = $_COOKIE["ID"];
}
if(mysqli_query($con, "INSERT INTO `endereco` (`id`, `pais`, `estado`, `cidade`, `id_cliente`) 
VALUES (NULL, '$pais', '$estado', '$cidade', '$user_id');")){
    $msg = "Sucesso ao enviar suas informações!";
    header("location:../cad4.php");
}else{
    echo "Tente Novamente";
}

?>