<?php


abstract class Veiculo{
    protected $marca;
    protected $modelo;

    public function __construct($marca,$modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    abstract public function mover();

    public function mostrarDetalhes(){

        return "Marca: $this->marca, Modelo: $this->modelo";
        
    }

}

?>