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
        $v = array (1,2,3,6,78,79,90,95,97,100);
        print_r($v);
        $c = range(2,10,2); #numero de inicio, numero de fim, intervalo entre os números
        foreach($c as $valor){
            echo "$valor ";
        }
        $n = array (1=>'N', 4=>'A', 8=>'T', 10=>'A',11=>'L', 6=>'Y', 13=>'A'); #personalizados
        $n[] = 'G.';
        unset($n[10]); #apagar
        print_r($n);

        $i = array('nome' => 'Natálya', 'idade'=> 17, 'peso' => 65.4);
        foreach($i as $campo => $valor){ 
            echo "O campo $campo recebe $valor <br>";
        }

        #MATRIZ

        $m = array(array(2,3), array(0,3), array(0,5));
        $m[0][0]= $m[2][1]; #receber o valor do outro
        print_r($m);
    ?>
    </pre>
</body>
</html>