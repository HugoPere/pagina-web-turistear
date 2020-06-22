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

            $img = $valores[id_img];
            $query = $mysqli -> query('SELECT * FROM INFO_IMAGENES where id ="'.$img.'"');
            while ($valores = mysqli_fetch_array($query)) {
                $ruta = $valores[unique_name];
                $array = array(
                    "Ruta" => $ruta
                );
            }
        };
    $result = json_encode($array);
    header("Location: ../pictures/$ruta");
    echo $result;
?>