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
    
    # include_once ou require_once - caso já tenha sido incluido no código não irá ser incluido dnv
    include "funcoes.php"; #pode trocar o include por require
    echo "testando<br>";
    ola();
    mostrarvalor(6);
    ?>
</body>
</html>