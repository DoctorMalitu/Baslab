<?php 
require '../../conexionbs.php';
if (isset($_GET['id'])) {
	$dbho= new conexionbs();
	$id=$_GET['id'];
	$query="SELECT * FROM clientes WHERE codigo = ".$id;
	$res=$dbho->query($query);
	$datos=mysqli_fetch_array($res);
	$identificacion=mysqli_fetch_array($res);
	$genero=mysqli_fetch_array($res);
	$examen=mysqli_fetch_array($res);
	$personal=mysqli_fetch_array($res);
}
else {
	header("location:index.html");
}
 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="registro.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<head>
	<meta charset="utf-8">
	<title>Editar Cliente</title>
</head>
<body>

	<div class="wrapper fadeInDown" style="background: url(images/fondologin.png)">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img  src="images/icono7.png" alt="Solvetic"><h1><a  href="#">BASLAB</a><P>EDITAR CLIENTE</P></h1>
    </div>

    <!-- Login Form -->
    <form action="../crud.php" method="POST">	
    	<div class="row-1">
    		<div class="col-xs-4 col-md-1">
				<select class="form-control" name="identificacion" onchange="identificacion" style="height:55px;">
					<option value="CC" <?php if($identificacion=="CC") echo "selected"?>>CC</option>
		  			<option value="TI" <?php if($identificacion=="TI") echo "selected" ?>>TI</option>
		  			<option value="TT" <?php if($identificacion=="TT") echo "selected" ?>>TT</option>
		  			<option value="Otro" <?php if($identificacion=="Otro") echo "selected" ?>>Otro</option>
			  </select>
			</div>

    	      <div class="col-xs-8 col-md-2">
				   <input type="text" id="CC" class="fadeIn third" name="documento" value="<?php echo $datos["documento"] ?>">  
			  </div>
			  <div class="col-xs-12 col-md-5">
				      <input type="text" id="Nombre" class="fadeIn second" name="nombre" value="<?php echo $datos['nombre'] ?>">
				</div>

			   <div class="col-xs-12 col-md-4">
				      <input type="text" id="Apellido" class="fadeIn third" name="apellido" value="<?php echo $datos['apellido'] ?>">
			   </div>

		</div>
		<div class="row-1">
			<div class="col-xs-11 col-md-1">
				<select class="form-control" name="genero" style="height:55px;">
					<option value="Genero" disabled selected <?php if($genero=="Genero") echo "selected" ?>>Genero</option>
		  			<option value="Hombre"  <?php if($genero=="Hombre") echo "selected" ?>>Hombre</option>
		  			<option value="Mujer"  <?php if($genero=="Mujer") echo "selected" ?>>Mujer</option>
		  			<option value="Otro"  <?php if($genero=="Otro") echo "selected" ?>>Otro</option>
			  </select>
			</div>
			
			<div class="col-xs-5 col-md-2">
				      <input type="text" class="fadeIn second" name="edad" value="<?php echo $datos['edad'] ?>">
				</div>
			<div class="col-xs-5 col-md-5">
				      <input type="text"  class="fadeIn second" name="direccion" value="<?php echo $datos['direccion'] ?>">
				</div>
			<div class="col-xs-5 col-md-4">
				      <input type="text" class="fadeIn second" name="telefono" value="<?php echo $datos['telefono'] ?>">
				</div>
		</div>
		<div class="row-1">
			<div class="col-xs-11 col-md-2">
				<select class="form-control" id="Examen" name="examen" style="height:55px;">
					<option value="Examen" <?php if($examen=="Examen") echo "selected" ?>>Examen</option>
		  			<option value="Sangre" <?php if($examen=="Sangre") echo "selected" ?>>Sangre</option>
		  			<option value="Orina" <?php if($examen=="Orina") echo "selected" ?>>Orina</option>
		  			<option value="Coprologico" <?php if($examen=="Coprologico") echo "selected" ?>>Coprologico</option>
			  </select>
			</div>
			<div class="col-xs-5 col-md-2">
				<select class="form-control" id="Empresa" name="personal" style="height:55px;">
							<option value="Empresa" <?php if($personal=="Empresa") echo "selected" ?>>Empresa</option>
				  			<option value="Particular" <?php if($personal=="Particular") echo "selected" ?>>Particular</option>
			 	 </select>
				</div>
			
			<div class="col-xs-5 col-md-4">
				      <input type="text" class="fadeIn second" name="precio" value="<?php echo $datos['precio'] ?>">
				</div>
				<div class="col-xs-5 col-md-4">
				      <input type="text" class="fadeIn second" name="cosa"  value="<?php echo $datos['cosa'] ?>">
				</div>
		</div>
	
						      
		      

		  
	
		     <input type="hidden" name="id" value="<?php echo $id;?>">
		     <input type="submit" class="fadeIn fourth" name="editar" value="Guardar">

    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Devolver al sitio.</a>
    </div>

  </div>
</div>
</body>
</html>