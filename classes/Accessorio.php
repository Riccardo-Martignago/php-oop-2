<?php

class Accessorio extends Prodotto{
    private $materiale;

    public function __construct($titolo,Categoria $categoria, $foto, $prezzo, $materiale) {
        parent::__construct($titolo,$categoria, $foto, $prezzo);
        $this->materiale = $materiale;
    }

    public function getMateriale(){
        return $this->$materiale;
    }
};