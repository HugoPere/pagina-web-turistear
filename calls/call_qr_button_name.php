<?php 

    $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    $id_qr = $_GET["id"];
    $position = $_GET["position"];
    
    $query = $mysqli -> query('SELECT * FROM INFORMACION_EVENTOS where id_qr ="'.$id_qr.'" and posicion ="'.$position.'"');
    
    while ($valores = mysqli_fetch_array($query)) {
            
            $nombre_boton = $valores["titulo"];

            $array = array(
    	        "Titulo" => $nombre_boton
            );
        };

    $result = json_encode($array);
    echo $result;
?>