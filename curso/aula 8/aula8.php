<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8</title>
</head>
<body>
    
<?php

    #Aula 8 - integração html e php, usar forms

    $valor = $_GET["v"];
    echo "Valor enviado é $valor";
    echo "<br>A raíz quadrada é ". sqrt($valor);

?>
<br>
<a href="aula8.html">Voltar</a>

</body>
</html>