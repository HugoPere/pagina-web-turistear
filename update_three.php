<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $modelo=$_GET[id_modelo];
    
    $id_qr=$_GET[id];
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = "UPDATE QR_CODES SET id_modelo = '$modelo' where id = '$id_qr'";

    if ($mysqli->query($query) === TRUE) {
        
        header("Location: menu.html");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
?>