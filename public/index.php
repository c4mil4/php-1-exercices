<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Exercice</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/assets/main.css" >
    <?php  require "./links.php" ?>
</head>

<body>
    
    <?php  include("./links.php")?>
  
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

    <?php 
        ($_GET);
    ?>
    <h1>Hola, Ca< <?= $_GET['token']; ?></h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
    <script src="/assets/main.js"></script>
</body>

</html>