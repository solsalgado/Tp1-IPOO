<?php 
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($capacidadMaxima, $cantidadActual){
        $this->capacidadMaxima = $capacidadMaxima;
        $this->cantidadActual = $cantidadActual;
    }

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }
    public function getCantidadActual(){
        return $this->cantidadActual;
    }

    public function setCapacidadMaxima($capacidadMaxima){
        $this->capacidadMaxima = $capacidadMaxima;
    }
    public function setCantidadActual($cantidadActual){
        $this->cantidadActual = $cantidadActual;
    }

    public function llenarCafetera(){
        $cantidadA = $this->getCantidadActual();

        $capacidadM = $cantidadA;

        $llenar = $this->setCapacidadMaxima($capacidadM);

        return $llenar;
    }

    public function servirTaza($cantidad){
        $capacidad = 150; //suponiendo que 150ml es la capacidad de una taza
        $cantidadActual = $this->getCantidadActual();

        $cuenta = ($cantidadActual - $cantidad);

        if($cuenta >= $capacidad){
            $mensaje = "Se llenó la taza.";
            $this->setCantidadActual($cuenta);
        } else{
            $mensaje = "No alcanza para llenar la taza.";
            $this->setCantidadActual($cuenta); 
        }

        return $mensaje;
    }

    public function vaciarCafetera(){
        $vaciar = $this->setCantidadActual(0);
        return $vaciar;
    }

    public function agregarCafe($cantidad){
        $cant = $this->getCantidadActual();
        $cuenta = ($cant + $cantidad);

        $agregar = $this->setCantidadActual($cuenta);
        return $agregar;
    }

    public function __toString(){
        return "Capacidad de la cafetera: ". $this->getCapacidadMaxima(). "\n". 
               "Cantidad de la cafetera: ". $this->getCantidadActual();
    }

}