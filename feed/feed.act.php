<?php
require('connect.php');
extract($_FILES);
extract($_POST);
$url = "imgs/".md5(time()).".jpg";
move_uploaded_file($Foto['tmp_name'],$url);

if(mysqli_query($con, "INSERT INTO `publicacoes`(`codPublicacao`, `codUsuario`, `descricao`, `fotoPublicacao`, `data`) 
VALUES (NULL, '$codUsuario','$descricao','$url',now())")){
            $msg = "Publicação postada com sucesso!";
            header("location:feed.php");
            }else{
            $msg = "Erro ao postar!";
            }

    session_start();
    $_SESSION['msg'] = $msg;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    
?>