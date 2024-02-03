<?php

class Categories {
    public $cat1;
    public $cat2;

    function __construct($_cat1, $_cat2){
        $this -> cat1 = $_cat1;
        $this -> cat2 = $_cat2;
    }
}

class Movie {
    public $name;
    public $categories;
    public $publishDate;

    function __construct($_name, Categories $_categories, $_publishDate){
        $this -> name = $_name;
        $this -> categories = $_categories;
        $this -> publishDate = $_publishDate;
    }

    public function getName(){
        return $this->name;
    }
}

$categories1 = new Categories ('animazione', 'fantasy');
$categories2 = new Categories ('animazione', 'avventura');

$movie1 = new Movie ('nemo', $categories1, '2003');
var_dump($movie1);
echo '<br>';
echo 'nome:'.$movie1 -> getName().'';

echo '<br>------------------------------------<br>';

$movie2 = new Movie ('UP', $categories2, '2009');
var_dump($movie2);
echo '<br>';
echo 'nome:'.$movie2 -> getName().'';

echo '<br>------------------------------------<br>';