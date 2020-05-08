<?php 

    $server = 'localhost';
    $usuario = "id13127437_hugo";
    $pass = "sQ\q53j7&A7=-dZF";
    $database= "id13127437_test_pt";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = $mysqli -> query("SELECT * FROM INFORMACION_EVENTOS where id = 5");
    
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