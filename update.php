<HTML>
<HEAD>

</HEAD>
<BODY>
<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $name = $_POST['name'];
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = "UPDATE INFORMACION_EVENTOS SET informacion = '$descripcion', titulo='$name' where id = '$id' ";
    
    if ($mysqli->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
?>
<br>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center">Puede visualizar el contenido en la base de datos</div>
<div align="center"><a href="menu.html">Volver al menu</a></div>

</BODY>
</HTML>