<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro</title>
</head>
<body>
    
    <div class="container">
    <h1>Cadastrar Clientes</h1>
    <form action="cadastro.act.php" method="post" enctype="multipart/form-data">
    
    <p><label for="idFoto">Foto</label></p>
    <p><input type="file" name="foto" id="idFoto"></p>

    
    <p><label for="idNome">Nome:</label></p>
    <p><input  type="text" name="nome" id="idNome" placeholder="Seu nome"></p>
    

    <p><label for="idTel">Telefone:</label></p>
    <p><input type="text" name="telefone" id="idTel" placeholder="Telefone"></p>

    <p><label for="idEmail">Email:</label></p>
    <p><input type="text" name="email" id="idEmail" placeholder="Exemplo@gamil.com"></p>

    <p><input type="submit" value="Cadastrar"></p>
    </form>
    </div>

</body>
</html>