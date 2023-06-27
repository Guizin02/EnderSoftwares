<?php
require("connect.php");
$pesquisar = $_POST['pesquisar'];
$pesquisa = "SELECT * FROM user WHERE nome OR sobrenome LIKE '%$pesquisar%' LIMIT 5";
$pesquisas = mysqli_query($con, $pesquisa);

while($rows_pesquisa = mysqli_fetch_array($pesquisas)){
    echo "Nome do Usuario: ".$rows_pesquisa['nome']." ".$rows_pesquisa['sobrenome']."<br>";
}
?>