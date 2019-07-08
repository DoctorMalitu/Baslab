<?php 
require '../../conexionbs.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	! is_numeric($id) ? die('Error al eliminar') : '';

	$query="DELETE FROM `Clientes` WHERE codigo=$id";

	$dbho= new conexionbs();
	$dbho->query($query);

	if ($dbho->affected_rows <0 ) {
		header("location: consult.php?error=Hubo un problema");
	}
	else {
        header("location: consult.php");
	}
}
 ?>