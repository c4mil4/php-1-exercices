 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/main.css">
    
</head>
<body>
<?php
 require("./links.php");
?>
<?php

  $people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 30, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 25, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 35, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 38, 'city' => 'Málaga'],
  ];

?> 
<?php include("./links.php") ?>
    <table border="1">
    <thead>
    <tr>
      <td>Id</td>      
      <td>Nombre</td>      
      <td>Email</td>      
      <td>Edad</td>      
      <td>Ciudad</td>      
         
    </tr>
    </thead>

    <tbody>
    <?php foreach ($people as $person) : ?>
    <tr>
      <td><?= $person['id']?></td>      
      <td><?= $person['name']?></td>           
      <td><a href="/employees.php)id=<?= $person['id']; ?>"><?= $person['email']?></a></td>      
      <td><?= $person['city'] ?></td>      
      <td><button class="employees-delete-button" value="Eliminar" data-person=<?= json_encode($person)?>Delete</button></td>  
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
      <?php if (isset($_GET['message'])) :?>
      <p><?= $_GET['message']; ?></p>
      <?php endif;?>
    <hr/> 
    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
      <label for="name">Nombre</label>
      <input type="text" id="name" name="name" required/>
      <br/>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required/>
      <br/>
      <label for="age">Edad</label>
      <input type="number" id="age" name="age" required/>
      <br/>
      <label for="city">Ciudad</label>
      <input type="text" id="city" name="city" />
      <hr/>
      <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
      <hr/>
      <input type="submit" value="Enviar"/>
    </form>



  <?php require 'partial/footer.php'?>
</body>
</html>