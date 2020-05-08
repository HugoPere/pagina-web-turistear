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
        
        <h1 align="center">Describa su evento y suba una imagen porfavor</h1>
    <form class="form-style-4 center" action="uploading_img.php" method="post" enctype="multipart/form-data">
        <br>
    
    <br>
     
      <label for="titulo">
      <span>Titulo</span>
      <br>
      <textarea name="titulo" onkeyup="adjust_textarea(this)" required="true" placeholder="Max 50 caracteres"></textarea>
      
      </label>
      <br>
      </label>
      <label for="descripcion">
      <span>Descripcion</span>
      <br>
      <textarea name="descripcion" onkeyup="adjust_textarea(this)" required="true" placeholder="Max 50 caracteres"></textarea>
      
      </label>
      <br>
      </label>
      <label for="img">
      <span>Imagen</span>
      <br>
      <input type="file" name="img" required="true">
      
      </label>
      <br>
      </label>
      <label for="model">
      <span>Elija un modelo</span>
      <br>
      <select name="model">
          
          <?php
          
            $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM MODELOS");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
            }
              
        ?>
      </select>
      <br>
      <a href="model_showcase.php">Muestrario de modelos</a>
      </label>
      <br>
      </label>
      <label for="img">
      <span>Elija un código QR</span>
      <br>
      <select name="qr">
          
          <?php
          
            $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM QR_CODES");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id].'">'.$valores[id].'</option>';
            }
              
        ?>
      </select>
      
      </label>
      <input type="submit" value="Submit">
    </form>
    <div align="center">
        <h2><a href="logout.php" class="center">Logout</a></h2>
    </div>
    </body>
</html>