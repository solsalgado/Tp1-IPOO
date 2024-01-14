<?php
include_once("teatro.php");

$funcion1 = ["Nombre" => "toy story 1", "Precio" => 600];
$funcion2 = ["Nombre" => "toy story 2", "Precio" => 700];
$funcion3 = ["Nombre" => "toy story 3", "Precio" => 800];
$funcion4 = ["Nombre" => "toy story 4", "Precio" => 900];

$funciones = [$funcion1, $funcion2, $funcion3, $funcion4];
 
$objTeatro = new Teatro("Osiris", "Av siempre viva", $funciones);
echo $objTeatro;

echo "Ingrese el nuevo nombre del teatro: ";
$nNombreT = trim(fgets(STDIN));
echo "Ingrese la nueva direccion del teatro: ";
$nDireccionT = trim(fgets(STDIN));
$objTeatro->cambiarNombre($nNombreT);
$objTeatro->cambiarDireccion($nDireccionT);
echo $objTeatro;

echo "Ingrese el nombre que desea cambiar: ";
$nombreF = trim(fgets(STDIN));
echo "Ingrese el nuevo nombre de la funcion: ";
$nNombreF = trim(fgets(STDIN));
echo "Ingrese el nuevo precio de la funcion: ";
$nPrecioF = trim(fgets(STDIN));
$objTeatro->cambiarFuncion($nombreF, $nNombreF, $nPrecioF);
echo $objTeatro;