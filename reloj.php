<?php 
class Reloj {
    private $hora;
    private $minutos;
    private $segundos;

    public function __construct($hora, $minutos, $segundos){
        $this->hora = $hora;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    public function getHora(){
        return $this->hora;
    }
    public function getMinutos(){
        return $this->minutos;
    }
    public function getSegundos(){
        return $this->segundos;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }
    public function setMinutos($minutos){
        $this->minutos = $minutos;
    }
    public function setSegundos($segundos){
        $this->segundos = $segundos;
    }

    public function __toString()
    {
        return "Hora: ". $this->getHora(). ":". $this->getMinutos(). ":". $this->getSegundos();
    }

    public function puestaACero(){
        $this->setHora(0);
        $this->setMinutos(0);
        $this->setSegundos(0);
    }

    public function incremento(){
        //obtengo el valor
        $vHora = $this->getHora();
        $vMinutos = $this->getMinutos();
        $vSegundos = $this->getSegundos();
        //aumento seg
        $vSegundos++;
        if($vSegundos <= 59){
            $this->setSegundos($vSegundos);
        } else {
            $this->setSegundos(0);
            $vMinutos++;
            if($vMinutos <= 59){
                $this->setMinutos($vMinutos);
            } else {
                    $this->setMinutos(0);
                    $vHora++;
                    if($vHora <= 23){
                        $this->setHora($vHora);
                    } else {
                        $this->setHora(0);
                    }
                }       
        }
    }
}