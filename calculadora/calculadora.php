<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php

    require 'auxiliar.php';

    $operador1 = trim($_GET['operador1']);
    $operador2 = trim($_GET['operador2']);
    $operando = trim($_GET['operando']);
    $resultado = calcular_resultado($operador1, $operador2, $operando)

    ?>
    

    <p>
        El resultado de <?= "$operador1 $operando $operador2" ?> es <?= $resultado?> 
    </p>
    
</body>

</html>