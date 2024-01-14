<?php 
include_once("cafetera.php");

$objCafetera = new Cafetera(0, 500);
$objCafetera->llenarCafetera();
echo $objCafetera. "\n";

$llenarTaza = $objCafetera->servirTaza(150);
echo $llenarTaza. "\n";

$vaciarCafetera = $objCafetera->vaciarCafetera();
echo "Se vació la cafetera. ". $vaciarCafetera. "\n";

$agregarCafe = $objCafetera-> agregarCafe(200);
echo "Se agregó café.". $agregarCafe. "\n";

echo $objCafetera;