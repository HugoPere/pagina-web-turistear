<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";
            
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $nombre= $_POST['nombre'];
    $quantity= $_POST['quantity'];
    $count = 0;

    $query = $mysqli -> query ("INSERT INTO PROYECTO (id, nombre) VALUES (NULL,'$nombre')");

    $pr_id = $mysqli->insert_id;
	$query = $mysqli -> query("UPDATE QR_CODES SET id_proyecto='$pr_id', nombre_proyecto = '$nombre' WHERE id_proyecto=0 AND disponibilidad=0 ORDER BY id LIMIT $quantity");
    
    $query = $mysqli -> query("SELECT * FROM QR_CODES WHERE id_proyecto ='$pr_id'");
    while ($valores = mysqli_fetch_array($query)) {
        $id_qr = $valores[id];
		$query_second = $mysqli -> query("INSERT INTO INFORMACION_EVENTOS (id,titulo, informacion,lugar,id_qr, posicion, id_proyecto) VALUES (NULL,'no_name','no_text','$nombre','$id_qr', 1, '$pr_id'), (NULL,'no_name','no_text','$nombre','$id_qr', 2, '$pr_id')");
	}
    header("location: menu.html");
?>