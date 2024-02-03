<?php

class Movie {
    public $name;
    public $categories;
    public $publishDate;

    function __construct($_name, $_categories, $_publishDate){
        $this -> name = $_name;
        $this -> categories = $_categories;
        $this -> publishDate = $_publishDate;
    }

    public function getName(){
        return $this->name;
    }
}

$movie1 = new Movie ('nemo', 'animazione', '2003');
var_dump($movie1);
echo '<br>';
echo 'nome:'.$movie1 -> getName().'';

echo '<br>------------------------------------<br>';

$movie2 = new Movie ('UP', 'animazione', '2009');
var_dump($movie2);
echo '<br>';
echo 'nome:'.$movie2 -> getName().'';

echo '<br>------------------------------------<br>';