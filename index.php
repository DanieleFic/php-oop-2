<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once __DIR__. "./classes/sala_classica.php";
require_once __DIR__. "./classes/sala_speciale.php";
require_once __DIR__. "./classes/film.php";
require_once __DIR__. "./classes/spettacolo.php";


$saleArr = [
    new Sala("Sala Azzurra", 50),
    new Sala("Sala Rossa", 50),
    new Sala("Sala Gialla",45),
    new SalaSpeciale("Sala Nera",45,["fumo","vibro","getto d'acqua"]),
    new SalaSpeciale("Sala Blu",45,["fumo","vibro","getto d'acqua"]),
];  


/* echo $tot_posti; */

/* var_dump("ciao",array_sum($saleArr)); */

$filmArr = [
    new Film("The Batman","Cinecomic","3 marzo 2022"),
    new Film("Joker","Cinecomic","3 ottobre 2019"),
    new Film("Quarto potere","Drammatico","19 gennaio 1949"),
    new Film("Pirati dei Caraibi - Oltre i confini del mare","Fantasy","7 maggio 2011"),
    new Film("Forrest Gump","Drammatico","6 ottobre 1994"),
]; 


$actorArr = [
    new Attore("mario","Rossi","3 gennaio 2022"),
    new Attore("stefano","Marino","31 ottobre 2019"),
    new Attore("Leonardo","DiCaprio","11 novembre 1974"),
    new Attore(" James","Pacino","25 aprile 1940"),
    new Attore("Thomas Jeffrey","Hanks","9 luglio 1956"),
    new Attore("Tom","Cruise","3 luglio 1962"),
];  

$spettacoliArray = [
    new Spettacolo("10-02-2022", "21.30",$filmArr[0],$saleArr[0]),
    new Spettacolo("10-02-2022", "21.30",$filmArr[2],$saleArr[3]),
    new Spettacolo("10-02-2022", "21.30",$filmArr[3],$saleArr[2]),
    new Spettacolo("10-02-2022", "21.30",$filmArr[4],$saleArr[4]),
];


array_push($filmArr[0]->attori,$actorArr[0]);
array_push($filmArr[1]->attori,$actorArr[1]);
array_push($filmArr[2]->attori,$actorArr[2]);
array_push($filmArr[3]->attori,$actorArr[3]);
array_push($filmArr[4]->attori,$actorArr[4]);



//1) Recupera l’elenco delle sale con relative informazioni, 
//facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
foreach($saleArr as $elemento){
    echo "<h3>{$elemento->getInfo()}</h3><br>";
}

//2)Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
$capienza = 0;
foreach($saleArr as $elemento){
    $capienza += $elemento->getPosti();
}
echo "<h1>Numero posti totale delle sale :$capienza</h1>";

