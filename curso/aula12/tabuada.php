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
    
    $v = $_GET["valor"];
    $c = 0;

     while($c<=10){
        echo "$v x $c = ". ($v * $c). "<br>";
        $c++;
     }

    ?>
</body>
</html>