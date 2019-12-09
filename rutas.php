<?php

	require_once('Conexion.php');
	require_once('FunctionBdd.php');
	if (isset($_POST['variables'])) {
		$direccion=new FunctionBdd();
		$resultado=$direccion->evaluarRuta($_POST['variables']);	
	}	

?>