<?php
include('../../check.php');

extract($_POST);

if(empty($_POST['linguagem1'])){
    $linguagem1 = NULL;
}else {
    $linguagem1 = $_POST['linguagem1'];
}

if(empty($_POST['linguagem2'])){
    $linguagem2 = NULL;
}else {
    $linguagem2 = $_POST['linguagem2'];
}

if(empty($_POST['linguagem3'])){
    $linguagem3 = NULL;
}else {
    $linguagem3 = $_POST['linguagem3'];
}

if(empty($_POST['linguagem4'])){
    $linguagem4 = NULL;
}else {
    $linguagem4 = $_POST['linguagem4'];
}

if(empty($_POST['linguagem5'])){
    $linguagem5 = NULL;
}else {
    $linguagem5 = $_POST['linguagem5'];
}

$stmt = $con->prepare("SELECT * FROM habilidades WHERE id_cliente = ?");
$stmt->bind_param("i",$user_id);
$stmt->execute();
$result = $stmt->get_result();
$existe = $result->num_rows;

if ($existe<1) {
    if(mysqli_query($con, "INSERT INTO `habilidades`(`id`, `linguagem1`, `linguagem2`, `linguagem3`,
    `linguagem4`, `linguagem5`, `id_cliente`) VALUES(NULL, '$linguagem1', '$linguagem2', '$linguagem3', 
    '$linguagem4', '$linguagem5', '$user_id')")){
    header("location:./");
    }else{
        echo "ERRO AO ENVIAR";
    }
}else{
    if(mysqli_query($con, "UPDATE `habilidades` SET `linguagem1` = '$linguagem1', `linguagem2` = '$linguagem2', `linguagem3` = '$linguagem3',
    `linguagem4` = '$linguagem4', `linguagem5` = '$linguagem5' WHERE `id_cliente` = '$user_id'")){
    header("location:./");
    }else{
        echo "ERRO AO ENVIAR";
    }
}
?>