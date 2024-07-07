<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto {
    public $titolo;
    public $categoria;
    public $foto;
    public $prezzo;

    public function __construct($titolo,Categoria $categoria, $foto, $prezzo){
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->foto = $foto;
        $this->prezzo = $prezzo;
    }
    
    public function getTitolo() {
        return $this->titolo;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getFoto() {
        return $this->foto;
    }
    public function getPrezzo() {
        return $this->prezzo;
    }
}