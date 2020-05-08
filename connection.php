<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $usuario, $pass);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


?>