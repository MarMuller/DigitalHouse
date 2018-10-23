<?php

require_once('bd.php');

class Autenticacion {
  private $bd;

  public function __construct( ) {
    $this->bd =  new BD();
  }

  public function logUser( $userBD, $passBD ) {
    $this->bd->consultUser($userBD, $passBD);
  }

}

$auth = new Autenticacion();
var_dump($auth);
