<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style-profile.css">
	<title>Perfil</title>
</head>
<body>
<?php 

	session_start();
	$usuario = $_SESSION['username'];

	include('../connection/open-connection.php');

	$sql = "SELECT * FROM users_fiber WHERE correo = '$usuario'";
	$result = $connection->query($sql);
	$datos = $result->fetch_array(MYSQLI_ASSOC);
	$_SESSION['data'] = $datos;
	$id_usuario = $datos['id_user'];

	$query = "SELECT imagen,tipo FROM images WHERE id_users = '$id_usuario'";
						$resultado = mysqli_query($connection, $query);
						$imagen = ($resultado = mysqli_fetch_assoc($resultado));

	if(!isset($usuario)){
		header("location: login.php");
	}

	include('modals/modal-foto.php');
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
            <li class="nav-item ml-md-2"><a href="profile.php" class="btn btn-primary nav-link btn-perfil px-4"><strong>Perfil</strong></a></li>           
          </ul>
        </div>

      </div>      
</nav>

<header>	
		<div class="container  mt-5 pt-5">
			<div class="row contenido">				
				<div class="col-12 py-5">					
					<form>
						<div class="text-center mb-4 containerdiv">
							<img src="data:<?php echo $imagen['tipo']; ?>;base64,<?= base64_encode($imagen['imagen']); ?>" class="img-avatar rounded-circle img-thumbnail">
							<a href="" data-toggle="modal" data-target="#modalFoto" class="a-img"><img src="../images/camara.png" class="img-camara img-thumbnail rounded-circle"></a>
						</div>
						<div class="form-group">
							<label for="name_user" class="font-weight-bold">Nombre</label>
							<input type="" class="form-control" name="name_user" id="name_user" value="<?= $datos['nombre'] ?>">
						</div>

						<div class="form-group">
							<label for="email_user" class="font-weight-bold">Correo</label>
							<input type="" class="form-control" name="email_user" id="email_user" value="<?= $datos['correo'] ?>">
						</div>						
					</form>
				</div>
			</div>
		</div>	
</header>



<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>


</body>
</html>