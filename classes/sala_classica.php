<?php 
class Sala{
    private $nomesala;
    private $n_posti;
    


    public function __construct($_nomesala,$_n_posti){
        $this->nomesala = $_nomesala;
        $this->n_posti = $_n_posti;
        }


    public function getInfo(){
        return "{$this->nomesala} {$this->n_posti}";
        }
    }

    