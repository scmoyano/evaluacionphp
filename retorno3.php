<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion =$_POST['direccion'];
$dni =$_POST['dni'];


$cliente = array("Santiago", "Moyano", 47524979, "iturraspe 33", 35363738 );

if (($nombre == $cliente[0] && $apellido == $cliente[1]) || $telefono == $cliente[2] || $direccion == $cliente[3] || $dni == $cliente[4] ) {

echo "Por Favor valide si sus datos son correctos <br>";

    foreach ($cliente as $dato) {
    echo $dato . "<br>";
} }
else  { 
    echo "no hay datos sobre usted en el sistema";
};



?>

