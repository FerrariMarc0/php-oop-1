<?php
include __DIR__.'/models/Movie.php';

$movie1= new Movie('Paulo Roberto Cotechiño centravanti di sfondamento', 'Nando Cicero', 1983, $genre);
$movie2= new Movie('Fracchia la belva umana', 'Neri Parenti', 1981, $genre);
$movie3= new Movie('The imitation game', 'Morten Tyldum', 2014, $genre);
/* $movie1->title= 'Paulo Roberto Cotechiño centravanti di sfondamento';
$movie1->director= 'Nando Cicero';
$movie1->year= 1983;

$movie2->title= 'Fracchia la belva umana';
$movie2->director= 'Neri Parenti';
$movie2->year= 1981; */
var_dump($movie1, $movie2, $movie3);
echo $movie1->getTitle();