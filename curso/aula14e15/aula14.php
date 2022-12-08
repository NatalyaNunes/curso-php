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
#funções - exemplo 1 

/* 
function soma($a,$b){
    $s = $a + $b;
    echo "A soma $a + $b = $s <br>";
}

soma(5,8);
soma(12,4);
*/

#exemplo 2

function mais($a,$b){
    $s = $a + $b;
    return $s;
}

$x = 4;
$y = 6;
$r = mais($x,$y);
echo "$x + $y = $r";

#exemplo 3

function sub($c,$d){
    return $c - $d;
}

$s = sub(6,2);
echo "<br>a sub é $s <br>";

#exemplo 4 - quando não se tem quantidade de valores dentro do ()

function soma(){
    $p = func_get_args(); #vai criar um vetor que guarde todos os valores colocados dentro dele
    $n = func_num_args(); #vai retornar a quantidade de valores que foram criados
    $s = 0;
    for($i = 0; $i<$n; $i++){
        $s = $s + $p[$i];
    }
    return $s;
}
$r = soma(3,5,2,4,6);
echo $r;

?>

</body>
</html>