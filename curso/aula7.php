<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>

    <?php
    
    /* 
    Operador relacionais ------------------
    Maior >
    Menor <
    Maior ou igual >=
    Menor ou igual <=
    Diferente <> !=
    Igual ==
    Identico ===
    */

    # Operadores Relacionais

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Valores recebidos foram $n1 e $n2<br>";
    $re = ($tipo == "s")? $n1+$n2 : $n1*$n2;
    echo "resulatdo é $re <br>";
    
    $c = 3;
    $d = "3";
    $r = ($c === $d) ? "sim" : "não"; // == iguais ===identicos até no tipo
    echo "variáveis são iguais: $r <br>";
    
    // exemplo

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1 + $nota2)/2;
    echo "Média das duas notas é $media <br>";
    // $sit = ($media >= 7) ? "Aprovado" : "Recuperação";   pode ser usado no próprio echo sem variavel
    echo "Status: ". (($media >= 7) ? "Aprovado" : "Recuperação");

    /*
    Operadores lógicos
    E = and &&
    OU = or ||
    XOU = xor  (ou exclusivo)
    Não = !
    */

    // exemplo 2 - dizer se pode ou n votar

    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "<br><br>Quem nasceu em $ano tem $idade anos";
    $tipo = ($idade>17 && $idade<65)? "obrigatório" : "Não obrigatório";
    echo "<br> Seu voto é $tipo"

    ?>

</body>
</html>