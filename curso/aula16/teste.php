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

$v[0]=1;
$v[1]=4;
$v[2]=7;
var_dump($v); #print_r só que com formatação diferente

echo"<br>";

$ve = array (23,03,20,05);
var_export($ve);  #print_r com formatação diferente

echo"<br>";

$t = "apenas um texte de função com quebra de linha, ver se isso funciona mesmo sem frescagem que  e cheia nesses negocios aqui";
$i = wordwrap($t,20,"<br>", false); #texto, numero de caracteres, funcao pra fazer -- true corta independente da palavra, false corta após a palavra
echo $i;

$tam = strlen($t); #contar os caracteres do texto
echo "<br> O texto tem ".$tam. " caracteres";

$nome = "   josé da silva   "; 
$novo = trim($nome); #retirar os espaços desnecessários
echo "<br>$nome <br>$novo <br>";
#ltrim - retira espaços do inicio
#rtrim - retira espaço do fim

$frase = "eu to estudando dms";
$cont = str_word_count($frase, 0);

#0 - conta as palavras
#1 - coloca as palavras em um vetor
#2 - coloca as letra em um vetor

print ($cont);

echo"<br>";

$site = "curso em video";
$vetor = explode(" ", $site); # igual o str_word_count 1
print_r($vetor); 

echo"<br>";

$nome = "Natalya";
$vet = str_split($nome); #mostrar cada letra em um vetor
print_r($vet);

echo"<br>";

$c[0] = "testando";
$c[1] = "esse";
$c[2] = "negócio";
$texto = implode(" ", $c); # ou join(), vai fazer a junção do vetor
print($texto);

echo"<br>";

$letra = chr(70);   #mostra no teclado qual letra corresponde ao número escolhido
echo "a letra 70 é $letra <br>";

$let = "N";
$cod = ord($let);
echo "o código da letra $let é $cod";

?> 

</body>
</html>