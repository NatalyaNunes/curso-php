<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    
    $v = array(2,4,1,9,22,18);
    echo "o vetor tem ". count($v). " elementos. <br>";

    $t = array(1,2,3,4,5,6,7);
    print_r($t);
    array_unshift($t,9); #adcionar indice no inicio
    print_r($t);
    array_shift($t); #apagar o indice do inicio
    print_r($t);

    sort($v); #ordem crescente
    print_r($v);
    rsort($t); #ordem decrescente
    print_r($t);

    asort($v); #coloca os indices em ordem crescente e permanece c o mesmo indice
    print_r($v);
    arsort($t); #coloca os indices em ordem decrescente e permanece c o mesmo indice
    print_r($t);

    ksort($t); #coloca indices em ordem independentes dos valores
    krsort($t); #coloca indices em ordem decrescentes independentes dos valores
    
    ?>
    </pre>
</body>
</html>