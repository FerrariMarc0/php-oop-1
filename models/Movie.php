<?php

/**
 * Movie
 */
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
    
    public function __construct(string $_title, string $_director, int $_year){
        $this->title= $_title;
        $this->director= $_director;
        $this->year= $_year;
    }
    
} 