<?php 
class Teatro{
    private $nombreTeatro;
    private $direccion;
    private $funciones = [];

    public function __construct($nombreTeatro, $direccion, $funciones){
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFunciones(){
        return $this->funciones;
    }

    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro = $nombreTeatro;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setFunciones($funciones){
        $this->funciones = $funciones;
    }

    public function __toString()
    {
        return "Teatro: ". $this->getNombreTeatro(). "\n". 
        "Direccion: ". $this->getDireccion(). "\n". 
        "Funciones: ". $this->mostrarArray(). "\n";
    }

    public function cambiarNombre($nombreT){
        $this->setNombreTeatro($nombreT);
    }

    public function cambiarDireccion($direccionT){
        $this->setDireccion($direccionT);
    }

    public function cambiarFuncion($nombre, $nombreNuevo, $precio){
        $arrayFunciones = $this->getFunciones();
        $count = count($arrayFunciones);
        $i = 0;
        $boolean = false;
        while($i < $count && $boolean == false ){
            if($arrayFunciones[$i]["Nombre"] == $nombre){
                $arrayFunciones[$i] = ["Nombre" => ($arrayFunciones[$i]["Nombre"] = $nombreNuevo), "Precio" => ($arrayFunciones[$i]["Precio"] = $precio)];
                $this->setFunciones($arrayFunciones);
                $boolean = true;
            }  
            $i++;

        }
  
    }

    public function mostrarArray(){
        $colF = $this->getFunciones();
        $count = count($colF);
        $texto = "\n";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto . "Nombre: ". $colF[$i]["Nombre"]." Precio: ". $colF[$i]["Precio"]. "\n";
        }
        return $texto;

    }
}