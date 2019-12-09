<?php
	require_once('Conexion.php');
	require_once('FunctionBdd.php');
	if (isset($_POST['direcciones'])) {
		$arrarLat=array();
		$arrayLon=array();
		/*Obtencion de las variables de entorno*/
		$dir=explode("|", $_POST['direcciones']); //variables para la rutas;
		$salida="";
		$costoTotal;
		$kmTotal;
		$kmTotalF=0;
		$tiempoTotal;
		$tiempoTotalF=0;
		$coordenadas="";
		$dir1=str_replace(" ", "%20",$dir[0]);
		$dir2=str_replace(" ", "%20",$dir[1]);
		if ($dir[0]!="" && $dir[1]) {
			$dir1=str_replace(" ", "%20",$dir[0]);
			$dir2=str_replace(" ", "%20",$dir[1]);
			$url = "http://maps.googleapis.com/maps/api/directions/json?origin=$dir1&destination=$dir2&sensor=false&mode=driving";
			$jsonData   = file_get_contents($url);
			$data = json_decode($jsonData); //es objeto json
			$d=$data->{"geocoded_waypoints"};
			$kmTotal=$data->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"};
			$latIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lat"};
			$lonIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lng"};
			$latFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lat"};
			$lonFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lng"};
			$tiempoTotal=$data->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"value"};
			$kmTotalF.=intval($kmTotal);
			$tiempoTotalF.=intval($tiempoTotal);
			$coordenadas.=$latIni."?".$lonIni."¿".$latFin."?".$lonFin."¿";
		}

		if ($dir[1]!="" && $dir[2]) {
			$dir1=str_replace(" ", "%20",$dir[1]);
			$dir2=str_replace(" ", "%20",$dir[2]);
			$url = "http://maps.googleapis.com/maps/api/directions/json?origin=$dir1&destination=$dir2&sensor=false&mode=driving";
			$jsonData   = file_get_contents($url);
			$data = json_decode($jsonData); //es objeto json
			$d=$data->{"geocoded_waypoints"};
			$kmTotal=$data->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"};
			$latIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lat"};
			$lonIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lng"};
			$latFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lat"};
			$lonFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lng"};
			$tiempoTotal=$data->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"value"};
			$kmTotalF.=intval($kmTotal);
			$tiempoTotalF.=intval($tiempoTotal);
			$coordenadas.=$latIni."?".$lonIni."¿".$latFin."?".$lonFin."¿";
		}
		
		if ($dir[2]!="" && $dir[3]) {
			$dir1=str_replace(" ", "%20",$dir[2]);
			$dir2=str_replace(" ", "%20",$dir[3]);
			$url = "http://maps.googleapis.com/maps/api/directions/json?origin=$dir1&destination=$dir2&sensor=false&mode=driving";
			$jsonData   = file_get_contents($url);
			$data = json_decode($jsonData); //es objeto json
			$d=$data->{"geocoded_waypoints"};
			$kmTotal=$data->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"};
			$latIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lat"};
			$lonIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lng"};
			$latFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lat"};
			$lonFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lng"};
			$tiempoTotal=$data->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"value"};
			$kmTotalF.=intval($kmTotal);
			$tiempoTotalF.=intval($tiempoTotal);
			$coordenadas.=$latIni."?".$lonIni."¿".$latFin."?".$lonFin."¿";
		}

		if ($dir[3]!="" && $dir[4]) {
			$dir1=str_replace(" ", "%20",$dir[3]);
			$dir2=str_replace(" ", "%20",$dir[4]);
			$url = "http://maps.googleapis.com/maps/api/directions/json?origin=$dir1&destination=$dir2&sensor=false&mode=driving";
			$jsonData   = file_get_contents($url);
			$data = json_decode($jsonData); //es objeto json
			$d=$data->{"geocoded_waypoints"};
			$kmTotal=$data->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"};
			$latIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lat"};
			$lonIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lng"};
			$latFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lat"};
			$lonFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lng"};
			$tiempoTotal=$data->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"value"};
			$kmTotalF.=intval($kmTotal);
			$tiempoTotalF.=intval($tiempoTotal);
			$coordenadas.=$latIni."?".$lonIni."¿".$latFin."?".$lonFin."¿";
		}
		if ($dir[4]!="" && $dir[5]) {
			$dir1=str_replace(" ", "%20",$dir[3]);
			$dir2=str_replace(" ", "%20",$dir[4]);
			$url = "http://maps.googleapis.com/maps/api/directions/json?origin=$dir1&destination=$dir2&sensor=false&mode=driving";
			$jsonData   = file_get_contents($url);
			$data = json_decode($jsonData); //es objeto json
			$d=$data->{"geocoded_waypoints"};
			$kmTotal=$data->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"};
			$latIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lat"};
			$lonIni=$data->{"routes"}[0]->{"legs"}[0]->{"start_location"}->{"lng"};
			$latFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lat"};
			$lonFin=$data->{"routes"}[0]->{"legs"}[0]->{"end_location"}->{"lng"};
			$tiempoTotal=$data->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"value"};
			$kmTotalF.=intval($kmTotal);
			$tiempoTotalF.=intval($tiempoTotal);
			$coordenadas.=$latIni."?".$lonIni."¿".$latFin."?".$lonFin."¿";
		}
		$minutosRuta=$tiempoTotalF/60;
		$horas = floor($tiempoTotalF / 3600);
    	$minutos = floor(($tiempoTotalF - ($horas * 3600)) / 60);
    	$segundos = $tiempoTotalF - ($horas * 3600) - ($minutos * 60);
    	$kmFinally=($kmTotalF/1000);


    	
    	

		echo $kmFinally."#".$horas." ".$minutos." ".$segundos."#".$coordenadas."#".$tiempoTotalF;
	}

	/*********funcion para optimizar las rutas************/
	
	

?>