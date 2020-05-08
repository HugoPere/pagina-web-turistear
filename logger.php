<?php
          
            $server = 'localhost';
            $usuario = "id13127437_hugo";
            $pass = "sQ\q53j7&A7=-dZF";
            $database= "id13127437_test_pt";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM USUARIOS");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id].'">'.$valores[titulo].'</option>';
            }
              
?>