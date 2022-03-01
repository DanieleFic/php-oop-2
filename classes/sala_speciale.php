<?php
require_once __DIR__. "./sala_classica.php";

class SalaSpeciale extends Sala{

    private $effetti;

    public function __construct($_nomesala,$_n_posti, $_effetti){
        

        parent::__construct($_nomesala,$_n_posti);

            $this->effetti = $_effetti;
        
    }

    public function getInfo(){
        return "Nome sala:{$this->nomesala} Capienza Sala:{$this->n_posti} Effetti Sala:".implode(",",$this->effetti);
    }
}

