<?php
class Login{
    private $nombreUsuario;
    private $contraseña;
    private $fraseContraseña;
    private $contraseñasGuardadas = [];

    public function __construct($nombreUsuario, $contraseña, $fraseContraseña, $contraseñasGuardadas)  {
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseña = $contraseña;
        $this->fraseContraseña = $fraseContraseña;
        $this->contraseñasGuardadas = $contraseñasGuardadas;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getContraseña(){
        return $this->contraseña;
    }
    public function getFraseContraseña(){
        return $this->fraseContraseña;
    }
    public function getContraseñasGuardadas(){
        return $this->contraseñasGuardadas;
    }

    public function setNombreUsuario($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }
    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }
    public function setFraseContraseña($fraseContraseña){
        $this->fraseContraseña = $fraseContraseña;
    }
    public function setContraseñasGuardadas($contraseñasGuardadas){
        $this->contraseñasGuardadas = $contraseñasGuardadas;
    }

    public function __toString(){
        return " ";
    }

    public function recordar($usuario){
        $nUsuario = $this->getNombreUsuario();
        if($nUsuario == $usuario){
            $frase = "Hola Mundo";
        }
        return $frase;
    }

    /**
     * verifica que la nueva contraseña no se haya usado antes
     * @param $nuevaContraseña
     * @return boolean 
     */
    public function verificarContraseña($nuevaContraseña){
        $cGuardadas = $this->getContraseñasGuardadas();
        $count = count($cGuardadas);
        $i = 0;
        $existe = false;

        while($i < $count && $existe){
            $contrasGuardadas = $cGuardadas[$i];

            if($nuevaContraseña == $contrasGuardadas){
                $existe = true;
            }
            $i++;
        }
        return $existe;
    }

    /**
     * permite cambiar la contraseña si esta no está en uso
     * @param $nContraseña
     */
    public function cambiarContraseña($nContraseña){
        $vContraseña = $this->verificarContraseña($nContraseña);
        $cGuardadas = $this->getContraseñasGuardadas();
        $existe = true;
        if($vContraseña == false){
            $cGuardadas[] = $nContraseña;
            $this->setContraseñasGuardadas($cGuardadas);
            $existe = false;
        }
        return $existe;
    }

}