<?php

$nro1 = 0;
$resultado = 0;
$conversao = 'velocidade';

if (isset($_GET['nro1'], $_GET['conversao'])){
   $nro1 = $_GET['nro1'];
   $conversao = $_GET['conversao'];

   switch($conversao){
        case 'metro':
            $resultado = $nro1 / 3.6 . " m/s.";
            break;
        case 'milha':
                $resultado = $nro1 / 1.609 . " mi/h.";
                break;   
        case 'pe':
                $resultado = $nro1 / 1.097 . " ft/s.";
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
    <title>Velocidade</title> 
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
        Quilometro por hora <br />
        <input type="number" name="nro1" value =<?= $nro1 ?> required/> <br /><br />
            <select name="conversao" id="">
                <option value="metro" <?= ($conversao == 'metro')?'Selected':''; ?>>Metro por segundo</option>
                <option value="milha" <?= ($conversao == 'milha')?'Selected':''; ?> >Milhha por hora</option>
                <option value="pe" <?= ($conversao == 'pe')?'Selected':''; ?> >Pe por segundo</option>
            </select><br /> <br />
        <input type="submit" value="conversão"/><br /><br />
        <p>Resultado é: <?= $resultado ?></p>

    </form>
</body>
</html>