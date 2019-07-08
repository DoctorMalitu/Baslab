<?php

session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario']['Tipo_usuario'] != "Usuario") {
    header('Location: ../Admin/');
  }
  
}else {
  header('Location: ../../');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
  </head>
  <body>
    <h1>Welome usuario  </h1>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
    <a href="../salir.php">Cerra sesion</a>
  </body>
</html>
