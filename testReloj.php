<?php
include_once("reloj.php");

$objetoReloj = new Reloj(21,20,00);
echo $objetoReloj. "\n";
echo "1er incremento: ". $objetoReloj. "\n";
$objetoReloj->incremento();
echo "2do incremento: ". $objetoReloj. "\n";
$objetoReloj->incremento();
echo "3er incremento: ". $objetoReloj. "\n";
$objetoReloj->incremento();

$objetoReloj->puestaACero();
echo "Puesta a cero: ". $objetoReloj;