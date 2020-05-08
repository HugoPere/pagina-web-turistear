<?php 

    $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = $mysqli -> query("SELECT * FROM INFORMACION_EVENTOS where id = 1");
    
        while ($valores = mysqli_fetch_array($query)) {
            
            $titulo = $valores["titulo"];
            $info = $valores["informacion"];

            $array = array(
    	        "Titulo" => $titulo,
    	        "Texto" => $info
            );
        }

    $result = json_encode($array);
    echo $result;
?>