<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";

    $mysqli = new mysqli($server, $usuario, $pass, $database);

    $modelo = $_GET['id_modelo'];
    $id = $_GET['id'];
    $link = $_GET['link'];
    
    $query = $mysqli -> query ("SELECT * FROM INFORMACION_EVENTOS where id = '$id'");
    
    while ($valores = mysqli_fetch_array($query)) {
        
        $id_qr = $valores[id_qr];

        header("Location: update_three.php?id_modelo=$modelo&id=$id_qr&link=$link");
    }
?>