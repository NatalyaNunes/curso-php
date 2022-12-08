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

for($c = 1; $c <= 10; $c++){
    echo "$c <br>";
}
for($d = 10; $d >=1; $d--){
    echo "$d <br>";
}

$n = $_GET["num"];
for($c = 1; $c <=10; $c++){
    echo "$n x $c = ". ($n * $c). "<br>";
}
?>

</body>
</html>