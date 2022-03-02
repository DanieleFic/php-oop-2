<?php
require_once __DIR__. "./attori.php";
class Film{
    private $titolo;
    private $genere;
    private $datauscita;
    private $durata;
    public $attori = [];


    public function __construct($_titolo,$_genere,$_datauscita,$_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->datauscita = $_datauscita;
        $this->durata = $_durata;
    }

    public function getTitolo(){
        return $this->titolo;
    }
    public function getDurata(){
        return $this->durata;
    }


    

    /* public function setTitolo($_titolo){
        $this->nome = $_titolo;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function setGenere($_genere){
        $this->genere = $_genere;
    }

    

    public function setDataUscita($_datauscita){
        $this->datauscita = $_datauscita;
    }
     */

}

