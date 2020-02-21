<?php
class Dbh {
  private $server = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbname = 'todolist';

  public function connect(){
    $dsn = "mysql:host=$this->server;dbname=$this->dbname";
    
    $pdo = new PDO($dsn,$this->user,$this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $pdo;
  }
}
 ?>
