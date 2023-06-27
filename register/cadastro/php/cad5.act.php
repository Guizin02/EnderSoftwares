
<?php
include('../../../connect.php');
include('../../../check.php');
extract($_POST);

if(mysqli_query($con, "INSERT INTO `curriculo`(`id`, `titulo`, `inicio`,`termino`,`local`, `desc_curriculo`, `id_cliente`)
 VALUES (NULL, '$nome', '$inicio', '$termino', '$inst', '$desc', '$user_id')")){
header("location:../../");
}else{
    echo "Tente Novamente";
}
?>