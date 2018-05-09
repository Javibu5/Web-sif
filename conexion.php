<?php

	$conexion=new mysqli('localhost','root','usbw','formulario');
	if($conexion->connect_error){
		
		die("Conexion fallida");
	}
	


?>