<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $id_user = $_POST['id'];
    $id_project = $_POST['project'];
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = "UPDATE USUARIOS SET id_proyecto = '$id_project' where id = '$id_user' ";

    $query = "UPDATE QR_CODES SET user_assigned  = '$id_user' where id = '$id_project' ";

    
    if ($mysqli->query($query) === TRUE) {

        header("Location: menu.html");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
?>