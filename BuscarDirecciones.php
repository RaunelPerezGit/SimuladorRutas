<?php
	require_once('Conexion.php');
	require_once('FunctionBdd.php');
	//header("Content-Type: text/html;charset=utf-8");
	$direccion=new FunctionBdd();
	if (isset($_POST['keyword'])) {
		$resultado=$direccion->consultarDir($_POST['keyword']);
	}
	if (isset($_POST['keyword1'])) {
		$resultado=$direccion->consultarDir1($_POST['keyword1']);
	}
	if (isset($_POST['keyword2'])) {
		$resultado=$direccion->consultarDir2($_POST['keyword2']);
	}
	if (isset($_POST['keyword3'])) {
		$resultado=$direccion->consultarDir3($_POST['keyword3']);
	}
	if (isset($_POST['keyword4'])) {
		$resultado=$direccion->consultarDir4($_POST['keyword4']);
	}

	
		
?>