<?php
    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";

    $mysqli = new mysqli($server, $usuario, $pass, $database);

    $uname=$_POST['usuario'];
    $password=$_POST['password'];
    
    $query = $mysqli -> query ("select * from USUARIOS where usuario='".$uname."'AND password='".$password."'");					                    
    while ($valores = mysqli_fetch_array($query)) {
        if($valores[tipo] == 1){
        $id=$valores[id];
        header("Location: menu.html?id=$id");
        }
        else{
            $id=$valores[id];
            header("Location: user_change_event.php?id=$id");
        }
    }
?>