<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getInfoFilm()
    {
        return $this->title . " " . $this->genre;
    }
}

$film1 = new Movie("The Hangover", "Comedy", "Year");
//$film1->title = "The Hangover";
//$film1->genre = "Comedy";
//$film1->year = "2009";

$film2 = new Movie("The Pursuit of Happyness", "Drammatic", "2006");
//$film2->title = "The Pursuit of Happyness";
//$film2->genre = "Drammatic";
//$film2->year = "2006";


echo $film1->getInfoFilm();
echo "<br>";
echo $film2->getInfoFilm();
