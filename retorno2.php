<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion =$_POST['direccion'];
$numdirec =$_POST['numdirec'];

echo "Querido " . $nombre . " ". $apellido . "nos complce informarle que formara parte de nuestra empresa, estaremos visitandolo a su hogar en la calle ". $direccion .  " a la altura de ". $numdirec ."<br>". "Nos comunicaremos con usted al numero  ". $telefono . " ante cualquier inconveniente que pueda surgir. <br> Attm Personal."; 
?>