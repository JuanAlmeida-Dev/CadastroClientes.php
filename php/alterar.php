<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloAlterar.css">
    <title>Alterar</title>
</head>
<body>
    <?php
    $codigo = $_GET['codigo'];
    require('connect.php');
    $cadastro = mysqli_query($con, "Select * from `tb_cadastros` where `codigo` = '$codigo'");
    $cadastro = mysqli_fetch_array($cadastro);
    ?>

    <div class="container ">
    <h1>Alterar Cadastro</h1>
    <form class="form" action="alterar.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $cadastro['foto']; ?>" name="foto_atual">
        <input type="hidden" name="codigo" value="<?php echo $cadastro['codigo']; ?>">
        
        <p><label for="idFoto" class="foto"><img src="<?php echo $cadastro['foto']; ?>"></label></p>
        <p><input type="file" name="foto" id="idFoto"></p>

        <p><label for="idNome">Nome:</label></p>
        <p><input type="text" name="nome" id="idNome" value="<?php echo $cadastro['nome'];?>" ></p>

        <p><label for="idTel">Telefone:</label></p>
        <p><input type="text" name="telefone" id="idTel" value="<?php echo $cadastro['telefone'];?>" ></p>

        <p><label for="idEmail">Email:</label></p>
        <p><input type="text" name="email" id="idEmail" value="<?php echo $cadastro['email'];?>" ></p>

        <p><input type="submit" value="Alterar"></p>
    </form>
  </div>
</body>

</html>