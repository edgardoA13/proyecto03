<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style-home.css">
	<title>Home</title>
</head>
<body>
	<?php 

		session_start();
		$usuario = $_SESSION['username'];
		
		if(!isset($usuario)){
			header("location: login.php");
		}

	?>
<nav class="navbar navbar-light bg-lightpink navbar-expand-sm fixed-top pt-4">
      <div class="container">
        <a href="homepage.php" class="navbar-brand"><strong>Fiber</strong></a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false">
          <img src="../images/Hamburger Menu.svg">
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Comunidad</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Precios</a></li>
            <li class="nav-item mr-md-5 pr-md-5"><a href="#" class="nav-link">Características</a></li>
            <li class="nav-item ml-md-5"><a href="../connection/salir.php" class="nav-link text-black"><strong>Cerrar Sesión</strong></a></li> 
            <li class="nav-item ml-md-2"><a href="profile.php" class="btn btn-primary nav-link btn-reg px-4"><strong>Perfil</strong></a></li>           
          </ul>
        </div>

      </div>      
    </nav>

   <!--*************************BODY*****************************-->
   <div class="container my-5 pt-5">
   	<div class="row mt-5">
   		<div class="col-12 text-center">
   			<h1><strong>Nuestras plantillas tienen todo lo que necesitas.</strong></h1>
   		</div>
   	</div>
   	<div class="row mt-5">
   		<div class="col-12 col-md-3 d-flex justify-content-center mb-3">
   			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../images/template 1.png" class="img-fluid">
			  <div class="card-body text-center">
			    <h5 class="card-title">Plantilla</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Ver más</a>
			  </div>
			</div>
   		</div>
   		<div class="col-12 col-md-3 d-flex justify-content-center mb-3">
   			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../images/template 2.png" class="img-fluid">
			  <div class="card-body text-center">
			    <h5 class="card-title">Plantilla</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Ver más</a>
			  </div>
			</div>
   		</div>
   		<div class="col-12 col-md-3 d-flex justify-content-center mb-3">
   			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../images/template 3.png" class="img-fluid">
			  <div class="card-body text-center">
			    <h5 class="card-title">Plantilla</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Ver más</a>
			  </div>
			</div>
   		</div>
   		<div class="col-12 col-md-3 d-flex justify-content-center mb-3">
   			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../images/template 4.jpeg" class="img-fluid">
			  <div class="card-body text-center">
			    <h5 class="card-title">Plantilla</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Ver más</a>
			  </div>
			</div>
   		</div>
   	</div>
   </div>

   <!--*************************FOOTER*****************************-->
	<footer>
		<div class="container py-5 px-5">
			<div class="row">
			<div class="col-12 col-md-5 mr-5">
				<h5>Fiber</h5>
				<p>Con Fiber, tu puedes configurar tu propio portafolio personal con docenas de hermosas plantillas prefabricadas.</p>
			</div>
			<div class="col-12 mt-3 mt-md-0 col-md-auto mr-5">
				<h5>Sitemap</h5>
				<ul>
					<li><a href="">Página principal</a></li>
					<li><a href="">Precios</a></li>
					<li><a href="">Testimonios</a></li>
					<li><a href="">Colaboraciones</a></li>
				</ul>
			</div>
			<div class="col-12 mt-3 mt-md-0 col-md-auto mr-5">
				<h5>Recursos</h5>
				<ul>
					<li><a href="">Soporte</a></li>
					<li><a href="">Contactos</a></li>
					<li><a href="">FAQ</a></li>
				</ul>
			</div>
			<div class="col-12 mt-3 mt-md-0 col-md-auto mr-5">
				<h5>Compañia</h5>
				<ul>
					<li><a href="">Sobre nosotros</a></li>
					<li><a href="">Clientes</a></li>
					<li><a href="">Blog</a></li>
				</ul>
			</div>			
		</div>
		</div>
	</footer>

	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
   <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>