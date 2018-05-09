<?php

	require 'conexion.php';
	//obtenemos los valores del formulario
	$nombres = $_REQUEST['nombreuser'];
	$apellidos = $_REQUEST['apellidosuser'];
	$email = $_REQUEST['emailuser'];
	$pass = $_REQUEST['pass'];
	$rpass = $_REQUEST['rpass'];
	
	//conexion con la base de datos y el servidor
	
	if(isset($_REQUEST['nombreuser']) &&
	   isset($_REQUEST['apellidosuser']) &&
	   isset($_REQUEST['emailuser']) &&
	   isset($_REQUEST['pass']) &&
	   isset($_REQUEST['rpass']) &&
	   ($pass == $rpass))
	   {
			
		//se encripta la contraseña
		$contraseñaUser = md5($pass);
		
		if($conexion->query("INSERT INTO datos VALUES(null,'$nombres','$apellidos','$email','$contraseñaUser')"))
		{
			echo "Correcto";
		}
	    echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
		
			';
	   }
	
	else  {
		die('Datos del formulario incorrectos <br /> <a href="index.html">Volver</a>');
	}

	

	//ingresamos la informacion a la base de datos
	
	


?>