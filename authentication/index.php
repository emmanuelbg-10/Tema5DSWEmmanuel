<?php
require 'control.php';

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?=$username?></h1>
  <p><a href="login.php">Cerrar sessión</a></p>
</body>
</html>