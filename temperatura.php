<?php

$nro1 = 0;
$resultado = 0;
$conversao = 'temperatura';

if (isset($_GET['nro1'], $_GET['conversao'])){
   $nro1 = $_GET['nro1'];
   $conversao = $_GET['conversao'];

   switch($conversao){
        case 'fahrenheit':
            $resultado = (($nro1 * 9/5) + 32 ). " °f.";
            break;
        case 'kelvin':
                $resultado = $nro1 + 273.15 . " K.";
                break;   
   
   }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title> 
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background-color: #069;
            padding: 8px 10px;
            text-align: center;
        }
        a{
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 17px;
        }
    </style> 
</head>
    <header>
        <h1>SISTEMA DE CONVERSÕES</h1>
        <a href="comprimento.php">Comprimento</a>
        <a href="Massa.php">Massa</a>
        <a href="Velocidade.php">Velocidade</a>
        <a href="Temperatura.php">Temperatura</a>
    </header>
<body>
    
    <form>
        Graus Celsius para conversão <br />
        <input type="number" name="nro1" value =<?= $nro1 ?> required/> <br /><br />
            <select name="conversao" id="">
                <option value="fahrenheit" <?= ($conversao == 'fahrenheit')?'Selected':''; ?>>Fahrenheit</option>
                <option value="kelvin" <?= ($conversao == 'kelvin')?'Selected':''; ?> >Kelvin</option>
            </select><br /> <br />
        <input type="submit" value="conversao"/><br /><br />
        <p>Resultado é: <?= $resultado ?></p>

    </form>
</body>
</html>