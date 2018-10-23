<?php

  session_start();

  //var_dump($_GET);

  if (isset($_GET['incremento'])) {
    $_SESSION['contador'] = $_SESSION['contador']+1;
  } else if (isset($_GET['reinicio'])) {
    $_SESSION['contador'] = 0;
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PRUEBA</title>
  </head>
  <body>

    <form action="modificar.php" method="get">


      <button type="submit" name="reinicio">Reiniciar</button>

      <button type="submit" name="incremento">Incrementar</button>


    </form>

  </body>
</html>

<?php

  echo '<br>Contador: '.$_SESSION['contador'];

?>
