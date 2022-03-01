<?php 
class Sala{
    protected $nomesala;
    protected $n_posti;
    


    public function __construct($_nomesala,$_n_posti){
        $this->nomesala = $_nomesala;
        $this->n_posti = $_n_posti;
        }


    public function getInfo(){
        return "Nome sala:{$this->nomesala} <br> Capienza Sala:{$this->n_posti}";
        }

        public function getPosti(){
            return $this->n_posti;
            }
    }

    