<?php 
include_once("fecha.php");

$objFecha = new Fecha(0, 0, 0);

echo "Ingrese un número: ";
$nDia = trim(fgets(STDIN));
echo "Ingrese un dia: ";
$fechaDia = trim(fgets(STDIN));
echo "Ingrese un mes: ";
$fechaMes = trim(fgets(STDIN));
echo "Ingrese un año: ";
$fechaAnio = trim(fgets(STDIN));
$objFecha->incrementoFecha($nDia,$fechaDia, $fechaMes, $fechaAnio);
echo "nueva fecha ". $objFecha;