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

function teste($x){
    $x = $x + 2;
    echo "O valor de x é $x <br>";
}
$a = 3;
teste($a);
echo "valor de a é $a";

/*
function teste(&$x){        passa valor por referencia, ou seja o valor de a altera após incrementar x
    $x = $x + 2;
    echo "O valor de x é $x <br>";
}
$a = 3;
teste($a);
echo "valor de a é $a";
*/
?>

</body>
</html>