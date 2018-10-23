Base de datos (clase 3)

#db = new PDO(host(servidor)=,dbname(nombre de base de datos)=,port=3306);


Cerrar un sesión:

$db = null; // Aunque no es necesario

if() {} else {}

try {(esto)} catch (parámetro) {(si no podes... agarrá)}

try {#db = new PDO(host=asdasd,dbname=asdasd,port=3306);}
catch (PDOExceptio $Exception) {echo $Exception->getMessage();};

Para Conectar:

$dsn = 'mysql:host=localghost;dbname=movie_db';
$user = 'juancarlos';
$pass = '12345';

$conex = new PDO ($dsn, $user, $pass);

var_dump($conex);

Con condicional sería:

$dsn = 'mysql:host=localghost;dbname=movie_db';
$user = 'juancarlos';
$pass = '12345';

try {
  $conex = new PDO ($dsn, $user, $pass);
} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.' //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

var_dump($conex);

Si quiero que siga reproduciendo el código a pesar del error fatal, hay que usar try y catch.
Sino el error fatal va a interrumpir el proceso hasta dodne esté aquel error.

------------------------------------

OBTENER DATOS:
1) Ejecutamos > 2) Obtener los datosde la sentencia

$query = $db->query('SELECT*from movies'); //devuelve otro objeto PDOStatemente

$results = $query->fetchAll(PDO::FETCH_ASSOC);

------------------------------------


$dsn = 'mysql:host=localghost;dbname=movie_db';
$user = 'juancarlos';
$pass = '12345';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            (constante de clase)  (constante de clase)

try {
  $conex = new PDO ($dsn, $user, $pass);
  $query = $conex->query('SELECT * FROM movies');
  $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
                                    (constante de clase)

  var_dump($peliculas); //Mostrar datos de todas la peliculas.
  var_dump($peliculas[0]); //Mostrar datos de la primera pelicula.
  var_dump($peliculas[0]['title']); //Mostrar el contenido de la casilla 'title' de la primera pelicula.
  //var_dump($query);
  // var_dump($conex);

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.' //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

------------------------------------

Para MySQL: SELECT * FROM movies WHERE title = "title"');

$dsn = 'mysql:host=localghost;dbname=movie_db';
$user = 'juancarlos';
$pass = '12345';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $conex = new PDO ($dsn, $user, $pass);
  $query = $conex->query('SELECT * FROM movies WHERE title = "titanic"'); // si hay dos titanic muestra sol oel primero.
  $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);

  var_dump($peliculas); //Mostrar datos de todas la peliculas.
  var_dump($peliculas[0]); //Mostrar datos de la primera pelicula.
  var_dump($peliculas[0]['title']); //Mostrar el contenido de la casilla 'title' de la primera pelicula.
  //var_dump($query);
  // var_dump($conex);

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.' //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}


------------------------------------

GENERAR LISTADO DE PELICULAS

Para MySQL: SELECT * FROM movies WHERE title = "title"');

$dsn = 'mysql:host=localghost;dbname=movie_db';
$user = 'juancarlos';
$pass = '12345';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $conex = new PDO ($dsn, $user, $pass);
  $query = $conex->query('SELECT * FROM movies WHERE title = "titanic"'); // si hay dos titanic muestra sol oel primero.
  $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);

  var_dump($peliculas); //Mostrar datos de todas la peliculas.
  var_dump($peliculas[0]); //Mostrar datos de la primera pelicula.
  var_dump($peliculas[0]['title']); //Mostrar el contenido de la casilla 'title' de la primera pelicula.
  //var_dump($query);
  // var_dump($conex);

} catch (PDOException $ex) {
  echo 'Error: Contactar al admin del servidor.' //Mensaje para el usuario.
  echo 'El error es: '. $ex->getMessage();
}

foreach ($peliculas as $peli) {
  echo $peli['title'].'<br>';
}

------------------------------------

OBTENER CANTIDAD

fetch
fetchAll
rowCount(); // te dice la cantidad de peliculas q hay .
