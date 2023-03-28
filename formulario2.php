<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  
    <title>Incio de Sesion</title>
</head>
<body>
<h3>Ingreso de datos</h3>
<?php
include 'header.php'
?>
<form action="retorno2.php" method="post">

<input type="text" placeholder="Ingrese su Nombre" name="nombre" id="">
<input type="text" placeholder="Ingrese su apellido" name="apellido" id="">
<input type="tel" placeholder= "Ingrese su telefono" name="telefono" id="">
<input type="text" placeholder="Ingrese su direccion" name="direccion" id="">
<input type="number" placeholder="Num de direccion" name="numdirec" id="">

<input type="submit" value="Ingresar">
</form>
 
</body>
</html>