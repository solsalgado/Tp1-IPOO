<?php 
include_once("login.php");

$contraseñasUsadas = ["copito1234", "holamundo_", "123455", "1hola2"];
$objLogin = new Login("", "", "", $contraseñasUsadas);


echo "Ingrese su nombre de usuario: ". "\n";
$nomUsuario = trim(fgets(STDIN));
$objLogin->setNombreUsuario($nomUsuario);
echo "Ingresar contraseña: ". "\n";
$iContraseña = trim(fgets(STDIN));
$objLogin->setContraseña($iContraseña);
$contraseñasUsadas[] = $iContraseña;
$funcionRecordar = $objLogin->recordar($nomUsuario);
echo "Frase de contraseña: ". $funcionRecordar. "\n";

echo "------Cambiar contraseña------". "\n";
echo "Ingrese una contraseña nueva: ". "\n";
$nuevaContraseña = trim(fgets(STDIN));
$funcionCambiar = $objLogin->cambiarContraseña($nuevaContraseña);
if($funcionCambiar == false){
    echo "Se cambió la contraseña.";
} else{
    echo "Esa contraseña ya existe.";
}
