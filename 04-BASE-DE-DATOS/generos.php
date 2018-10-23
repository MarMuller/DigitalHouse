<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'root';
$pass = 'root';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $conex = new PDO ($dsn, $user, $pass);
  $query = $conex->query('SELECT name FROM genres'); //
  $generos = $query->fetchAll(PDO::FETCH_ASSOC);

  var_dump($generos);

  echo $generos[5]['name'].'<br>';

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.'; //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

?>

<html>
	<head>
	</head>

	<body>
    <h1>Lista de generos:</h1>
    <p>

    <?php

      foreach ($generos as $gen) {
        echo $gen['name'].'<br>';
      }

    ?>

    </p>
  </body>

</html>

<html>
