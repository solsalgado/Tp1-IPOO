<?php 
include_once("cuentaBancaria.php");

$objCuenta = new CuentaBancaria(3256, 45344290, 300000, 600);
echo $objCuenta."\n";

$objCuenta->actualizarSaldo();
echo $objCuenta."\n";

$objCuenta->depositar(200000);
echo $objCuenta."\n";

$retiro = $objCuenta->retirar(40000);
echo $retiro."\n";

echo $objCuenta."\n";