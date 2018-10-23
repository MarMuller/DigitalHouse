<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'root';
$pass = 'root';

try {
  $conex = new PDO ($dsn, $user, $pass);
} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.<br>'; //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

var_dump($conex);
