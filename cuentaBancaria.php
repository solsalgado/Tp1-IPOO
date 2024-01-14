<?php 
class CuentaBancaria{
    private $numCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta, $dniCliente, $saldoActual, $interesAnual){
        $this->numCuenta = $numCuenta;
        $this->dniCliente = $dniCliente;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }

    public function getNumCuenta(){
        return $this->numCuenta;
    }
    public function getDniCliente(){
        return $this->dniCliente;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }
    public function setDniCliente($dniCliente){
        $this->dniCliente = $dniCliente;
    }
    public function setSaldoActual($saldoActual){
        $this->saldoActual = $saldoActual;
    }
    public function setInteresAnual($interesAnual){
        $this->interesAnual = $interesAnual;
    }

    public function actualizarSaldo(){
        $saldo = $this->getSaldoActual();
        $interes = $this->getInteresAnual();

        $actualizar = ($saldo + ($interes / 365));

        $this->setSaldoActual($actualizar);
    }

    public function depositar($cant){
        $saldo = $this->getSaldoActual();

        $depositar = ($saldo + $cant);

        $this->setSaldoActual($depositar);
    }

    public function retirar($cant){
        $saldo = $this->getSaldoActual();

        if($saldo > 0){
            $retirar = ($saldo - $cant);
            $this->setSaldoActual($retirar);
            $mensaje = "Se retiró con exito.";
        } else {
            $mensaje = "No hay saldo suficiente.";
        }
        return $mensaje;
    }

    public function __toString(){
        return "Número de cuenta: ". $this->getNumCuenta(). "\n". 
               "DNI del cliente: ". $this->getDniCliente(). "\n". 
               "Salado actual: ". $this->getSaldoActual(). "\n". 
               "Interes anual: ". $this->getInteresAnual(). "\n";
    }
}