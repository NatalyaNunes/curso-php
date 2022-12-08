<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
</head>
<body>
    <?php
    
    $v = $_GET["p"];
    $d = 0;

    for($c=1; $c <= $v; $c++){
        if($v%$c == 0){
            $d++;
        }
    }

if($d > 2){
    echo "Esse número não é primo, possui $d divisores.";
}else{
    echo "Esse número é primo.";
}
    ?>
    <br>
    <button><a href="primo.html">Voltar</a></button>
</body>
</html>