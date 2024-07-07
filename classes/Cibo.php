<?php

class Cibo extends Prodotto{
    private $peso;

    public function __construct($titolo,Categoria $categoria, $foto, $prezzo, $peso) {
        parent::__construct($titolo,$categoria, $foto, $prezzo);
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }
};