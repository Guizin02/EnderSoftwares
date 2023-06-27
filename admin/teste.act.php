<?php
include('../check.php');
extract($_POST);
if(mysqli_query($con, "INSERT INTO `planos` (`id_plano`, `id_cliente`, `plano`, `status`, `pagamento`) 
VALUES (NULL, '$user_id', '$plano', '$email', '$pagamento')")){
header("location:painel.php");
}else{
    echo "Erro ao cadastrar ";  
    echo date("Y/m/d h:i:s");
}
?>