<?php

class Usuario {
  private $id;
  private $nombre;
  private $nacimiento;
  private $email;
  private $username;
  private $password;

  public function __construct( $id, $nombre, $nacimiento, $email, $username, $password ) {
    $this->id =  $idUser;
    $this->nombre =  $nameUser;
    $this->nacimiento =  $birthUser;
    $this->email =  $emailUser;
    $this->username =  $nickUser;
    $this->password =  $passUser;
  }

  public function setName( $nameUser ) {
    $this->nombre =  $nameUser;
  }

  public function getName( $nameUser ) {
    
  }


}
