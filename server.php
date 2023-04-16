<?php
require_once __DIR__.'/models/ClassFilm.php';

$film1 = new film('film1', '1492', ['genere1']);
$film2 = new film('film2', '2020', ['genere1', 'genere2', 'genere3']);
$film3 = new film('film3', '1', ['genere1', 'genere2']);
$film3->setAnno();

$film_list = [$film1, $film2, $film3];
// var_dump($film_list)

?>