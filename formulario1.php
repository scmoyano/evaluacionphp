<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  
    <title>Ejercicio 1</title>
</head>
<body>
    <h3>Inicio de sesion</h3>
<?php
include 'header.php'
?>
<form action="retorno1.php" method="post">

<input type="text" name="usuario" id="">
<input type="password" name="password" id="">
<input type="number" name="pin" id="">

<input type="submit" value="Ingresar">
</form>
    <?php


?>
</body>
</html>