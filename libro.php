<?php
class Libro{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreCompAutor;

    public function __construct($isbn, $titulo, $anioEdicion, $editorial, $nombreCompAutor){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anioEdicion = $anioEdicion;
        $this->editorial = $editorial;
        $this->nombreCompAutor = $nombreCompAutor;
    }

    public function getIsbn(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getNombreCompAutor(){
        return $this->nombreCompAutor;
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAnioEdicion($anioEdicion){
        $this->anioEdicion = $anioEdicion;
    }
    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }
    public function setNombreCompAutor($nombreCompAutor){
        $this->nombreCompAutor = $nombreCompAutor;
    }

    public function __toString(){
        return "ISBN: ". $this->getIsbn(). "\n".
               "Titulo del libro: ". $this->getTitulo(). "\n".
               "Año de edicion: ". $this->getAnioEdicion(). "\n".
               "Editorial: ". $this->getEditorial(). "\n".
               "Autor: ". $this->getNombreCompAutor(). "\n";
    }

    public function perteneceEditorial($pEditorial){
        $editorialL = $this->getEditorial();
        if($editorialL == $pEditorial){
            $pertenece = true;
        } else {
            $pertenece = false;
        }
        return $pertenece;

    }

    public function aniosDesdeEdicion(){
        $aEdicion = $this->getAnioEdicion();
        return $aEdicion;
    }


}