<?php 
class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($pA, $pB, $pC, $pD){
        $this->pA = $pA;
        $this->pB = $pB;
        $this->pC = $pC;
        $this->pD = $pD;
    }

    public function getPA(){
        return $this->pA;
    }
    public function getPB(){
        return $this->pB;
    }
    public function getPC(){
        return $this->pC;
    }
    public function getPD(){
        return $this->pD;
    }

    public function setPA($pA){
        $this->pA = $pA;
    }
    public function setPB($pB){
        $this->pB = $pB;
    }
    public function setPC($pC){
        $this->pC = $pC;
    }
    public function setPD($pD){
        $this->pD = $pD;
    }

    public function mueveDerecha($d){
        $puntoA = $this->getPA();
        $puntoC = $this->getPC();

        $suma1 = ($puntoA + $d);
        $suma2 = ($puntoC + $d);

        $this->setPA($suma1);
        $this->setPC($suma2);
    }

    public function mueveIzquierda($d){
        $puntoA = $this->getPA();
        $puntoC = $this->getPC();

        $resta1 = ($puntoA - $d);
        $resta2 = ($puntoC - $d);

        $this->setPA($resta1);
        $this->setPC($resta2);
    }

    public function mueveArriba($d){
        $puntoB = $this->getPB();
        $puntoD = $this->getPD();

        $suma1 = ($puntoB + $d);
        $suma2 = ($puntoD + $d);

        $this->setPB($suma1);
        $this->setPD($suma2);
    }

    public function mueveAbajo($d){
        $puntoB = $this->getPB();
        $puntoD = $this->getPD();

        $resta1 = ($puntoB - $d);
        $resta2 = ($puntoD - $d);

        $this->setPB($resta1);
        $this->setPD($resta2);
    }

    public function __toString(){
        return "Punto 1: ". $this->getPA(). "/". $this->getPB(). "\n". 
               "Punto 2: ". $this->getPC(). "/". $this->getPD();
    }

}