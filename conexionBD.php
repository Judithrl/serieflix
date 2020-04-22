<?php
$user= 'root';
$pass= '2asir';
$conexionBD = new PDO('mysql:host=localhost;dbname=serieflix', $user, $pass);
echo "Conexión extablecida";

?>