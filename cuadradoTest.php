<?php
include_once("cuadrado.php");

$vertice1Array = ["x" => 1, "y" => 6];
$vertice2Array = ["x" => 6, "y" => 6];
$vertice3Array = ["x" => 1, "y" => 1];
$vertice4Array = ["x" => 6, "y" => 1];

$objCuadrado = new Cuadrado($vertice1Array, $vertice2Array, $vertice3Array, $vertice4Array);

echo "Puntos: \n". $objCuadrado;

$area = $objCuadrado->area();
echo "Area del cuadrado: ". $area. "\n";

$dArray = ["x" => 3, "y" => 2];
$objCuadrado->desplazar($dArray);
echo "Desplazamiento: \n". $objCuadrado. "\n";

$tamaño = 2;
$objCuadrado->aumentarTamanio($tamaño);
echo "Aumentar tamaño: \n". $objCuadrado. "\n";