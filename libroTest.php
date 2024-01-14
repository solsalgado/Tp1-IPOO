<?php 
include_once("libro.php");

$objLibro1 = new Libro(123, "ABC", 2005, "sol", "sol salgado");
$objLibro2 = new Libro(345, "triste", 2024, "solC", "sol");
$objLibro3 = new Libro(678, "traicion", 2023, "compañia sol", "sol sad");

$libros = [];
$libros = [$objLibro1, $objLibro2, $objLibro3];


/**
 * @param string $pLibro
 * @param array $libros
 * @return boolean
 */
function iguales($pLibro, $pArreglo){
    $count = count($pArreglo);
    $i = 0;
    $existe = false;

    while($i < $count && $existe == false){
        if($pArreglo[$i]->getTitulo() == $pLibro){
            $existe = true;
        }
        $i++;
    }
    return $existe;
}

function libroDeEditoriales($arregloLibros, $pEditorial){
    $count = count($arregloLibros);
    $i = 0;
    $existe = false;
    $texto = "";
    while($i < $count && $existe == false){
        if($arregloLibros[$i]->getEditorial() == $pEditorial){
            $texto = $texto. $arregloLibros[$i];
            //print_r($libros[$i]);
            $existe = true;
        }
        $i++;
    }
    return $texto;

}

print_r($libros);

echo "Ingrese una editorial: ". "\n";
$editorialLibro = trim(fgets(STDIN));

$pertenece = $objLibro1->perteneceEditorial($editorialLibro);
if($pertenece == true){
    echo "Pertenece.". "\n";
}else {
    echo "No pertenece.". "\n";
}

echo "Años desde edicion: ";
$aniosEdicion = $objLibro1->aniosDesdeEdicion();
echo $aniosEdicion. "\n";

echo "Ingrese un libro: ";
$libro = trim(fgets(STDIN));
$funcionIguales = iguales($libro, $libros);
if($funcionIguales == true){
    echo "Ya existe.". "\n";
}else {
    echo "No existe.". "\n";
}

echo "ingrese editorial: ";
$editorial = trim(fgets(STDIN));
$funcionLibrosEditorial = libroDeEditoriales($libros, $editorial);
echo $funcionLibrosEditorial;