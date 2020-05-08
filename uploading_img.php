<?php
    $server = 'localhost';
    $usuario = "id13127437_hugo";
    $pass = "sQ\q53j7&A7=-dZF";
    $database= "id13127437_test_pt";
    
    $mysqli = new mysqli($server, $usuario, $pass, $database);
    
    $file = $_FILES['img'];
    $file_name = $_FILES['img']['name'];
    $file_TmpName = $_FILES['img']['tmp_name'];
    $file_size = $_FILES['img']['size'];
    $file_error = $_FILES['img']['error'];
    $file_type = $_FILES['img']['type'];
    
    
    $fileExt = explode('.', $file_name);
    $fileActualExt = strtolower(end($fileExt));
    
    $model_id= $_POST['model'];
    $qr_id= $_POST['qr'];
    
    $allowed = array('jpg','jpeg','png');
    
    if (in_array($fileActualExt, $allowed)){
        if ($file_error === 0){
            $filenamenew = uniqid('', true).".".$fileActualExt;
            $filedestination= 'pictures/'.$filenamenew;
            move_uploaded_file($file_TmpName, $filedestination);
            
            //ESCRIBIR AQUI CODIGO DE EDICION DE DB
            
            
          
            $query = $mysqli -> query ("UPDATE QR_CODES SET id_modelo='$model_id', disponibilidad='1' where id = '$qr_id'");
            
            
            header("Location: index.php");
            
            
            
        } else {
            echo "Error, porfavor intentelo denuevo o contacte a un administrador";
        }
    } else {
        echo "Porfavor use un JPG/JPEG/PNG";
    }
?>
