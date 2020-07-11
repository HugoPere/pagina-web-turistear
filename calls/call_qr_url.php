<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);

    $id_qr = $_GET["id"];
    $query = $mysqli -> query('SELECT * FROM QR_CODES where id ="'.$id_qr.'"');
            while ($valores = mysqli_fetch_array($query)) {
                $ruta = $valores[url_local];
                
                $array = array(
                    "Ruta" => $ruta
                );
            };
        
    $result = json_encode($array);
    echo $result;
?>