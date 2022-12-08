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
#contador - exemplo 1

$c = 1;
$d = 10;
while ($c <= 10) {
    echo "$c<br>";
    $c++; 
}
while ($d>=1){
    echo "$d <br>";
    $d--;
}

$i = 1;

while($i<=5){
$v = "num". $i;
$nome = "v". $i;
$$v = $_GET[$nome];
$i++; 
}
echo "$num1 $num2"
?>
 </body>
 </html>