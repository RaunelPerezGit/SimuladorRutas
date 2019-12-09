<?php
require_once("Conexion.php");
//header("Content-Type: text/html;charset=utf-8");
/**
* 
*/
class FunctionBdd extends Conexion
{
	function consultarDir($q)
	{
		$salida="";
		$this->conectar();
		$queryBuscar="select estado,municipio,asentamiento from codigo where estado like '%".$q."%' or municipio like '%".$q."%' or asentamiento like '%".$q."%'";
		$result=$this->select($queryBuscar);
		$result->data_seek(0);
		$salida.="<ol id='country-list' style='height:400px; position: relative; overflow: auto;'>";
		while ($fila=$result->fetch_assoc())
		{
			$dato="'".$fila['estado'].','.$fila['municipio'].','.$fila['asentamiento']."'".",";
			$salida.='<li onClick="selectCountry('.$dato.');">'.$fila['estado']." ".$fila['municipio']." ".$fila['asentamiento'].'</li>';
		}
		$salida.="</ol>";
		echo $salida;
		$this->desconectar();
	}


	function consultarDir1($q)
	{
		$salida="";
		$this->conectar();
		$queryBuscar="select estado,municipio,asentamiento from codigo where estado like '%".$q."%' or municipio like '%".$q."%' or asentamiento like '%".$q."%'";
		$result=$this->select($queryBuscar);
		$result->data_seek(0);
		$salida.="<ol id='country-list' style='height:500px; position: relative; overflow: auto;'>";
		while ($fila=$result->fetch_assoc())
		{
			$dato="'".$fila['estado'].','.$fila['municipio'].','.$fila['asentamiento']."'".",";
			$salida.='<li onClick="selectCountry1('.$dato.');">'.$fila['estado']." ".$fila['municipio']." ".$fila['asentamiento'].'</li>';
		}
		$salida.="</ol>";
		$salida1=utf8_decode($salida);
		echo $salida;
		$this->desconectar();
	}
	function consultarDir2($q)
	{
		$salida="";
		$this->conectar();
		$queryBuscar="select estado,municipio,asentamiento from codigo where estado like '%".$q."%' or municipio like '%".$q."%' or asentamiento like '%".$q."%'";
		$result=$this->select($queryBuscar);
		$result->data_seek(0);
		$salida.="<ol id='country-list' style='height:500px; position: relative; overflow: auto;'>";
		while ($fila=$result->fetch_assoc())
		{
			$dato="'".$fila['estado'].','.$fila['municipio'].','.$fila['asentamiento']."'".",";
			$salida.='<li onClick="selectCountry2('.$dato.');">'.$fila['estado']." ".$fila['municipio']." ".$fila['asentamiento'].'</li>';
		}
		$salida.="</ol>";
		$salida1=utf8_decode($salida);
		echo $salida;
		$this->desconectar();
	}

	function consultarDir3($q)
	{
		$salida="";
		$this->conectar();
		$queryBuscar="select estado,municipio,asentamiento from codigo where estado like '%".$q."%' or municipio like '%".$q."%' or asentamiento like '%".$q."%'";
		$result=$this->select($queryBuscar);
		$result->data_seek(0);
		$salida.="<ol id='country-list' style='height:500px; position: relative; overflow: auto;'>";
		while ($fila=$result->fetch_assoc())
		{
			$dato="'".$fila['estado'].','.$fila['municipio'].','.$fila['asentamiento']."'".",";
			$salida.='<li onClick="selectCountry3('.$dato.');">'.$fila['estado']." ".$fila['municipio']." ".$fila['asentamiento'].'</li>';
		}
		$salida.="</ol>";
		$salida1=utf8_decode($salida);
		echo $salida;
		$this->desconectar();
	}


	function consultarDir4($q)
	{
		$salida="";
		$this->conectar();
		$queryBuscar="select estado,municipio,asentamiento from codigo where estado like '%".$q."%' or municipio like '%".$q."%' or asentamiento like '%".$q."%'";
		$result=$this->select($queryBuscar);
		$result->data_seek(0);
		$salida.="<ol id='country-list' style='height:500px; position: relative; overflow: auto;'>";
		while ($fila=$result->fetch_assoc())
		{
			$dato="'".$fila['estado'].','.$fila['municipio'].','.$fila['asentamiento']."'".",";
			$salida.='<li onClick="selectCountry4('.$dato.');">'.$fila['estado']." ".$fila['municipio']." ".$fila['asentamiento'].'</li>';
		}
		$salida.="</ol>";
		$salida1=utf8_decode($salida);
		echo $salida;
		$this->desconectar();
	}


