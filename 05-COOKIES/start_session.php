
<?php

  session_start();

  $_SESSION['color'] = 'Verde';

  var_dump($_SESSION);

?>

<a href="cerrar_session.php">Cerrar sesión</a>
