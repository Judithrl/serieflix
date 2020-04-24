<?php

class Conexion {
   private $host;
   private $dbname;
   private $user;
   private $pass;

   public function __construct(){
      $this->host = 'localhost';
      $this->dbname = 'serieflix';
      $this->$user = 'root';
      $this->$pass = '2asir';
   }

   public function Conectar() {
      try {
         $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
         
         $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                     PDO::ATTR_EMULATE_PREPARES => false];
         
                     $pdo = new PDO($connection, $this ->user, $this->pass, $options);

      } catch (PDOException $e) {
         print_r("Error connection: " . $e->getMessage());
      }
   }
   
}


?>