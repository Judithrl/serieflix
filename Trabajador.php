<?php 
   include_once 'conexionBD.php';
  
   
 class Trabajador { 
    private $COD_TRABAJADOR;
    private $dni;
    public $nombreCompleto;
    private $correo;
    public $telefono;
    private $genero;
    private $oficina;
   /* public function __construct($COD_TRABAJADOR, $dni, $nombreCompleto, $correo, $telefono, $genero, $oficina) {
       $this->COD_TRABAJADOR = $COD_TRABAJADOR;
       $this->dni = $dni;
       $this->nombreCompleto= $nombreCompleto;
       $this->correo = $correo;
       $this->telefono = $telefono;
       $this->genero = $genero;
       $this->oficina = $oficina;
    } */

   public function getCOD_TRABAJADOR(){
   return $this->COD_TRABAJADOR;
   }
   public function getDni(){
   return $this->dni;
   }
   public function getNombreCompleto(){
   return $this->nombreCompleto;
   }
   public function getCorreo(){
   return $this->correo;
   }
   public function getTelefono(){
   return $this->telefono;
   }
   public function getGenero(){
   return $this->genero;
   }
   public function getOficina(){
   return $this->oficina;
   }

   public function setCOD_TRABAJADOR($COD_TRABAJADOR){
   $this->COD_TRABAJADOR = $COD_TRABAJADOR;
   }
   public function setDni($dni){
   $this->dni = $dni;
   }
   public function setNombreCompleto($nombreCompleto){
   $this->nombreCompleto = $nombreCompleto;
   }
   public function setCorreo($correo){
   $this->correo = $correo;
   }
   public function setTelefono($telefono){
   $this->telefono = $telefono;
   }
   public function setGenero($genero){
   $this->genero = $genero;
   }
   public function setOficina($oficina){
   $this->oficina = $oficina;
   }

   public function agregar3(){
      try {
         $con = (new Conexion())->Conectar();
         $sql = $con->prepare("insert into trabajador "
                           .  "(COD_TRABAJADOR, dni, nombreCompleto, correo, telefono, genero, oficina) "
                           .  "values (:COD_TRABAJADOR, :dni, :nombreCompleto, :correo, :telefono, :genero, :oficina);");
         $sql->bindParam(":COD_TRABAJADOR", $this->COD_TRABAJADOR);
         $sql->bindParam(":dni", $this->dni);
         $sql->bindParam(":nombreCompleto", $this->nombreCompleto);
         $sql->bindParam(":correo", $this->correo);
         $sql->bindParam(":telefono", $this->telefono);
         $sql->bindParam(":genero", $this->genero);
         $sql->bindParam(":oficina", $this->oficina);
         $res = $sql->execute();
         return $res;

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   }

  /* public function modificar(){
      try {
         $con =(new Conexion())->Conectar();
         $sql = $con->prepare("update trabajador set nombreCompleto=:nombreCompleto, correo=:correo, telefono=:telefono, genero=:genero, oficina=:oficina where COD_TRABAJADOR=:COD_TRABAJADOR");
         $sql->bindParam(":COD_TRABAJADOR", $this->COD_TRABAJADOR);
         $sql->bindParam(":dni", $this->dni);
         $sql->bindParam(":nombreCompleto", $this->nombreCompleto);
         $sql->bindParam(":correo", $this->correo);
         $sql->bindParam(":telefono", $this->telefono);
         $sql->bindParam(":genero", $this->genero);
         $sql->bindParam(":oficina", $this->oficina);
         $sql->execute();
         if ($sql->rowCount() == 1){
            return true;
         } else {
            return false;
         }
      } catch (PDOException $e) {
         return $e->getMessage();
      }
   } */

  /* public function eliminar($COD_TRABAJADOR){
      try {
         $con = (new Conexion())->Conectar();
         $sql = $con->prepare("delete from trabajador where COD_TRABAJADOR=:COD_TRABAJADOR");
         
         $sql->bindParam(":COD_TRABAJADOR", $COD_TRABAJADOR);
         $res = $sql->execute();
         return $res;

      } catch (PDOException $e) {
         return $e->getMessage();
      }
   } */
 }
?>