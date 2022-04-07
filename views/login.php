<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style-login.css">
	<title>Login Fiber</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row allview d-flex">
				<div class="col-md-6 divForm align-self-md-center my-5 my-md-2">

					<div id="error-login">
						<div class="msj-login">
							<label>El correo o la contraseña son incorrectos.</label>
						</div>
					</div>

					<div id="login-vacio">
						<div class="msj-vacio">
							<label>Debe llenar todos los campos.</label>
						</div>
					</div>


					<a href="../index.html" class="h5 titleFiber"><strong>Fiber</strong></a>
					<h1 class="mt-4 mb-4 mt-md-5">Inicia Sesión en Fiber</h1>

					<form id="form_login" method="POST" autocomplete="off" >						
						<div class="form-group mb-3 mb-md-4">
							<label for="correoL" class="font-weight-bold">Correo</label>
							<input class="form-control" type="text" name="correoL" id="correoL" placeholder="nombre@ejemplo.com">
							<span id="spanEmail">El formato del correo debe ser nombre@ejemplo.com.</span>
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="contraseñaL" class="font-weight-bold">Contraseña</label>
							<input class="form-control" type="password" name="contraseñaL" id="contraseñaL">
							<span id="spanPass">Debe contener de 4 a 12 caracteres.</span>
						</div>						

						<button class="btn btn-block btn-lg btn-primary mb-3">Iniciar</button>
					</form>

					<div class="mt-md-3 text-center">
						<label class="text-center">¿No tienes una cuenta? <a href="registro.php" class="color-text">Registrate</a></label>
					</div>
					
				</div>

				<div class="col-md-6 banner text-center d-flex">
					<div class=" col-12 align-self-md-center">
						<img src="../images/Sign Up Image.png" class="img-fluid">
						<h3 class="text-white mt-4">Plantillas Incomparables</h3>
						<p class="text-white parrafo">Creadas por un equipo de diseñadores profesionales, nuestras plantillas no tienen parecido en el mercado.</p>
					</div>
					
				</div>
			</div>
		</div>
	</header>

	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../js/inicio_sesion.js"></script>
</body>
</html>