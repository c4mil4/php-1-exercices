 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

  $people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 30, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 25, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 35, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 38, 'city' => 'Málaga'],
  ];

?> 
<?php include("./links.php") ?>
    <table>
    <thead>
    <tr>
      <td>Nombre</td>      
      <td>Email</td>      
      <td>Edad</td>      
      <td>Ciudad</td>      
         
    </tr>
    </thead>

    <tbody>
    <?php foreach ($people as $person) : ?>
    <tr>
      <td><?php echo $person['name']?></td>      
      <td><?php echo $person['email']?></td>      
      <td><?php echo $person['age']?></td>      
      <td><?php echo $person['city']?></td>      
      
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>




</body>
</html>