	function evaluarRuta($datos)
	{
		$this->conectar();
		$variables=explode("*",$datos);
		$Te=$variables[8];
		$Ce=$variables[7];
		$TiempoFinal=0;
		$CostoFinal=0;
	
		/*TIPO DE VEHICULO*/
		$varE="Elija una opción";
		if(strcmp($variables[0], $varE)==0){
				
		}else{
				$queriVehiculo="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=3 and nombre_var='".$variables[0]."';";
				$resultado=$this->select($queriVehiculo);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
		}

		
		/*////////////////////////////////////////////////////////////////////////////*/
		/*ANTIGÜEDAD*/
		if(strcmp($variables[1], $varE)==0){
					
			}else{
				$queriAntiguedad="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=1 and nombre_var='".$variables[1]."';";
				$resultado2=$this->select($queriAntiguedad);
				$resultado2->data_seek(0);
				$fila=$resultado2->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
		}
		
		
		/*////////////////////////////////////////////////////////////////////////////*/
		/*ULTIMA FECHA DE REVISION*/
		if(strcmp($variables[2], $varE)==0){
					
			}else{
				$queri="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=10 and nombre_var='".$variables[2]."';";
				$resultado=$this->select($queriAntiguedad);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
		}

		

		/*////////////////////////////////////////////////////////////////////////////*/
		/*ZONA(RURAL-URBANA)*/
		if(strcmp($variables[3], $varE)==0){
					
		}else{
				$queriZona="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=12 and nombre_var='".$variables[3]."';";
				$resultado=$this->select($queriZona);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
		}

		
		/*////////////////////////////////////////////////////////////////////////////*/
		/*TIPO DE CARRETERA*/
		if(strcmp($variables[4], $varE)==0){
					
			}else{
				$queriCarretera="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=4 and nombre_var='".$variables[4]."';";
				$resultado=$this->select($queriCarretera);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				
		}

		

		/*////////////////////////////////////////////////////////////////////////////*/
		/*TEMPORADA(PRIMAVERA-VERANO-OTOÑO-INVIERNO)*/
		if(strcmp($variables[5], $varE)==0){
					
			}else{
				$queriTemporada="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=7 and nombre_var='".$variables[5]."';";
				$resultado=$this->select($queriTemporada);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];

				switch($variables[5]){
					case "Primavera":
						//Soleado
						$TiempoFinal=$TiempoFinal+(((0.4*$Te)+(0.6*($Te+1)))/100);
						$CostoFinal=$CostoFinal+(((0.4*$Ce)+(0.6*($Ce+1)))/100);
						
						//Caliente
						$TiempoFinal=$TiempoFinal+(((0.7*$Te)+(0.3*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.7*$Ce)+(0.3*($Ce+2)))/100);

						//nublado
						$TiempoFinal=$TiempoFinal+(((0.96*$Te)+(0.04*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.96*$Ce)+(0.04*($Ce+4)))/100);

						//Lluvioso
						$TiempoFinal=$TiempoFinal+(((0.96*$Te)+(0.04*($Te+8)))/100);
						$CostoFinal=$CostoFinal+(((0.96*$Ce)+(0.04*($Ce+15)))/100);

						//Humedo
						$TiempoFinal=$TiempoFinal+(((0.02*$Te)+(0.80*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.02*$Ce)+(0.80*($Ce+3)))/100);

						//Seco
						$TiempoFinal=$TiempoFinal+(((0.70*$Te)+(0.30*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.70*$Ce)+(0.30*($Ce+2)))/100);

						//Despejado
						$TiempoFinal=$TiempoFinal+(((0.2*$Te)+(0.80*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.2*$Ce)+(0.80*($Ce+2)))/100);
					break;
					case "Verano":
						//Soleado
						$TiempoFinal=$TiempoFinal+(((0.40*$Te)+(0.60*($Te+1)))/100);
						$CostoFinal=$CostoFinal+(((0.40*$Ce)+(0.60*($Ce+1)))/100);
						
						//Caliente
						$TiempoFinal=$TiempoFinal+(((0.40*$Te)+(0.60*($Te+4)))/100);
						$CostoFinal=$CostoFinal+(((0.40*$Ce)+(0.60*($Ce+8)))/100);

						//nublado
						$TiempoFinal=$TiempoFinal+(((0.60*$Te)+(0.40*($Te+8)))/100);
						$CostoFinal=$CostoFinal+(((0.60*$Ce)+(0.40*($Ce+15)))/100);

						//Lluvioso
						$TiempoFinal=$TiempoFinal+(((0.60*$Te)+(0.40*($Te+8)))/100);
						$CostoFinal=$CostoFinal+(((0.60*$Ce)+(0.40*($Ce+15)))/100);

						//Humedo
						$TiempoFinal=$TiempoFinal+(((0.50*$Te)+(0.50*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.50*$Ce)+(0.50*($Ce+3)))/100);

						//Seco
						$TiempoFinal=$TiempoFinal+(((0.70*$Te)+(0.30*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.70*$Ce)+(0.30*($Ce+2)))/100);

					break;
					case "Otoño":
						//Nevado
						$TiempoFinal=$TiempoFinal+(((0.97*$Te)+(0.03*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.97*$Ce)+(0.03*($Ce+10)))/100);
						//Brumoso
						$TiempoFinal=$TiempoFinal+(((0.97*$Te)+(0.03*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.97*$Ce)+(0.03*($Ce+10)))/100);
						//Mojado
						$TiempoFinal=$TiempoFinal+(((0.97*$Te)+(0.03*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.97*$Ce)+(0.03*($Ce+10)))/100);
						//Helado
						$TiempoFinal=$TiempoFinal+(((0.80*$Te)+(0.20*($Te+7)))/100);
						$CostoFinal=$CostoFinal+(((0.80*$Ce)+(0.20*($Ce+17)))/100);
						//Fresco
						$TiempoFinal=$TiempoFinal+(((0.40*$Te)+(0.60*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.40*$Ce)+(0.60*($Ce+2)))/100);
						//Frio
						$TiempoFinal=$TiempoFinal+(((0.30*$Te)+(0.70*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.30*$Ce)+(0.70*($Ce+10)))/100);
						//Nieve
						$TiempoFinal=$TiempoFinal+(((0.96*$Te)+(0.04*($Te+15)))/100);
						$CostoFinal=$CostoFinal+(((0.96*$Ce)+(0.04*($Ce+20)))/100);
					break;
					case "Invierno":
						//Nevado
						$TiempoFinal=$TiempoFinal+(((0.90*$Te)+(0.10*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.90*$Ce)+(0.01*($Ce+10)))/100);
						//Brumoso
						$TiempoFinal=$TiempoFinal+(((0.93*$Te)+(7*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.93*$Ce)+(7*($Ce+10)))/100);
						//Mojado
						$TiempoFinal=$TiempoFinal+(((0.97*$Te)+(0.03*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.97*$Ce)+(0.03*($Ce+10)))/100);
						//Helado
						$TiempoFinal=$TiempoFinal+(((0.70*$Te)+(0.30*($Te+7)))/100);
						$CostoFinal=$CostoFinal+(((0.70*$Ce)+(0.30*($Ce+17)))/100);
						//Fresco
						$TiempoFinal=$TiempoFinal+(((0.10*$Te)+(0.90*($Te+2)))/100);
						$CostoFinal=$CostoFinal+(((0.10*$Ce)+(0.90*($Ce+2)))/100);
						//Frio
						$TiempoFinal=$TiempoFinal+(((0.10*$Te)+(0.90*($Te+5)))/100);
						$CostoFinal=$CostoFinal+(((0.10*$Ce)+(0.90*($Ce+10)))/100);
						//Nieve
						$TiempoFinal=$TiempoFinal+(((0.90*$Te)+(0.10*($Te+15)))/100);
						$CostoFinal=$CostoFinal+(((0.90*$Ce)+(0.10*($Ce+20)))/100);
					break;
				}
				}
				
	
		/*////////////////////////////////////////////////////////////////////////////*/
		/*KILOMETRAJE*/
		if(strcmp($variables[6], $varE)==0){
					
			}else{
				$queriKm="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=2 and nombre_var='".$variables[6]."';";
				$resultado=$this->select($queriKm);
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$ocurrencia=$fila['ocurrencia_var'];
				$incrementoT=$fila['incrementoT_var'];
				$incrementoC=$fila['incrementoC_var'];
				$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

				$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				}
		

