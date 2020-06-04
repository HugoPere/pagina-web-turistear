<?php
            $server = 'mysql.turistear.usmgames.cl';
            $usuario = "turistearadmin";
            $pass = "123ClaveAR";
            $database= "turistearmysql";

            $mysqli = new mysqli($server, $usuario, $pass, $database);
            
            $uname=$_POST['usuario'];
            $password=$_POST['password'];
            
            
            $query = ("select * from USUARIOS where usuario='".$uname."'AND password='".$password."'");

            
            if($result = $mysqli -> query("select * from USUARIOS where usuario='".$uname."'AND password='".$password."'")){
                $rows = $result -> num_rows;
                
                if($rows ==1){
                
                header("location: menu.html");
                }
                else{
                    echo " You Have Entered Incorrect Password";
                    exit();
                }
            }
            else{
                
            }            
?>