<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $est = $_GET["estado"];

    switch ($est) {
        case '1':
            $r = "Norte";
            break;
        case '2':
            $r = "Nordeste";
            break;
        case '3':
            $r = "Sudeste";
            break;
    }
    echo "Estado faz parte da região $r";
?>
    <a href="atividade.html">Voltar</a>
</body>
</html>