<?php 
	// $connection = mysqli_connect("localhost", "root", "", "fiber_template");
	include("open-connection.php");

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];


	$validar = "SELECT * FROM users_fiber WHERE correo = '$correo'";
	$validando = $connection->query($validar);

	if($validando->num_rows > 0){
		echo "El usuario ya se encuentra registrado";
	} else{
		if($nombre && $correo && $contraseña){
			$sql = "INSERT into users_fiber (nombre, correo, contraseña) values ('$nombre', '$correo', '$contraseña')";
		} else{
			echo "Nuestro sitio experimenta fallos....";
		}
	}
	

	echo mysqli_query($connection, $sql);
?>