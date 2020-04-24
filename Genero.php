<?php 

include_once 'conexionBD.php';

/*class Validador {
   const CODIGO_GEN = 1000; 
   public function __construct() {
      //Constructor vacío.
   }
   public function comprobarAcceso($COD_GENERO){
      if($COD_GENERO< self::CODIGO_GEN){
         return false;
      }else{
         return true;
      }
   } 
}*/

 class Genero { 
    private $COD_GENERO;
    private $genero;
    public $descripcion;
    public function __construct($COD_GENERO, $genero, $descripcion) {
       $this->COD_GENERO = $COD_GENERO;
       $this->genero = $genero;
       $this->descripcion = $descripcion;
    }

   public function get_COD_GENERO(){
   return $this->COD_GENERO;
   }
   public function get_genero(){
   return $this->genero;
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

   #mal cambiar con fetch class
 /*  public function buscar($genero){
      try {
         $con = (new Conexion())->Conectar();
         $sql = $con->prepare("select * from genero where genero=:genero");
         $sql->bindParam(":genero", $genero);
         $sql->execute();
         $res=$sql->fetch();
         return $res;

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   } */
   public function buscar($genero){
      try {
         $con = (new Conexion())->Conectar();
         $sql = $con->prepare("select * from genero where genero=:genero");
         
         
         $sql->setFetchMode(PDO::FETCH_CLASS, 'Genero');
         $busc_gen = $sql->fetch();
         $busc_gen->buscar();
         $sql->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Genero');
         $busc_gen = $sql->fetch();
         $busc_gen->buscar();

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   }

}



?>