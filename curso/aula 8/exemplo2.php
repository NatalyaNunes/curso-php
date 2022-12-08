<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = $_GET["texto"] ;
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
    
<?php
        echo "<span class ='texto'>$texto</span>";
?>
<br>
<a href="exemplo2.html">Voltar</a>

</body>
</html>