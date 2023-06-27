<?php
    require('../back-end/sec.php');
?>
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
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
?>
    <div id="box">
        <form action="../back-end/cad2.act.php" method="post" enctype="multipart/form-data">
            <h2>Cadastrar conta</h2>
            <p><input type="text" name="pais" id="" placeholder="País"></p>
            <p><input type="text" name="estado" id="" placeholder="Estado"></p>
            <p><input type="text" name="cidade" id="" placeholder="Cidade"></p>
            <p><input type="text" name="rua" id="" placeholder="Rua"></p>
            <p><input type="submit" value="Cadastrar"></p>
        </form>
    </div>
</body>
</html>