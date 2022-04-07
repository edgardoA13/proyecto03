<?php 
	require 'open-connection.php';
	session_start();

	$correo = $_POST['correoL'];
	$password = $_POST['contraseñaL'];

	$logIn = "SELECT * FROM users_fiber WHERE correo = '$correo' AND contraseña = '$password'";
	$validaLogin = $connection->query($logIn);

	if($validaLogin->num_rows > 0){
		$_SESSION['username'] = $correo;
		echo json_encode(array('success'=> 1));
	} else{
		echo json_encode(array('success'=> 0));
	}
?>