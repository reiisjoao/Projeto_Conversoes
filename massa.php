<?php

$nro1 = 0;
$resultado = 0;
$conversao = 'massa';

if (isset($_GET['nro1'], $_GET['conversao'])){
   $nro1 = $_GET['nro1'];
   $conversao = $_GET['conversao'];

   switch($conversao){
        case 'libra':
            $resultado = $nro1 * 2.205 . " lb.";
            break;
        case 'tonelada':
                $resultado = $nro1 / 1000 . " t.";
                break;   
        case 'quilate':
                $resultado = $nro1 * 1.094 . " ct.";
                break;  
        case 'onca':
                $resultado = $nro1 * 35.274. " oz.";
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
    <title>Massa</title> 
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
        Quilograma <br />
        <input type="number" name="nro1" value =<?= $nro1 ?> required/> <br /><br />
            <select name="conversao" id="">
                <option value="libra" <?= ($conversao == 'libra')?'Selected':''; ?>>Libra</option>
                <option value="tonelada" <?= ($conversao == 'tonelada')?'Selected':''; ?> >Tonelada</option>
                <option value="quilate" <?= ($conversao == 'quilate')?'Selected':''; ?> >Quilate</option>
                <option value="onca" <?= ($conversao == 'onca')?'Selected':''; ?> >Onça</option>
            </select><br /> <br />
        <input type="submit" value="conversao"/><br /><br />
        <p>Resultado é: <?= $resultado ?></p>

    </form>
</body>
</html>