<?php

  session_start();

    $server = 'mysql.turistear.usmgames.cl';
    $usuario = "turistearadmin";
    $pass = "123ClaveAR";
    $database= "turistearmysql";
  
  $username = "user";
  $password = "password";

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
      header("location: success.php");
  }
  
  if (isset ($_POST['usuario']) && isset($_POST['password'])){
      if($_POST['usuario'] == $username && $_POST['password'] == $password){
          $_SESSION['logged_in'] = true;
          header("location:success.php");
      }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style_body.css">
    <link rel="stylesheet" href="style_form.css">
  </head>
  <body>
      <div align="center">
    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>
    </div>
    <form class="form-style-4 center" action="login.php" method="POST">
      <input name="usuario" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>