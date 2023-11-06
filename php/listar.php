<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Listar Cadastros</title>
</head>
<body>
<form action="cadastro.php" method="post">
<p><input type="submit" value="Novo Cliente"></p>
</form>
<?php
require('connect.php');

$cadastros = mysqli_query($con,"select * from `tb_cadastros`");

while ($cadastro = mysqli_fetch_array($cadastros)) {
    echo "<div class=\"card\">";
    echo "<p>Nome: $cadastro[nome]</p>";
    echo "<p>Telefone: $cadastro[telefone]</p>";
    echo "<p>Email: $cadastro[email]</p>";
    echo "<p> <img src=$cadastro[foto]?foto=". time() ."> </p>";
    echo "<p> <a href=alterar.php?codigo=$cadastro[codigo]>Alterar</a> </p>";
    echo "</div>";
}
?>
    
</body>
</html>