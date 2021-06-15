<?php header("Content-Type: application/json") ?>
<?php echo json_encode($people);?>

<?php foreach($people as $person) : ?>
    {'name' : 'Carmelo', 'email' : 'carmelo@correo.com', 'age' : 35, 'city' : 'Torremolinos'}
<?php endforeach; ?>
