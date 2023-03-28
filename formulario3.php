<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  
    <title>Ejercicio 3</title>
</head>
<body>
<h3>Validacion de datos</h3>
<?php
include 'header.php'
?>
<form action="retorno3.php" method="post">

<input type="text" placeholder="Ingrese su Nombre" name="nombre" id=""><br>
<input type="text" placeholder="Ingrese su apellido" name="apellido" id=""><br>
<input type="tel" placeholder= "Ingrese su telefono" name="telefono" id=""><br>
<input type="text" placeholder="Ingrese su direccion" name="direccion" id=""><br>
<input type="number" placeholder="Num de dni" name="dni" id=""><br>

<input type="submit" value="Ingresar">
</form>

</body>
</html>