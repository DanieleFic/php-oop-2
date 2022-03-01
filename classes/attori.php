<?php

class Attore{
    private $nome;
    private $cognome;
    private $datadinascita;
    


    public function __construct($_nome,$_cognome,$_datadinascita){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->datadinascita = $_datadinascita;
    }


}