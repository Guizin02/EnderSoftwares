<?php
    require('connect.php');
    extract($_POST);
    extract($_FILES);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($senha);
    $funcao = $_POST['funcao'];
    $bio = $_POST['bio'];
    $descricao = $_POST['descricao'];
    $aniversario = $_POST['aniversario'];
    $idade = $_POST['idade'];
    $endereco = "img/".md5(time()).".jpg";
    move_uploaded_file($foto['tmp_name'], $endereco);

    if(mysqli_query($con, "INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `senha`, `funcao`, `bio`, 
    `descricao`, `aniversario`, `idade`, `foto`) 
    VALUES (NULL, '$nome', '$email', '$senha', '$funcao', '$bio', '$descricao', '$aniversario', '$idade', 
    '$endereco')"))
    {
        $msg = "Conta criada com sucesso";
    }
    else{
        $msg = "Erro ao criar conta. Tente novamente";
    }

    session_start();
    $_SESSION['msg'] = $msg;

    header("location:../front-end/cad.php");
?>