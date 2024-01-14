<?php
class Cuadrado{
    private $vertice1 = [];
    private $vertice2 = [];
    private $vertice3 = [];
    private $vertice4 = [];

    public function __construct($vertice1, $vertice2, $vertice3, $vertice4){
        $this->vertice1 = $vertice1;
        $this->vertice2 = $vertice2;
        $this->vertice3 = $vertice3;
        $this->vertice4 = $vertice4;
    }

    public function getVertice1(){
        return $this->vertice1;
    }
    public function getVertice2(){
        return $this->vertice2;
    }
    public function getVertice3(){
        return $this->vertice3;
    }
    public function getVertice4(){
        return $this->vertice4;
    }

    public function setVertice1($vertice1){
        $this->vertice1 = $vertice1;
    }
    public function setVertice2($vertice2){
        $this->vertice1 = $vertice2;
    }
    public function setVertice3($vertice3){
        $this->vertice1 = $vertice3;
    }
    public function setVertice4($vertice4){
        $this->vertice1 = $vertice4;
    }

    public function __toString(){
        return "Punto A: (". $this->getVertice1()["x"]. "/". $this->getVertice1()["y"]. ") \n".
               "Punto B: (". $this->getVertice2()["x"]. "/". $this->getVertice2()["y"]. ") \n".
               "Punto C: (". $this->getVertice3()["x"]. "/". $this->getVertice3()["y"]. ") \n".
               "Punto D: (". $this->getVertice4()["x"]. "/". $this->getVertice4()["y"]. ") \n";

    }

    /**
     * calcula el area de un cuadrado
     */
    public function area(){
        $vert1 = $this->getVertice1();
        $vert2 = $this->getVertice2();

        $ladoAB = ($vert1["x"] - $vert2["x"]);
        $ladoBC = ($vert1["y"] - $vert2["y"]);
        $cuenta = ($ladoAB * $ladoBC);
        return $cuenta;
    }

    public function desplazar($d){
        $v1 = $this->getVertice1();
        $v2 = $this->getVertice2();
        $v3 = $this->getVertice3();
        $v4 = $this->getVertice4();

        $distanciaX = ($v1["x"] - $d["x"]);
        $distanciaY = ($v1["y"] - $d["y"]);

        $arrayV1 = ["x" => ($v1["x"] + $distanciaX), "y" => ($v1["y"] + $distanciaY)];

        $arrayV2 = ["x" => ($v2["x"] + $distanciaX), "y" => ($v2["y"] + $distanciaY)];

        $arrayV3 = ["x" => ($v3["x"] + $distanciaX), "y" => ($v3["y"] + $distanciaY)];

        $arrayV4 = ["x" => ($v4["x"] + $distanciaX), "y" => ($v4["y"] + $distanciaY)];

        $this->setVertice1($arrayV1);
        $this->setVertice2($arrayV2);
        $this->setVertice3($arrayV3);
        $this->setVertice4($arrayV4);
        
    }

    public function aumentarTamanio($t){
        $vt1 = $this->getVertice1();
        $vt2 = $this->getVertice2();
        $vt3 = $this->getVertice3();
        $vt4 = $this->getVertice4();

        $arrayVt1 = ["x" => $vt1["x"], "y" => ($vt1["y"] + $t)];

        $arrayVt2 = ["x" => ($vt2["x"] + $t), "y" => ($vt2["y"] + $t)];

        $arrayVt4 = ["x" => ($vt4["x"] + $t), "y" => $vt4["y"]];
        
        $this->setVertice1($arrayVt1);
        $this->setVertice2($arrayVt2);
        $this->setVertice3($vt3);
        $this->setVertice4($arrayVt4);
        
    }
}