<?php
require 'connection.php';

$resultado = $conn->prepare('SELECT * FROM USUARIOS');
	
$resultado->execute();
?>

<!DOCTYPE html>
<HTML>
<style>

      
</style>
<header>
    <link rel="stylesheet" href="style_body.css">
</header>
<body>

<div style="img-container">
<img src="assets_pictures/logo.png" class="center">
</div>
<br>
<h2 align="center">Administracion de puntos turísticos de viña del mar</h2>
<br>
<div align="center">
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1><a href="login.php">Please Login</h1>

    <?php endif; ?>
</div>
</body>
</HTML>

