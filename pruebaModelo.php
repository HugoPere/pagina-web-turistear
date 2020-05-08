<?php 

    $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = $mysqli -> query("SELECT * FROM QR_CODES where id = 1");
    
    while ($valores = mysqli_fetch_array($query)) {
            
            $id_modelo = $valores["id_modelo"];
        };
    
    
    
    $query_two = $mysqli -> query('SELECT * FROM MODELOS WHERE id="'.$id_modelo.'"');
    
    
        while ($valores_two = mysqli_fetch_array($query_two)) {
            
            $titulo = $valores_two["clave"];

            $array = array(
    	        "Clave" => $titulo
    	        
            );
        }

    $result = json_encode($array);
    echo $result;
?>