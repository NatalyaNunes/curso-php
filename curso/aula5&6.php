<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 e 6</title>
</head>
<body>
     
    <?php

        #numeros usados ?a=15&b=3.4&p=100&aa=2022

        #Aula 4 - variáveis

        echo "Olá mundo <br>";
        $idade = 17;
        $nome = "Natálya";
        echo $idade. "<br>";
        echo $nome. " tem ". $idade. " anos<br>";
        echo "$nome tem $idade anos!<br><br>"; #jeito mais simples

        #Aula 05 - operadores aritméticos

        $v1 = $_GET["a"]; //fazer o php receber variável entregue no http
        $v2 = $_GET["b"];
        $soma = $v1 + $v2;
        echo "$v1 + $v2 = $soma <br>";

        echo "A soma é ". ($v1 + $v2);
        echo "<br>Subtração é ". ($v1 - $v2);
        echo "<br>Multiplicação é ". ($v1 * $v2);
        echo "<br>Divisão é ". ($v1 / $v2);
        echo "<br>Modulo é ". ($v1 % $v2);
        echo "<br>Média vale ". (($v1 + $v2) / 2); //operação
            #funções aritméticas
            echo "<br><br><h2>Numeros recbeidos: $v1 e $v2</h2>";
            echo "valor absoluto de $v2 é ". abs($v2);                //eliminar sinal 
            echo "<br>Valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2); //elevado
            echo "<br>Valor da raiz de $v1 e $v2 é ". sqrt($v1). " e ".sqrt($v2);
            echo "<br>Valor arredondado de $v2 é ". round($v2); //ceil arredonda pra cima floor arredonda pra baixar
            echo "<br>Valor inteiro de $v1 é ". intval($v1);
            echo "<br>Valor de $v1 em moeda é R$". number_format($v1,2,",",".");
            echo "<br><br>"
    ?>

    <?php

        #aula 6 - operadores de atribuição

        // exemplo 1 Aumentar 10% no preço da calça

        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco,2,",",".");
        $preco = $preco + ($preco * 10)/100;      //forma 1 de fazer isso
        echo "<br>Com o aumento fica R$ $preco";
        $preco -= ($preco * 20)/100;              //forma 2 de fazer isso
        echo "<br>Valor com 20% de desconto é R$ ". number_format($preco,2,",",".");;

        //exemplo 2 mostrar qual o ano anterior

        $atual = $_GET["aa"];
        echo "<br><br>O ano atual é $atual";
        echo "<br>O ano atual é $atual e o anterior é ". --$atual;

        // formas de fazer comentário
        # formas de fazer comentário
        /* Comentários de mais de uma linha */

        // referenciar variáveis

        $a = 2;
        $b = $a;
        $b += 5;
        echo "<br><br>valor de a $a valor de b $b";

        $c = 2;
        $d = &$c;   //Referenciado, eles estão ligados e sempre o valor será igual
        $d += 5;
        echo "<br><br>valor de c $c valor de d $d";

        // variáveis de variáveis

        $x= "abc";
        $$x = "def";

        echo "<br><br>A variável x é $x";
        echo "<br>A $x recebeu $abc";

    ?>

</body>
</html>