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

$c = 1;
do{
    echo $c;
    $c++;
}while($c<=10);

$n = $_GET["n"];
$f = $n;
$fat = 1;
do{
   $fat = $fat * $f;
   $f--;
}while($f>=1);
echo "<br>Valor do fatorial é $n! = $fat";
?>
<br>
<button><a href="aula12.html">Voltar</a></button>


</body>
</html>