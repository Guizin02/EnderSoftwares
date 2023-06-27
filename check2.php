<?php
    include('connect.php');
    if (isset($_COOKIE["ID_jr"])){
        $id_jr = $_COOKIE["ID_jr"];

        $stmt = $con->prepare("UPDATE empresa SET online = now() WHERE id_juridico = ?");
        $stmt->bind_param("i", $id_jr);
        $stmt->execute();

        $busca = "SELECT * FROM `empresa`
        WHERE empresa.id_juridico = '$id_jr'";

        $resultado = mysqli_query($con, $busca);
        $user = mysqli_fetch_array($resultado);
    }
?>