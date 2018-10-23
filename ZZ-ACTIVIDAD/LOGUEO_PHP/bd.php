<?php

class BD {
  private $usuarioBD = 'root';
  private $contraBD = 'root';
  private $dominioBD = 'mysql:host=localhost;dbname=hola';
  private $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
  private $conex;

  public function __construct( ) {
    $this->conex = new PDO($this->dominioBD, $this->usuarioBD, $this->contraBD, $this->opt);
  }

  public function consultUser( $user, $pass) {
    $sql = 'SELECT * FROM users WHERE user = :user AND pass = :pass';

    $stmt = $this->conex->prepare($sql);
    $stmt->bindValue(':user', $usuario);
    $stmt->bindValue(':pass', $pass);
    $stmt->execute();

    $datos = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($datos);
  }

  public function saveUser () {
    $conex= new PDO($this->dominioBD, $this->usuarioBD, $this->contraBD, $this->opt);
  }

}

$bd = new BD();

/*
$bd = consultUser('marina', '123');
$bd = saveUser();
*/

/*

$this es para llaamr atributos mios

1) new PDO();

2) prepare ('');
3) bindValue ();
4) execute();

4) fetch();


*/
