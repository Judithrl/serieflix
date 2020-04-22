<?php
$user= 'root';
$pass= '2asir';

try{
    $pdo = new PDO('mysql:host=localhost;dbname=serieflix', $user, $pass);
 }catch(PDOException $e){
    echo 'Error al conectarse con la base de datos: ' . $e->getMessage();
    exit;
 }

?>