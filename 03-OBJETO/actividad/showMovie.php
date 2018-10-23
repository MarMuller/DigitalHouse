<?php
include ('autoload.php');


$titanic = new Movie('Titanic', 5, '3 de Febrero,1990');
var_dump($titanic);

$titanic->changeTitle('La MULTE');
var_dump($titanic);
$titanic->writeTitle();



$avatar = new Movie('Avatar', 3, '24 de Marzo, 2005');
var_dump($avatar);

$avatar->changeTitle('Pelicula de MELDA');
var_dump($avatar);
$avatar->writeTitle();



$infinitywar = new Movie('Infinity War', 5, '28 de Agosto, 2016');
var_dump($infinitywar);

$infinitywar->changeTitle('La Mejor Peli del Mundo');
var_dump($infinitywar);
$infinitywar->writeTitle();


?>
