<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  require 'conexionbs.php';
sleep(2);
session_start();
$dbho = new conexionbs();

$usuario=$dbho->real_escape_string( $_POST['usuariolg']);
$pas=$dbho->real_escape_string($_POST['passlg']);

  if ($nueva_consulta = $dbho->prepare("SELECT Nombre, Tipo_usuario FROM usuarios WHERE Usuario = ?  AND  Pasword = ? "))
  {
        $nueva_consulta->bind_param('ss',$usuario,$pas);
        $nueva_consulta->execute();
        $resultado = $nueva_consulta->get_result();

        if ($resultado->num_rows ==1) {
          $datos = $resultado->fetch_assoc();
          $_SESSION['usuario'] = $datos;
          echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario']));   
        }else {
          echo  json_encode(array('error' => true));
        }
        $nueva_consulta->close();
  }
}

$dbho->close();
 ?>
