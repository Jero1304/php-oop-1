<!-- 
    - è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a 
    schermo i valori delle relative proprietà 
-->
<?php 
require_once "./movie.php";

$film1 = new Movie('Spiderman','super-hero',2021);
$film2 = new Movie('Harry Potter','fantasy',2005);



var_dump($film1);
var_dump($film2);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>