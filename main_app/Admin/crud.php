<?php



require '../conexionbs.php';
echo "<br>";
$dbho = new conexionbs();


if (isset($_POST['Enviar'])){
 
    $identificacion = $_POST['identificacion'];
    $documento = $_POST['documento'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$genero = $_POST['genero'];
	$edad = $_POST['edad'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$examen = $_POST['examen'];
	$personal= $_POST['personal'];
    $precio = $_POST['precio'];
    $cosa = $_POST['cosa'];



	$query="INSERT INTO `clientes`(`identificacion`,`documento`, `nombre`, `apellido`, `genero`, `edad`, `direccion`, `telefono`, `examen`, `personal`,`precio`, `cosa`, `fecha`) VALUES ('$identificacion','$documento','$nombre','$apellido','$genero','$edad','$direccion','$telefono','$examen','$personal','$precio','$cosa','".date('Y-m-d')."')";

$dbho -> query($query);

 } 
 
 
 
 if (isset($_POST['editar'])){
 
    $identificacion = $_POST['identificacion'];
    $documento = $_POST['documento'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$genero = $_POST['genero'];
	$edad = $_POST['edad'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$examen = $_POST['examen'];
	$personal= $_POST['personal'];
    $precio = $_POST['precio'];
    $cosa = $_POST['cosa'];
	$id= $_POST['id'];



	$query="UPDATE `clientes` SET `identificacion`='$identificacion',`documento`='$documento',`nombre`='$nombre',`apellido`='$apellido',`genero`='$genero',`edad`='$edad',`direccion`='$direccion',`telefono`='$telefono',`examen`='$examen',`personal`='$personal',`precio`='$precio',`cosa`='$cosa' WHERE codigo=$id";

$dbho -> query($query);

 } 



?>

<!DOCTYPE html>
<html>
   
<head>
	
</head>
<body>
<!-- <meta http-equiv="Refresh" content="0;url=''"> -->
</body>
</html>