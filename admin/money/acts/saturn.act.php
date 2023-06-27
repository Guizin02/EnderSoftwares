<?php
include('../../../check.php');
require('../../../connect.php');
extract($_POST);
if(mysqli_query($con, "INSERT INTO `planos` (`id_plano`, `id_cliente`, `nome`,  `cpf`, `plano`, `status`, `pagamento`)
VALUES (NULL, '$user_id', '$nome', '$cpf', '$plano', '$status', '$pagamento')")){
header("location:../../../index.php");
}else{
    echo 'Tente novamente';
}


