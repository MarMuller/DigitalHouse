<?php

  session_start();

  //var_dump($_GET);

  if (isset($_GET['color'])) {

    if ($_GET['color'] == 'red') {
      $color = 'red';
    } else if ($_GET['color'] == 'green') {
      $color = 'green';
    } else if ($_GET['color'] == 'blue') {
      $color = 'blue';
    }

  }

  var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COLOR</title>

  </head>

  <body>

    <style>
      body {
        background-color: <?php echo $color ?>;
      }
    </style>

    <form action="colores.php" method="get">
      <input type="radio" name="color" value="red" /> RED
      <input type="radio" name="color" value="green" /> GREEN
      <input type="radio" name="color" value="blue" /> BLUE

      <button type="submit">CAMBIAR</button>
    </form>


  </body>

</html>
