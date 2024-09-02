<?php


require_once 'Carro.php';
require_once 'Moto.php';

$meuCarro = new Carro("Toyota","Corolla");

echo $meuCarro->mostrarDetalhes();
echo $meuCarro->mover();

$minhaMoto = new Moto("Honda","CBR");

echo $minhaMoto->mostrarDetalhes();
echo $minhaMoto->mover();


?>