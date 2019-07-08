<?php

require '../conexionbs.php';
echo "<br>";
$dbho = new conexionbs();


if (isset($_POST['Enviar'])) {
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];

	$query="INSERT INTO `producto`(`codigo`, `nombre`, `precio`) VALUES ('$codigo','$nombre','$precio')";

$dbho -> query($query);
 } 
 
 if (isset($_POST['Editar'])) {
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$id=$_POST['id'];
	
	
	$query="UPDATE `producto` SET  `codigo`='$codigo',`nombre`='$nombre',`precio`='$precio' WHERE codigoexam=$id";


$dbho -> query($query);
 } 
?>
<!DOCTYPE html>
<html>
     <!-- <meta http-equiv="Refresh" content="0;url=''"> -->
<head>
	<title></title>
</head>
<body>

</body>
</html>