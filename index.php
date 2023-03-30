<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors", '1');

//autoload

//Contract in contracts folder

//Template in templates folder

//Taking path 

define("Path", realpath("."));
// $path = str_replace("\\", "/", DD);
// var_dump($path);
// define("Path", $path);
var_dump(Path);
echo "<br>";
require Path."/autoload.php";

// include("C:/xampp/htdocs/MyAutoload/contracts/AnimalInterface.php");



// require Path."/contracts/AnimalInterface.php";
// require Path."/contracts/DogInterface.php";
// require Path."/contracts/CatInterface.php";
// require Path."/templates/Animal.php";
// require Path."/templates/Dog.php";
// require Path."/templates/Cat.php";
//Implementation
$dog = new Dog();
$dog->bark();
$cat = new Cat();
$cat->meow();


?>