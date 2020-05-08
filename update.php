<HTML>
<HEAD>

</HEAD>
<BODY>
<?php
    $server = 'localhost';
    $usuario = "id13127437_hugo";
    $pass = "sQ\q53j7&A7=-dZF";
    $database= "id13127437_test_pt";
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $query = "UPDATE INFORMACION_EVENTOS SET informacion = '$descripcion' where id = '$id' ";
    
    if ($mysqli->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

    
    
    
?>
<br>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>