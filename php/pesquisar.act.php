<?php
require('connect.php');

$texto= $_GET['texto'];

$cadastros = mysqli_query($con,"select * from `tb_cadastros` where `nome` like '%$texto%' OR `telefone` like '%$texto%' ");

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