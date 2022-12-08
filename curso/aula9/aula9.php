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
    $idade = date("Y") - $_GET["ano"];
    echo "Você tem $idade anos <br>";
    if($idade >= 18){
        $v = "pode dirigir ";
        $d = "é obrigado";
    }else{
        $v = "não pode dirigir";
        $d = "não é obrigado";
    }
    echo "Com a idade de $idade você $v e $d a votar <br><br>";
    
    //exemplo dois

    if($idade<16){
        $tipovoto = "Não vota";
    }else{
        if(($idade>=16 && $idade<18) || ($idade > 65)){
            $tipovoto = "Opcional";
        }else{
            $tipovoto = "Obrigatório";
        }
    }
    echo "Seu voto é $tipovoto";
    
    /*
    outro exemplo usando elseif
    if($idade<16){
        $tipovoto = "Não vota";
    }elseif(($idade>=16 && $idade<18) || ($idade > 65)){
            $tipovoto = "Opcional";
        }else{
            $tipovoto = "Obrigatório";
        }
    echo "Seu voto é $tipovoto"; */
    ?>

</body>
</html>