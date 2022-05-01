<?php


	include 'conexion_be.php';


	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$clave = hash('sha512', $clave);


	$queryusers = "INSERT INTO usuarios(nombre, correo, usuario, clave) VALUES ('$nombre', '$correo', '$usuario', '$clave')";


	//Verificacion de correo y evitar que se repita
	$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

	if(mysqli_num_rows($verificar_correo) > 0){
		echo'
			<script>
				alert ("Correo ya registrado, vuelve a intentarlo");
				window.location = "../index.php";
			</script>
		';
	}

	

	//Verificacion de nombre y evitar que se repita
	$verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre='$nombre'");

	if(mysqli_num_rows($verificar_nombre) > 0){
		echo'
			<script>
				alert ("Usuario ya registrado, vuelva a intentarlo");
				window.location = "../index.php";
			</script>
		';
	}




	$ejectuar = mysqli_query($conexion, $queryusers);

	if ($ejectuar) {
		echo'
			<script>
				alert("Usuario registrado, inicia sesión para realizar tu test");
				window.location = "../index.php";
			</script>
		';
	}else {
		echo'
		<script>
			alert("Intentelo de nuevo, usuario no registrado");
			window.location"../index.php"
		</script>
		';
	}


	$conexion->close();



?>