<?php

require 'conexion.php';

//obtenemos los valores del formulario

	$email = $_REQUEST['emailuser'];
	$pass = $_REQUEST['pass'];


$sql = 'SELECT email FROM datos WHERE email = $email';

if($conexion->query($sql))
		{
			echo "Correcto";
		}

else{
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}

while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['foo'];
}

mysql_free_result($resultado);

?>