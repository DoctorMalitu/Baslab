<?php
session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario']['Tipo_usuario'] == 'Admin') {
   header('Location: main_app/Admin/');
  }else if ($_SESSION['usuario']['Tipo_usuario'] == 'Usuario') {
    header('Location: main_app/Usuarioo/');
  
  }
}

?>
<!DOCTYPE html>
<html>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="iconos/fonts1.css">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>

<head>
	<title>Login</title>
</head>
<body>
	<!-- header -->
<div class="header_w3l" data-spy="affix" ><!-- El menu de movera desde un punto inicial data-offset-top="690" -->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a  href="index.html">Dolly<span> Roncancio</span><img class="imagenlogo" src="images/icono7.png" alt="Solvetic"></a></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html" class="active"><span class="iconmenu icon-home"></span> Inicio</a></li>
					<li><a href="about.html"><span class="iconmenu icon-book"></span> Nosotros</a></li>
					<li><a href="treatments.html"><span class="iconmenu icon-lab"></span> Servicios</a></li>
					<li><a href="contact.html"><span class="iconmenu icon-location2"></span> Contacto</a></li>
					<li><a href="loogin.php"><span class="iconmenu icon-user-tie"></span> Usuario</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>
<!-- header -->

<!-- login -->
<div class="wrapper fadeInDown" style="background: url(images/fondologin.png)">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img  src="images/icono7.png" alt="Solvetic"><h1><a  href="index.html">BASLAB</a></h1>
    </div>

    <!-- Login Form -->
    <form  action="" id="formLg">
      <input type="text" id="login" name="usuariolg" class="fadeIn second" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="USUARIO">
      <input type="password" id="password" name="passlg" class="fadeIn third" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="PASSWORD">
      <input type="submit" class="fadeIn fourth botonlg" value="Iniciar Sesion">
	</form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.html">Devolver al sitio.</a>
    </div>

  </div>
</div>
<!-- login -->
<!-- smooth scrolling -->

<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/main.js"></script>

<!-- contacto -->
</body>
</html>