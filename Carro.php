<?php

//Require_once é usado para não dar erro no codigo diferente de usar apenas require.
require_once 'Veiculo.php'; 

// extends serve para herdar todos atributos da classe. Nesse caso a classe Veiculo herda os atributos da classe Veiculo
Class Carro extends Veiculo{

    public function mover(){

        return "<br> O carro está andando na estrada!<br>";
    }

} 


?>