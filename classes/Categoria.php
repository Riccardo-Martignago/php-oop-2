<?php 

class Categoria {
    private $animale;

    public function __construct($animale) {
        $this->animale = $animale;
    }

    public function getAnimale(){
        return $this->animale;
    }
}
