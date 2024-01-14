<?php 
class Fecha{
    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia, $mes, $anio){        
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }

    public function getDia(){
        return $this->dia;
    }
    public function getMes(){
        return $this->mes;
    }
    public function getAnio(){
        return $this->anio;
    }

    public function setDia($dia){
        $this->dia = $dia;
    }
    public function setMes($mes){
        $this->mes = $mes;
    }
    public function setAnio($anio){
        $this->anio = $anio;
    }

    public function __toString(){
        return "". $this->getDia(). "/". $this->getMes(). "/". $this->getAnio(). "\n". 
               "(". $this->getDia(). " de ". $this->mesExtendido(). " de ". $this->getAnio(). ")";
    }


    /**
     * @param int $int
     * @param $fecha
     * @return $fechaNueva
     */
    public function incrementoFecha($int, $iDia, $iMes, $iAnio){
        $this->setMes($iMes);
        $this->setAnio($iAnio);

        $sumaDia = ($int + $iDia);
        if($iMes == 1 || $iMes == 3 || $iMes == 5 || $iMes == 7 || $iMes == 8 || $iMes == 10 || $iMes == 12){
            if($sumaDia <= 31){
                $this->setDia($sumaDia);
            } else{
                $sumaDia2 = ($sumaDia - 31);
                $iMes++;
                $this->setDia($sumaDia2);
                $this->setMes($iMes);
            }            
        }
        if($iMes == 4 || $iMes == 6 || $iMes == 9 || $iMes == 11){
            if($sumaDia <= 30){
                $this->setDia($sumaDia);
            } else{
                $sumaDia2 = ($sumaDia - 30);
                $iMes++;
                $this->setDia($sumaDia2);
                $this->setMes($iMes);
            }
        }
        if($iMes == 2){
            if($sumaDia <= 29 && $iAnio % 4 == 0){
                $this->setDia($sumaDia);  
            }
            if($sumaDia > 29 && $iAnio % 4 == 0){
                $sumaDia2 = ($sumaDia - 29);
                $iMes++;
                $this->setDia($sumaDia2);
                $this->setMes($iMes);
            }
            if($sumaDia <= 28 && $iAnio % 4 != 0){
                $this->setDia($sumaDia); 
            }
            if($sumaDia > 28 && $iAnio % 4 != 0){
                $sumaDia2 = ($sumaDia - 28);
                $iMes++;
                $this->setDia($sumaDia2);
                $this->setMes($iMes);
            }

        }

        if($iMes > 12){
            $iAnio++;
            $this->setAnio($iAnio);
            $this->setMes(01);
        }

        $fechaNueva = "". $this->getDia(). "/". $this->getMes(). "/". $this->getAnio(). "\n". 
        "(". $this->getDia(). " de ". $this->getMes(). " de ". $this->getAnio(). ")";

        return $fechaNueva;
    }

    public function mesExtendido(){
        $eMes = $this->getMes();
        if($eMes == 1){
            $mExtendido = "Enero";
        } if($eMes == 2){
            $mExtendido = "Febrero";
        } if($eMes == 3){
            $mExtendido = "Marzo";
        } if($eMes == 4){
            $mExtendido = "Abril";
        } if($eMes == 5){
            $mExtendido = "Mayo";
        } if($eMes == 6){
            $mExtendido = "Junio";
        } if($eMes == 7){
            $mExtendido = "Julio";
        } if($eMes == 8){
            $mExtendido = "Agosto";
        } if($eMes == 9){
            $mExtendido = "Septiembre";
        } if($eMes == 10){
            $mExtendido = "Octubre";
        } if($eMes == 11){
            $mExtendido = "Noviembre";
        } if($eMes == 12){
            $mExtendido = "Diciembre";
        }
        return $mExtendido;
    }
}