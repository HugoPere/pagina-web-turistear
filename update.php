<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $name = $_POST['name'];
    $modelo = $_POST['model'];
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = "UPDATE INFORMACION_EVENTOS SET informacion = '$descripcion', titulo='$name' where id = '$id' ";
    
    if ($mysqli->query($query) === TRUE) {
        header("Location: update_two.php?id_modelo=$modelo&id=$id");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
?>