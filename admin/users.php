<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Users - EnderSoftwares</title>
    <link rel="stylesheet" href="./css/users.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body class="teste">
<div class="container">
        <?php
    require('../connect.php');
    
    //if($texto.lenght >=2){
    $contatos = mysqli_query($con, "Select * from `user` where `nome` like '%texto%'");
    require('../connect.php');
    $contatos = mysqli_query($con, "SELECT * FROM `user`");
   while($contato = mysqli_fetch_array($contatos)){
                            echo "<table class=\"table\">";
                               echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id Cliente:</th>";
                                        echo "<th>Nome:</th>";
                                        echo "<th>Sobrenome:</th>";
                                        echo "<th>Email:</th>";
                                        echo "<th>Tipo do Usuário:</th>";
                                       echo "<th>Data de Nascimento:</th>";
                                       echo "<th>Criação:</th>";
                                   echo "</tr>";
                                echo "</thead>";
                        
                                echo "<tbody>";
                                echo "<div class=\"divisao\">";
                                echo "<tr>";
            echo "<td data-label=Id Plano> $contato[id_cliente]</td>";
            echo "<td data-label=Id Cliente> $contato[nome]</td>";
            echo "<td data-label=Id Cliente> $contato[sobrenome]</td>";
            echo "<td data-label=Id Cliente> $contato[email]</td>";
            echo "<td data-label=Id Cliente> $contato[tipo_user]</td>";
            echo "<td data-label=Id Cliente> $contato[datanasc]</td>";
            echo "<td data-label=Id Cliente> $contato[criacao]</td>";
                                echo "</tr>";
                                echo "</div>";
                                echo "</tbody>";  
                            
                echo "</table>"; 
}
?>
             </main>
 
             <!-- Fim da Main -->



    
</body>
</html>
