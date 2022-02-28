<?php
require_once __DIR__. "./classes/sala_classica.php";
require_once __DIR__. "./classes/sala_speciale.php";
require_once __DIR__. "./classes/film.php";
require_once __DIR__. "./classes/spettacolo.php";

$filmArr = [
    new Film("The Batman","Cinecomic","3 marzo 2022"),
    new Film("Joker","Cinecomic","3 ottobre 2019"),
]; 

/* 
    $film1 =  new Film("The Batman","Cinecomic","3 marzo 2022");
    $film2 =  new Film("Joker","Cinecomic","3 ottobre 2019"); 
*/

/* $saleArr = [
    new Sala("Sala Azzurra","50"),
    new Sala("Sala Rossa","50"),
];  */


var_dump($filmArr);
