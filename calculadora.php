<?php
class Calculadora{
    //atributos
    private $numero1;
    private $numero2;

    //constructor
    public function __construct($num1, $num2){
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }

    //obtener valor
    public function getNumero1(){
        return $this->numero1;
    }
    public function getNumero2(){
        return $this->numero2;
    }

    //asigna un valor a un atributo
    public function setNumero1($num1){
        $this->numero1 = $num1;
    }
    public function setNumero2($num2){
        $this->numero2 = $num2;
    }

    /**
     * @param float $sumando
     * @return float
     */
    public function sumar(){
        $sN1 = $this->getNumero1();
        $sN2 = $this->getNumero2();
        $sumando = ($sN1 + $sN2);
        return $sumando;
    }

        /**
     * @param float $restando
     * @return float
     */
    public function restar(){
        $rN1 = $this->getNumero1();
        $rN2 = $this->getNumero2();
        $restando = ($rN1 - $rN2);
        return $restando;
    }

        /**
     * @param float $multiplicando
     * @return float
     */
    public function multiplicar(){
        $mN1 = $this->getNumero1();
        $mN2 = $this->getNumero2();
        $multiplicando = ($mN1 * $mN2);
        return $multiplicando;
    }

        /**
     * @param float $dividiendo
     * @return float
     */
    public function dividir(){
        $dN1 = $this->getNumero1();
        $dN2 = $this->getNumero2();
        $dividiendo = ($dN1 / $dN2);
        return $dividiendo;
    }

    public function __toString(){
        return "". $this->getNumero1(). "". $this->getNumero2();
    }



}