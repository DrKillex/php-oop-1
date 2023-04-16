<?php
// creo 3 oggetti film dalla classe film
$film1 = new film('film1', '1492', ['genere1']);
$film2 = new film('film2', '2020', ['genere1', 'genere2', 'genere3']);
$film3 = new film('film3', '1', ['genere1', 'genere2']);
// modifico parametro anno di film3 con una funzione
$film3->setAnno();
// lista dei film
$film_list = [$film1, $film2, $film3];
// var_dump($film_list)

?>