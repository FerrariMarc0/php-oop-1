<?php
class Movie {
    public $title;
    public $director;
    public $year;

    private function setUpper($string){
        return strtoupper($string);
    }
    public function getTitle(){
        return $this->setUpper($this->title);
    }

    public function __construct($_title){
        $this->title= $_title;
    }
}

$movie1= new Movie('Paulo Roberto Cotechiño centravanti di sfondamento');
$movie2= new Movie('Fracchia la belva umana');

/* $movie1->title= 'Paulo Roberto Cotechiño centravanti di sfondamento';
$movie1->director= 'Nando Cicero';
$movie1->year= 1983;

$movie2->title= 'Fracchia la belva umana';
$movie2->director= 'Neri Parenti';
$movie2->year= 1981; */

var_dump($movie1, $movie2);
echo $movie1->getTitle();