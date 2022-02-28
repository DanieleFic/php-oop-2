<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once __DIR__. "./classes/sala_classica.php";
require_once __DIR__. "./classes/sala_speciale.php";
require_once __DIR__. "./classes/film.php";
require_once __DIR__. "./classes/spettacolo.php";


$filmArr = [
    new Film("The Batman","Cinecomic","3 marzo 2022"),
    new Film("Joker","Cinecomic","3 ottobre 2019"),
]; 

$actorArr = [
    new Attori("mario","Rossi","3 gennaio 2022"),
    new Attori("stefano","Marino","31 ottobre 2019"),
];  

/* $filmArr[0]->attori[] = $actorArr[0]; */

array_push($filmArr[0]->attori,$actorArr[0]);

/* 
    $film1 =  new Film("The Batman","Cinecomic","3 marzo 2022");
    $film2 =  new Film("Joker","Cinecomic","3 ottobre 2019"); 
*/

/* $saleArr = [
    new Sala("Sala Azzurra","50"),
    new Sala("Sala Rossa","50"),
];  */


var_dump($filmArr);

