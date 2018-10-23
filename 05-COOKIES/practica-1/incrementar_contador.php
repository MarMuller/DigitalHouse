<?php

  session_start();

  $_SESSION['contador'] = $_SESSION['contador']+1 ;

  var_dump($_SESSION);

?>
