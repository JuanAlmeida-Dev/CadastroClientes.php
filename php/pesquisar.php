<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Pesquisar</title>
    <script src="/libs/jquery-3.5.1.min.js"></script>
    <script>
    function filtrar(texto){
       $.ajax({
           type: "get",
           url: "pesquisar.act.php?texto=" + texto,
           success: function (retorno) {
               $('#resultado').html(retorno);
           }
       });
    }
    </script>
</head>
<body>
    <input type="text" onkeyup="filtrar(this.value)">
    <div id="resultado"></div>
</body>
</html>