<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";

    $mysqli = new mysqli($server, $usuario, $pass, $database);

    
    $qr= $_GET['qr_id'];
    $nombre= $_GET['nombre'];
    echo $qr;
    echo $nombre;
    $query = $mysqli -> query ("INSERT INTO INFORMACION_EVENTOS (id,titulo, informacion,lugar,id_qr) VALUES (NULL,'no_name','no_text','$nombre','$qr'), (NULL,'no_name','no_text','$nombre','$qr')");
    //header("Location: index.php");
    
?>