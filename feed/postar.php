<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postar</title>
    <link rel="stylesheet" href="postar.css">
</head>
<body>
        <?php include('../check.php');?>
        <?php include('navbarfeed.php');?>
        <?php include('sidebar.php');?>
        <?php include('mobilenavbar.php');?>
        <?php include('sidebarpatrocinios.php');?>
        <link rel="stylesheet" href="stylefeed.css">
        <link rel="stylesheet" href="postar.css">
        <?php
        require("connect.php");
        @session_start();
        $usuarios = mysqli_query($con, "SELECT * FROM `user` WHERE `id_cliente` = '$user_id'");
        $usuario = mysqli_fetch_array($usuarios);
        ?>
<div id="feed">
    <div class="foryou">


        <form action="postar.act.php" method="post" enctype="multipart/form-data" class="creatPost" id="form-create-post">
            <div class="box-text-infos">
                <div class="profile-infos">
                    <div class="profile-phots">
                        <img src="../pictures/<?php echo $usuario['foto']?>" alt="Foto de perfil" id="fotoPerfil">
                    </div>
                        
                        <input type="hidden" value="<?php echo $user_id ?>" name="codUsuario">
                    <div class="textarea-publicar">
                    <label for="titulo_vaga">Título:</label>
                      <textarea name="titulo_vaga" placeholder="Digite o titulo da vaga" class="creatPostText" id="titulo_vaga" maxlength="199"></textarea>
                      <label for="descricao_vaga">Descrição:</label>
                      <textarea name="descricao_vaga" placeholder="Descrição da vaga" class="creatPostText" id="descricao_vaga" maxlength="999"></textarea>
                      <label for="ganhos_vaga">Orçamento:</label>
                      <input type="number" name="orcamento_vaga" placeholder="Ex: R$ 220" id="ganhos_vaga">
                    </div>
                </div>
                <div>
                    <p class="escolhaImagens">Escolha imagens de inpiração para o seu projeto:</p>
                    <div class="vaga-phots">
                    <img src="imgsvagas/fotoVaga2" alt="Escolha uma imagem" class="imgPhotoVaga" id="imgPhotoVaga">
                    <img src="imgsvagas/fotoVaga2" alt="Escolha uma imagem" class="imgPhotoVaga2" id="imgPhotoVaga">
                    </div>
                    <div class="vaga-phots">
                    <img src="imgsvagas/fotoVaga2" alt="Escolha uma imagem" class="imgPhotoVaga3" id="imgPhotoVaga">
                    <img src="imgsvagas/fotoVaga2" alt="Escolha uma imagem" class="imgPhotoVaga4" id="imgPhotoVaga">
                    </div>
                </div>
                   <div class="form-buttons">
                       <input type="file" name="img1" class="inputImagem" id="inputImagem" accept="image/*">
                       <input type="file" name="img2" class="inputImagem" id="inputImagem2" accept="image/*">
                       <input type="file" name="img3" class="inputImagem" id="inputImagem3" accept="image/*">
                       <input type="file" name="img4" class="inputImagem" id="inputImagem4" accept="image/*">
                    </div>  
                       <button type="submit" class="botaop" name="add_vaga">Publicar</button>
                   
            </div>
        </form>

    </div>
</div>
<script src="postar.js"></script>
</body>
</html>