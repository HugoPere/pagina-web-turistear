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
            
            $titulo = $valores["titulo"];
            $descripcion = $valores["informacion"];
            
            $array = array(
    	        "Titulo" => $titulo,
                "Texto" => $descripcion
            );
        };
    $result = json_encode($array);
    echo $result;
?>