		/*////////////////////////////////////////////////////////////////////////////*/
		/*CATASTROFE*/
		/*$queriCatastrofe="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=11 and nombre_var='Catastrofe';";
			$resultado=$this->select($queriCatastrofe);
			$resultado->data_seek(0);
			$fila=$resultado->fetch_assoc();
			$ocurrencia=$fila['ocurrencia_var'];
			$incrementoT=$fila['incrementoT_var'];
			$incrementoC=$fila['incrementoC_var'];
			$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

			$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);*/


	/*///////////////////////////////////*/
	/*ZONAGEOGRAFICA*/
		$queriZonaGeo="select zonageo,ocurrencia_var,concat(estado,',',municipio,',',asentamiento)
		as nombre from codigo having nombre like '%".$variables[10]."%';";
			$resultado=$this->select($queriZonaGeo);
			$zonageo="";
			if($resultado){
				$resultado->data_seek(0);
				$fila=$resultado->fetch_assoc();
				$zonageo=$fila['ocurrencia_var'];
			}
			
			switch($zonageo){
				case "Centro":
					$queriCentro="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Centro';";
					$resultado=$this->select($queriCentro);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);
					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA TempladosubH*/
					$queriTempladoSubH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Templado Subhúmedo';";
					$resultado=$this->select($queriTempladoSubH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

				break;

				case "Lacustre":
					$queriLacustre="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Lacustre';";
					$resultado=$this->select($queriLacustre);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA TempladosubH*/
					$queriTempladoSubH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Templado Subhúmedo';";
					$resultado=$this->select($queriTempladoSubH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				break;

				case "Meseta Purépecha":
					$queriPurepecha="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Meseta Purépecha';";
					$resultado=$this->select($queriPurepecha);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA TempladoHumedo*/
					$queriTempladoH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Templado Húmedo';";
					$resultado=$this->select($queriTempladoSubH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				break;

				case "Oriente":
					$queriOriente="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Oriente';";
					$resultado=$this->select($queriOriente);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA CALIDOSH*/
					$queriCalidoSH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Cálido Subhúmedo';";
					$resultado=$this->select($queriCalidoSH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

				break;

				case "Occidente":
					$queriOccidente="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Occidente';";
					$resultado=$this->select($queriOccidente);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA CALIDOSH*/
					$queriCalidoSH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Cálido Subhúmedo';";
					$resultado=$this->select($queriCalidoSH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

				break;

				case "Costa":
					$queriCosta="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Costa';";
					$resultado=$this->select($queriCosta);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA CALIDOSH*/
					$queriCalidoSH="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Cálido Subhúmedo';";
					$resultado=$this->select($queriCalidoSH);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				break;

				case "Tierra Caliente":
					$queriCaliente="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=5 and nombre_var='Tierra Caliente';";
					$resultado=$this->select($queriCaliente);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);

					/*CLIMA POR ZONA SECO*/
					$queriSeco="select ocurrencia_var,incrementoT_var,incrementoC_var from variable join tipovariable on variable.cve_prob=tipovariable.cve_prob where variable.cve_prob=6 and nombre_var='Seco Cálido';";
					$resultado=$this->select($queriSeco);
					$resultado->data_seek(0);
					$fila=$resultado->fetch_assoc();
					$ocurrencia=$fila['ocurrencia_var'];
					$incrementoT=$fila['incrementoT_var'];
					$incrementoC=$fila['incrementoC_var'];
					$TiempoFinal=$TiempoFinal+((((1-$ocurrencia)*$Te)+($ocurrencia*($Te+$incrementoT)))/100);

					$CostoFinal=$CostoFinal+((((1-$ocurrencia)*$Ce)+($ocurrencia*($Ce+$incrementoC)))/100);
				break;
			}

			//echo "el costo fina->".$CostoFinal."tiempo final->".$TiempoFinal;

			/*$minutosRuta=$TiempoFinal/60;
			$horas = floor($TiempoFinal / 3600);
	    	$minutos = floor(($TiempoFinal - ($horas * 3600)) / 60);
	    	$segundos = $TiempoFinal - ($horas * 3600) - ($minutos * 60);
			echo "TiempoFinal:".$horas.":".$minutos.":".$segundos." CostoFinal:".$CostoFinal;*/
			$TiempoFinal=$TiempoFinal+$Te;
			$minutosRuta=($TiempoFinal)/60;
			$horas = floor($TiempoFinal / 3600);
	    	$minutos = floor(($TiempoFinal - ($horas * 3600)) / 60);
	    	$segundos = $TiempoFinal - ($horas * 3600) - ($minutos * 60);
	    	$CostoFinal=$CostoFinal+$Ce;
			echo $horas.":".$minutos.":".$segundos."&".$CostoFinal;
			
	}
}
?>