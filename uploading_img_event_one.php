<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";

    $mysqli = new mysqli($server, $usuario, $pass, $database);

    
    $qr= $_GET['qr_id'];
    $nombre= $_GET['nombre'];
    
    $query = $mysqli -> query ("INSERT INTO INFORMACION_EVENTOS (id,titulo, informacion,lugar,id_qr, posicion) VALUES (NULL,'no_name','no_text','$nombre','$qr', 1), (NULL,'no_name','no_text','$nombre','$qr', 2)");
    header("Location: menu.html");
?>