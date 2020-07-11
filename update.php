<?php
$server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";

    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $file = $_FILES['img'];
    $file_name = $_FILES['img']['name'];
    $file_TmpName = $_FILES['img']['tmp_name'];
    $file_size = $_FILES['img']['size'];
    $file_error = $_FILES['img']['error'];
    $file_type = $_FILES['img']['type'];
    $allowed = array('jpg','jpeg','png');
    
    $fileExt = explode('.', $file_name);
    $fileActualExt = strtolower(end($fileExt));
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $name = $_POST['name'];
    $modelo = $_POST['model'];
    $link = $_POST['link'];


    if (in_array($fileActualExt, $allowed)){
        if ($file_error === 0){
            $filenamenew = uniqid('', true).".".$fileActualExt;
            $filedestination= 'pictures/'.$filenamenew;
            move_uploaded_file($file_TmpName, $filedestination);

            $query = $mysqli -> query ("INSERT INTO INFO_IMAGENES (id, nombre, descripcion, unique_name, ruta_imagen,id_boton_asociado) VALUES (NULL,'$file_name',NULL,'$filenamenew','$filedestination', '$id')");

            $last_id = $mysqli->insert_id;

        } else {
            echo "Error, porfavor intentelo denuevo o contacte a un administrador";
        }
    } else {
        echo "Porfavor use un JPG/JPEG/PNG";
    }
    
    $query = "UPDATE INFORMACION_EVENTOS SET informacion = '$descripcion', titulo='$name', id_img='$last_id' where id = '$id' ";

    
    if ($mysqli->query($query) === TRUE) {
        header("Location: update_two.php?id_modelo=$modelo&id=$id&link=$link");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
?>