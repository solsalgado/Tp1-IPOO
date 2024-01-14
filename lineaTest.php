<?php 
include_once("linea.php");

echo "Ingrese punto A: \n";
$ptoA = trim(fgets(STDIN));
echo "Ingrese punto B: \n";
$ptoB = trim(fgets(STDIN));
echo "Ingrese punto C: \n";
$ptoC = trim(fgets(STDIN));
echo "Ingrese punto D: \n";
$ptoD = trim(fgets(STDIN));

$objLinea = new Linea($ptoA, $ptoB, $ptoC, $ptoD);
echo $objLinea. "\n";

echo "Ingrese un número para desplazar derecha: \n";
$derecha = trim(fgets(STDIN));
$objLinea-> mueveDerecha($derecha);
echo $objLinea. "\n";

echo "Ingrese un número para desplazar izquierda: \n";
$izquierda = trim(fgets(STDIN));
$objLinea-> mueveIzquierda($izquierda);
echo $objLinea. "\n";

echo "Ingrese un número para desplazar arriba: \n";
$arriba = trim(fgets(STDIN));
$objLinea-> mueveArriba($arriba);
echo $objLinea. "\n";

echo "Ingrese un número para desplazar abajo: \n";
$abajo = trim(fgets(STDIN));
$objLinea-> mueveAbajo($abajo);
echo $objLinea. "\n";
