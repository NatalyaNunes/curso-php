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
    
    $nome = "Natalya Gabriele";
    $nome2 = strtolower($nome); #deixa todas letras minusculas
    echo "seu nome é $nome2 <br>";
    echo "seu nome é ". strtoupper($nome). "<br>"; #deixa as letras maiusculas

    $nome3 = ucfirst(strtolower ($nome)); #apenas a primeira letra é maiuscula
    echo "$nome3 <br>";

    $nome3 = ucwords(strtolower ($nome)); #primeira letra de tds as palavras maiusculas

    print (strrev($nome)); #colocar a string ao contrário

    $texto = "eu estou apenas testando PHP aqui no curso de PHP";
    $pos = strpos($texto, "PHP"); #procura o local que a palavra está na string
    $pos = stripos($texto, "PHP"); #procura o local que a palavra está na string ignorando o case
    echo "<br>$texto <br> A string está na posição $pos <br>";

    $cont = substr_count($texto, "PHP"); #contar quantas vezes a palavra aparece
    echo "PHP é encontrado $cont vezes na frase <br>";

    $text = "Natálya";
    $novo = str_pad($text, 30, "*"); #center, rigth, left
    print "Meu nome é $novo 17 anos <br>";

    $txt = str_repeat("PHP<br>", 10); #repetição
    print $txt;

    $fra = "Eu gosto de programar";
    $nv = str_ireplace("programar", "codar", $fra); #substitui a palavra
    print $nv;

    ?>
</body>
</html>