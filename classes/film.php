<?php

class Film{
    private $titolo;
    private $genere;
    private $datauscita;
    private $attori = [];


    public function __construct($_titolo,$_genere,$_datauscita){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->datauscita = $_datauscita;
    }

    /* public function getTitolo(){
        return $this->titolo;
    }

    public function setTitolo($_titolo){
        $this->nome = $_titolo;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function setGenere($_genere){
        $this->genere = $_genere;
    }

    public function getDataUscita(){
        return $this->datauscita;
    }

    public function setDataUscita($_datauscita){
        $this->datauscita = $_datauscita;
    }
     */

}