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
    new Film("The Batman","Cinecomic","3 marzo 2022","120"),
    new Film("Joker","Cinecomic","3 ottobre 2019","140"),
    new Film("Quarto potere","Drammatico","19 gennaio 1949","130"),
    new Film("Pirati dei Caraibi - Oltre i confini del mare","Fantasy","7 maggio 2011","150"),
    new Film("Forrest Gump","Drammatico","6 ottobre 1994","140"),
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
    new Spettacolo("10-02-2022", ["10.30", "15.30","21.30"],$filmArr[0],$saleArr[0]),
    new Spettacolo("11-02-2022", ["10.30", "15.30","21.30"],$filmArr[2],$saleArr[3]),
    new Spettacolo("12-02-2022", ["10.30", "15.30","21.30"],$filmArr[3],$saleArr[2]),
    new Spettacolo("02-03-2022", ["10.30", "15.30","21.30"],$filmArr[4],$saleArr[4]),
    new Spettacolo("02-03-2022", ["10.30", "15.30","21.30"],$filmArr[4],$saleArr[4]),
];


array_push($filmArr[0]->attori,$actorArr[0]);
array_push($filmArr[1]->attori,$actorArr[1]);
array_push($filmArr[2]->attori,$actorArr[2]);
array_push($filmArr[3]->attori,$actorArr[3]);
array_push($filmArr[4]->attori,$actorArr[4]);



//1) Recupera l’elenco delle sale con relative informazioni, 
//facendo particolare attenzione alle informazioni aggiuntive 
//per le sale immersive.
echo "<h1>Es 1 </h1>  <br>";
echo "<h1>Lista delle Sale</h1>";
foreach($saleArr as $elemento){
    echo "<h3>{$elemento->getInfo()}</h3><br>";
}

//2)Recuperare la capienza totale del cinema 
//considerando tutte le sale a disposizione.
$capienza = 0;
foreach($saleArr as $elemento){
    $capienza += $elemento->getPosti();
}
echo "<h1>Es 2 </h1>  <br>";
echo "<h1>Numero posti totale delle sale:<br>$capienza</h1>";

//3)Stabilito un giorno e un film,
//recuperare quante proiezioni totali di quel film ci saranno.

for ($i=0; $i < (count($spettacoliArray[0]->getOrario())); $i++) { 
    $numeroproiezioni = $i + 1 ;
}
echo "<h1>Es 3 </h1>  <br>";
echo "<h1>Il film:"." ".$filmArr[0]->getTitolo()." "."Nel Giorno"." ".$spettacoliArray[0]->getData()." "."verrà proiettato:"." "."$numeroproiezioni"." "."Volte.</h1>";



//4)Stabilito un giorno,
// recupera l’orario di fine dell’ultimo spettacolo.
echo "<h1>Es 4 </h1>  <br>";
/* $s = $filmArr[0]->getDurata(); */
/* $duratafilm = strtotime($filmArr[0]->getDurata()); */


/* $spettacoloOdierno = null; */
/* foreach($spettacoliArray as $spettacolo){
    if ($spettacolo->getData() == $dataOggi){
        $spettacoloOdierno = $spettacolo ;
    }
    
} */





$spettacoliOdierni = array_filter($spettacoliArray,function($elemento){
    
    $dataOggi = date('d-m-Y'); 

    return $elemento->getData() == $dataOggi;
    
    /* var_dump($spettacoliOdierni); */
});


$ultimoOrario = strtotime("00:00");
foreach($spettacoliOdierni as $elemento){
        
        foreach ($elemento->getOrario() as $orario){
            if (strtotime($orario) > $ultimoOrario ){
                $ultimoOrario = strtotime($orario);
            }
        }
}

/* var_dump($spettacoliOdierni); */

/* $ultimoOrario = strtotime(max($spettacoliArray[0]->getOrario())); */

echo "<br>";
$newTime = date("H:i", strtotime("+{$filmArr[4]->getDurata()} minutes",$ultimoOrario ));


echo "La proiezione del film"." ".$filmArr[4]->getTitolo()." "."Termina alle ore:"." ".$newTime;






/* $tempoFilm = date("i", strtotime($filmArr[0]->getDurata())); */
/* echo "<br>";
/* echo date('h:i:sa', $duratafilm); */
/* $s = '120'; */
/* $date = strtotime($s);
echo date('d/M/Y H:i:s', $date);
echo "<br>"; */
/* $sommadurate = strtotime($duratafilm) + strtotime($dataoggi);
echo date('h:i:sa',$sommadurate);
echo "<br>";
echo "durata film"." ".$filmArr[0]->getDurata()." "."Minuti";  */

/* echo "<h1>L'ultimo spettacolo del giorno:"." ".$spettacoliArray[0]->getData()." "."è alle ore"." ".end($spettacoliArray[0]->getOrario()); */


