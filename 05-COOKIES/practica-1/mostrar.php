<?php


  var_dump($_GET);

  session_start();

  if (isset($_GET['incremento'])) {
    $_SESSION['contador'] = $_SESSION['contador']+1;
  } else if (isset($_GET['reinicio'])) {
    $_SESSION['contador'] = 0;
  }

  echo $_SESSION['contador'];


  // $_SESSION['contador'] = 10;

?>
