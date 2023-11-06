<?php
require('connect.php');
extract($_POST);
extract($_FILES);

move_uploaded_file($foto['tmp_name'], $foto_atual);

mysqli_query($con, "UPDATE `tb_cadastros` SET 
`nome` = '$nome', 
`telefone` = '$telefone', 
`email` = '$email', 
`foto` = '$foto_atual' 
WHERE 
`tb_cadastros`.`codigo` = '$codigo';");


header("location:listar.php");
