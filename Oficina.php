<?php 
include_once 'ConexionBD.php';

class Oficina { 
private $COD_OFICINA;
private $jefe;
private $planta;
private $numOficina;
public $amueblado;

public function getCOD_OFICINA(){
return $this->COD_OFICINA;
}
public function getJefe(){
return $this->jefe;
}
public function getPlanta(){
return $this->planta;
}
public function getNumOficina(){
return $this->numOficina;
}

public function getAmueblado(){
return $this->amueblado;
}

public function setCOD_OFICINA($COD_OFICINA){
   $this->COD_OFICINA = $COD_OFICINA;
}

public function setJefe($jefe){
   $this->jefe = $jefe;
}

public function setPlanta($planta){
   $this->planta = $planta;
}

public function setNumOficina($numOficina){
   $this->numOficina = $numOficina;
}
public function setAmueblado($amueblado){
   $this->amueblado = $amueblado;
}


      public function agregar2(){
      try {
         $con = (new Conexion())->Conectar();
         
         $sql = $con->prepare("insert into oficina "
                           .  "(COD_OFICINA, jefe, planta, numOficina, amueblado) "
                           .  "values (:COD_OFICINA, :jefe, :planta, :numOficina, :amueblado);");
         $sql->bindParam(":COD_OFICINA", $this->COD_OFICINA);
         $sql->bindParam(":jefe", $this->jefe);
         $sql->bindParam(":planta", $this->planta);
         $sql->bindParam(":numOficina", $this->numOficina);
         $sql->bindParam(":amueblado", $amueblado);
         if(isset($_REQUEST['enviar']))
         { 
             if(isset( $_REQUEST['amueblado']))
             {  
                 $amueblado=implode(",",$_REQUEST["amueblado"]);
             }
             $res = $sql->execute();
         } else {
            $res = $sql->execute();
         }
         
         return $res;

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   }

   public static $check = "Puede insertar varios o ningún amueblado";

   public static function checkbox(){
      echo "Aclaración: " . self::$check ;
   }
}

?>