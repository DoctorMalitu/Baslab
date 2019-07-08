<!DOCTYPE html>
<html lang="en">

<?php

require '../../conexionbs.php';
session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario']['Tipo_usuario'] != "Admin") {
    header('Location: ../Usuarioo/');
  }
  
}else {
  header('Location: ../../');
  exit();
}
?>
<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>Baslab</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="../index.php" class="logo">
					<img src="../assets/img/logo.png" width="35" height="35" alt=""> <span>Baslab</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="../assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                            <span>Admin <?php echo $_SESSION['usuario']['Nombre']; ?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="../../salir.php">Cerrar Sesion</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../../salir.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                         <li>
                            <a href="../index.php"><i class="fa fa-hospital-o"></i> <span>Index</span></a>
                        </li>
                        <li>
                            <a href="registro.php"><i class="fa fa-edit"></i> <span>Registro</span></a>
                        </li>
                        <li>
                            <a href="consult.php"><i class="fa fa-user"></i> <span>Pacientes</span></a>
                        </li>   
                        <li>
                            <a href="miniformuproducto.php"><i class="fa fa-user"></i> <span>Registro examenes</span></a>
                        </li>
                        <li>
                            <a href="consultproducto.php"><i class="fa fa-user"></i> <span>Consultar Examenes</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="registro.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Agregar pacientes</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table mb-0">
								<thead>
									   <tr>
                                            <th>Codigo</th>
                                            <th>Codigo exmane</th>
                                            <th>Nombre Examen</th>
                                            <th>Precio</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                            <th>Action</th>
                                        </tr>
								</thead>
								<?php
                                        $dbho = new conexionbs();
                                        $query="SELECT `codigoexam`, `codigo`, `nombre`, `precio` FROM `producto`";
                                        $res = $dbho -> query($query);
                                        $tablon ='';
                                        while ($row = mysqli_fetch_array($res)) {
                                        $tablon .="<tbody>";   
                                        $tablon .="<tr>";
                                        $tablon .="<td>$row[codigoexam]</td>";
                                        $tablon .="<td>$row[codigo]</td>";
                                        $tablon .="<td>$row[nombre]</td>";
                                        $tablon .="<td>$row[precio]</td>";
                                        $tablon.="<td><a href=\"editarexamen.php?id=$row[codigoexam]\">Editar</a></td>";
                                        $tablon.="<td><a href=\"eliminar.php?id=$row[codigoexam]\">Eliminar</a></td>";
                                        $tablon .="<tr>";
                                         $tablon .="</tbody>";   
                                        }
                                        echo $tablon;
                                        ?>
							</table>
                               
						</div>
					</div>
                </div>
            </div>
        </div>
		
    </div>
    
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>