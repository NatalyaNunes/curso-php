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
    
    $nu = $_GET["num"];
    $op = $_GET["ope"];

    switch($op){
        case '1':
            $r = $nu * 2;
            break;
        case '2':
            $r = $nu * $nu;
            break;
        case '3':
            $r = $nu ^ 3;
            break;
    }
    echo "O numero $nu com a operação é $r <br>";

    //exemplo 2

    $dia = $_GET["dia"];

    switch ($dia) {
        case '1':
        case '7':
            echo "Não tem aula";
            break;
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
            echo "Vai pra escola";
            break;
        
    }

    ?>

</body>
</html>