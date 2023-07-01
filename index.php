<?php

class Copyright
{
    public $label;
    public $filmProducer;
    public $musicProducer;

    public function __construct($label, $filmProducer, $musicProducer,)
    {
        $this->label = $label;
        $this->filmProducer = $filmProducer;
        $this->musicProducer = $musicProducer;
    }
}
class Movie
{
    public $title;
    public $genre;
    public $year;

    public Copyright $copyright;

    public function __construct($title, $genre, $year, Copyright $copyright)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;

        $this->copyright = $copyright;
    }

    public function getInfoFilm()
    {
        return $this->title . " Genre: " . $this->genre . " Year: " . $this->year;
    }
}
$copyright1 = new Copyright("Sony", "Dave Knud", "Dave Knud");
$copyright2 = new Copyright("Medusa", "Erbert", "Ballerina");

$film1 = new Movie("The Hangover", "Comedy", "2009", $copyright1);

//$film1->title = "The Hangover";
//$film1->genre = "Comedy";
//$film1->year = "2009";

$film2 = new Movie("The Pursuit of Happyness", "Drammatic", "2006", $copyright2);
//$film2->title = "The Pursuit of Happyness";
//$film2->genre = "Drammatic";
//$film2->year = "2006";


echo $film1->getInfoFilm() . " Label:" . $film1->copyright->label,  " Film Producer:" . $film1->copyright->filmProducer;
echo "<br>";
echo $film2->getInfoFilm() . " Label:" . $film2->copyright->label,  " Film Producer:" . $film2->copyright->filmProducer;
