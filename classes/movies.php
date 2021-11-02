<?php
class Movies {
    private $titolo;
    private $regista;
    private $attori;
    private $anno;
    private $genere;

    function __construct($_titolo, $_regista, $_attori, $_anno, $_genere) 
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->attori = $_attori;
        $this->anno = $_anno;
        $this->genere = $_genere;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getRegisti() {
        return $this->regista;
    }

    public function getAttori() {
        return $this->attori;
    }
    
}