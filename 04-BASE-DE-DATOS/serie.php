<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'root';
$pass = 'root';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $conex = new PDO ($dsn, $user, $pass);

  $idSerie = $_GET["idserie"];

  $query = $conex->query('SELECT * FROM series WHERE id ='.$idSerie);
  $serie = $query->fetch(PDO::FETCH_ASSOC);

  $query = $conex->query('SELECT * FROM genres WHERE id ='.$serie['genre_id']);
  $genero = $query->fetch(PDO::FETCH_ASSOC);

  var_dump($serie);

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.'; //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

?>


<html>
	<head>
	</head>

	<body>

    <?php

        echo '<h1>'.$serie['title'].'</h1><br>';
        echo '<p>'.$serie['release_date'].'</p>';
        echo '<p>'.$serie['end_date'].'</p>';
        echo '<p>'.$genero['name'].'</p>';

    ?>

  </body>

</html>

<html>
