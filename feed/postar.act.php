<?php
require('connect.php');
extract($_FILES);
extract($_POST);

$pic1 = rand(1000,100000).$_FILES['img1']['name'];
$caminho = "imgsvagas/".$pic1;
move_uploaded_file($img1['tmp_name'], $caminho);

$pic2 = rand(1000,100000).$_FILES['img2']['name'];
$caminho = "imgsvagas/".$pic2;
move_uploaded_file($img2['tmp_name'], $caminho);

$pic3 = rand(1000,100000).$_FILES['img3']['name'];
$caminho = "imgsvagas/".$pic3;
move_uploaded_file($img3['tmp_name'], $caminho);

$pic4 = rand(1000,100000).$_FILES['img4']['name'];
$caminho = "imgsvagas/".$pic4;
move_uploaded_file($img4['tmp_name'], $caminho);

// $imgs1 = "imgsvagas/".md5(time()).".jpg";
// move_uploaded_file($img1['tmp_name'],$imgs1);

// $imgs2 = "imgsvagas/".md5(time()).".jpg";
// move_uploaded_file($img2['tmp_name'],$imgs2);

// $imgs3 = "imgsvagas/".md5(time()).".jpg";
// move_uploaded_file($img3['tmp_name'],$imgs3);

// $imgs4 = "imgsvagas/".md5(time()).".jpg";
// move_uploaded_file($img4['tmp_name'],$imgs4);

if(mysqli_query($con, "INSERT INTO `vagas`(`id_vaga`, `id_usuario`, `titulo_vaga`, `descricao_vaga`, `imagem_vaga`, `imagem2_vaga`, `imagem3_vaga`, `imagem4_vaga`, `orcamento_vaga`, `data_vaga`)
VALUES (NULL, '$codUsuario','$titulo_vaga','$descricao_vaga','$pic1','$pic2','$pic3','$pic4','$orcamento_vaga',now())")){
            $msg = "Vaga postada com sucesso!";
            header("location:vagas.php");
            }else{
            $msg = "Erro ao postar!";
            }

    session_start();
    $_SESSION['msg'] = $msg;
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    
?>