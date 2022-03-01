<?php 
class Spettacolo{
    private $data;
    private $orario = [];
    private $film;
    private $sala;
    


    public function __construct($_data,$_orario,$_film,$_sala){
        $this->data = $_data;
        $this->orario = $_orario;
        $this->film = $_film;
        $this->sala = $_sala;
        }

        public function getOrario(){
            return $this->orario;
        }
        public function getData(){
            return $this->data;
        }
    }