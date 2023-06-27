<?php
require('connect.php');
extract($_FILES);
extract($_POST);

$idPublicacao = $_POST['idpub'];

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($dados['add_comentario'])){
$dados = array_map('trim', $dados);

if(mysqli_query($con, "INSERT INTO `comentarios`(`codComentario`, `codUsuario`, `codPublicacao`, `comentario`, `dataComentario`) 
VALUES (NULL, '$codUsuario','$idPublicacao','$comentario',now())")){
            $msg = "Comentário postado com sucesso!";
            header("location:comentario.php?cod=$idPublicacao");
            }else{
            $msg = "Erro ao postar!";
            }
        }

    session_start();
    $_SESSION['msg'] = $msg;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
?>