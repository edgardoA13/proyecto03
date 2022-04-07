<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style-register.css">
	<title>Registro Fiber</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row allview d-flex">
				<div class="col-md-6 divForm align-self-md-center my-5 my-md-2">
					<a href="../index.html" class="h5 titleFiber"><strong class="">Fiber</strong></a>
					<h1 class="mb-4 mb-md-4 mt-5 mt-md-5">Crea tu cuenta Fiber</h1>

					<div id="msg-exito">
						<div class="mensaje">
							<label>¡Registro Exitoso!</label>
						</div>						
					</div>

					<div id="terminos">
						<div class="msj-terminos">
							<label>Debe aceptar los terminos y condiciones.</label>
						</div>						
					</div>

					<div id="msg-error">
						<div class="mensaje-error">
							<label>¡Error! Debe llenar todos los campos</label>
						</div>						
					</div>

					<div id="msg-existe">
						<div class="mensaje-existe">
							<label>El correo electrónico ya existe</label>
						</div>						
					</div>

					<form id="form_registro" method="POST" autocomplete="off">
						<div class="form-group mb-3 mb-md-4">
							<label for="nombre" class="font-weight-bold">Nombre</label>
							<input class="form-control" type="text" name="nombre" id="nombre" placeholder="John Doe">
							<span id="spanName">Solo puede contener letras y debe ingresar su nombre y apellidos.</span>
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="correo" class="font-weight-bold">Correo</label>
							<input class="form-control" type="text" name="correo" id="correo" placeholder="nombre@ejemplo.com">
							<span id="spanEmail">El formato del correo debe ser nombre@ejemplo.com.</span>
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="contraseña" class="font-weight-bold">Contraseña</label>
							<input class="form-control" type="password" name="contraseña" id="contraseña">
							<span id="spanPass">Debe contener de 4 a 12 caracteres.</span>
						</div>

						<div class="form-check mb-3 mb-md-4">
						    <input class="form-check-input" type="checkbox" id="formCheck" name="formChek">
						    <label class="form-check-label" for="inlineFormCheck">
						      Al crear tu cuenta en Fiber, aceptas los <a href="" class="terminos">Términos y condiciones.</a>
						    </label>
						</div>

						<button type="submit" class="btn btn-block btn-lg btn-primary mb-3 mb-mb-0">Crear cuenta Fiber</button>
					</form>

					<div class="mt-md-3 text-center">
						<label class="text-center">¿Ya tienes una cuenta? <a href="login.php" class="link_login">Inicia Sesión</a></label>
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
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/registro-validacion.js"></script>
<style type="text/css">
	
</style>
</html>