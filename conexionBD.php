<?php

class Conexion {
   public $host = "localhost";
   public $dbname = "serieflix";
   public $user = "root";
   public $pass = "2asir";

   public function Conectar() {
      try {
         $connection = "mysql:host=$this->host;dbname=$this->dbname";
         $user = $this->user;
         $pass = $this->pass;
         $options = array (
            PDO::MYSQL_ATTR_LOCAL_INFILE => 1,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
         
         $pdo = new PDO($connection, $user, $pass, $options);
         return $pdo;
      } catch (PDOException $e) {
         print_r("Error connection: " . $e->getMessage());
      }
   }
   
}


?>