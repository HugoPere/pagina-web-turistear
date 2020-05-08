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
        
        
    <form class="form-style-4 center" action="update.php" method="post">
        <br>
    <label for="id"><span>Elija un evento a cambiar</span>
    <br>
      <select name="id">
          
          <?php
          
            $server = 'localhost';
            $usuario = "id13127437_hugo";
            $pass = "sQ\q53j7&A7=-dZF";
            $database= "id13127437_test_pt";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM INFORMACION_EVENTOS");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id].'">'.$valores[titulo].'</option>';
            }
              
        ?>
      </select>
      <br>
      </label>
      <label for="descripcion">
      <span>Descripcion</span>
      <br>
      <textarea name="descripcion" onkeyup="adjust_textarea(this)" required="true" placeholder="Max 50 caracteres"></textarea>
      
      </label>
      <input type="submit" value="Submit">
    </form>
    <div align="center">
        <h2><a href="logout.php" class="center">Logout</a></h2>
    </div>
    </body>
</html>