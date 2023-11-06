<?php

require('connect.php');

extract($_POST);
extract($_FILES);

$fotoUrl = "fotos/". md5(time()) .".jpg";

move_uploaded_file($foto['tmp_name'],$fotoUrl);

mysqli_query($con,"INSERT INTO `bd_cadastros`.`tb_cadastros`
 (`codigo`, `nome`, `telefone`, `email`, `foto`) 
VALUES 
 (NULL, '$nome', '$telefone', '$email', '$fotoUrl');");

 header("location:listar.php");