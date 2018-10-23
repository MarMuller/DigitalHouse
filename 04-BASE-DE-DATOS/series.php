<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'root';
$pass = 'root';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $conex = new PDO ($dsn, $user, $pass);
  $query = $conex->query('SELECT * FROM series');
  $series = $query->fetchAll(PDO::FETCH_ASSOC);

  var_dump($series);

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.'; //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

?>


<html>
	<head>
	</head>

	<body>
    <h1>Lista de series:</h1>

      <ul>

        <?php

          foreach ($series as $unaserie) {
            echo '<li><a href="serie.php?idserie='.$unaserie['id'].'">'.$unaserie['title'].'</a></li>';
          }

        ?>

      </li>

  </body>

</html>

<html>
