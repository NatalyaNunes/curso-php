<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
</head>
<body>
    
    <?php
    
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    echo "Sua média é $media <br>";
    if($media >= 7){
        $status = "Aprovado";
    }else if($media <7 && $media >= 4){
            $status = "Recuperação";
        }else{
            $status = "Reprovado";
        }
    
    echo "Seu status é $status";
    ?>

</body>
</html>