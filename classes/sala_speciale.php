<?php
require_once __DIR__. "./sala_classica.php";

class Speciale extends Sala{

    private $effetti;

    public function __construct($_nomesala,$_n_posti){
        

        parent::__construct($_nomesala,$_n_posti);

            $this->effetti = $_effetti;
        
    }



}