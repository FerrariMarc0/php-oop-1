<?php
include __DIR__.'/Models/Movie.php';

$movies= [
    new Movie('Paulo Roberto Cotechiño centravanti di sfondamento', 'Nando Cicero', 1983, $genre),
    new Movie('Fracchia la belva umana', 'Neri Parenti', 1981, $genre),
    new Movie('The imitation game', 'Morten Tyldum', 2014, $genre)
];
var_dump($movie1, $movie2, $movie3);
    echo $movie1->getTitle();