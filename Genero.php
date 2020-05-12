<?php 

include_once 'conexionBD.php';

 class Genero { 
    private $COD_GENERO;
    private $genero;
    public $descripcion;
   
   public function getCOD_GENERO(){
   return $this->COD_GENERO;
   }
   public function getGenero(){
   return $this->genero;
   }

   public function getDescripcion(){
   return $this->descripcion;
   }

   public function setCOD_GENERO($COD_GENERO) {
      $this->COD_GENERO = $COD_GENERO;
   }

   public function setGenero($genero){
   $this->genero = $genero;
   }

   public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
      }

    public function agregar(){
      try {
         $con = (new Conexion())->Conectar();
         $sql = $con->prepare("insert into genero "
                           .  "(COD_GENERO, genero, descripcion) "
                           .  "values (:COD_GENERO, :genero, :descripcion);");
         $sql->bindParam(":COD_GENERO", $this->COD_GENERO);
         $sql->bindParam(":genero", $this->genero);
         $sql->bindParam(":descripcion", $this->descripcion);
         $res = $sql->execute();
         return $res;

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   }

   public static function fechahora(){
      echo date('l jS \of F Y h:i A');  
   }
 }


?>