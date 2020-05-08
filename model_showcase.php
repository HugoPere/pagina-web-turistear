<html>
    <head>
	<link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="style_body.css">
	<script type="text/javascript">
		//auto expand textarea
		function adjust_textarea(h) {
		    h.style.height = "20px";
		    h.style.height = (h.scrollHeight)+"px";
		}
	</script>
</head>

    <body>
        
    <br>
    <h2>Estos son los modelos actualmente disponibles</h2>
          <?php
          
            $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM MODELOS");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo "<h3>".$valores['nombre']."</h3>" ;
                echo "<br>";
                echo "<img src= ".$valores['path']." >";
                echo "<br>";
                echo "<h3>".$valores['descripcion']."</h3>" ;
            }
              
        ?>
    <div align="center">
        <h2><a href="logout.php" class="center">Logout</a></h2>
    </div>
    </body>
</html>