<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções string</title>
</head>
<body>
  
<?php

$prod = "leite";
$preco = 4.50;

printf ("o %s custa R$ %.2f", $prod, $preco); #%.2f é para ter duas casas decimais
echo "<br>";

$x[0]=2;
$x[1]=3;
$x[2]=4;

#geralmente pra teste
print_r($x); 
#similares - var_dump var_export
?>
<!--
    %s - string
    %f - float decimal
    %d - decimal (positio e negativo)
    %u - decimal sem sinal
-->

</body>
</html>