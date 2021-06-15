<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Exercice</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
</head>

<body>
    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>
    <h1>Hola, Ca</h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
</body>

</html>

<?php

function hola () {
    function adios () {
        echo 'adios'.PHP_EOL;
    }
    
    echo 'hola'.PHP_EOL;
    
}

function saludos () {
    // hola(); // Fatal error: Cannot redeclare adios()
    adios(); // No redeclara variable.
}

hola();
adios();
saludos();
