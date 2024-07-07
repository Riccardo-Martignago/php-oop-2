<?php

class Gioco extends Prodotto{
    private $dimensione;

    public function __construct($titolo,Categoria $categoria, $foto, $prezzo, $dimensione) {
        parent::__construct($titolo,$categoria, $foto, $prezzo);
        $this->dimensione = $dimensione;
    }

    public function getDimensione(){
        return $this->dimensione; 
    }
};