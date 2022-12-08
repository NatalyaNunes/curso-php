<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--aula 11 - while Criar repetição-->
 
<form method="get" action="aula11.php">
<?php
$x = 1;
while($x<=5){
    echo "Valor de $x:  <input type='number' name='v$x' id=''>";
    $x++;
}
?>
 
    <input type="submit" value="Enviar">
</form>
</body>
</html>