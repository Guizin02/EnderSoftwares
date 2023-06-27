<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        #box{
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .alert{
            color: red;
            font-size: 25px;
            border: 5px black dotted;
        }
    </style>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
?>
    <div id="box">
        <form action="../back-end/cad.act.php" method="post" enctype="multipart/form-data">
            <h2>Cadastrar conta</h2>
            <p><input type="text" name="nome" id="" placeholder="Nome"></p>
            <p><input type="email" name="email" id="" placeholder="E-mail"></p>
            <p><input type="password" name="senha" id="" placeholder="Senha"></p>
            <p><input type="text" name="funcao" id="" placeholder="Cargo que deseja exercer"></p>
            <p><input type="text" name="bio" id="" placeholder="Bio"></p>
            <p><input type="text" name="descricao" id="" placeholder="Descrição de sua conta"></p>
            <p><input type="date" name="aniversario" id=""></p>
            <p><input type="number" name="idade" id="" placeholder="Idade"></p>
            <p><input type="file" name="foto" id="" placeholder="Foto"></p>
            <p><input type="submit" value="Cadastrar"></p>
        </form>
    </div>
</body>
</html>