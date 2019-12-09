<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/clockpicker.js"></script>
	<!--<script type="text/javascript" src="bootstrap/js/jquery-ui/jquery-ui.min.js"></script>-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/clockpicker.css">
    <link rel="stylesheet" href="bootstrap/css/standalone.css">
    <link rel="stylesheet" href="bootstrap/js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="bootstrap/css/custom.css">
     <script type="text/javascript" async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCiYASrv9JFSq0oNCKlVh_Zg4uvoBQhlOg"></script>
 
    <style type="text/css">
    	.v-divider{
    		margin-left: 5px;
    		margin-right: 5px;
    		width: 1px;
    		height: 10%;
    		border-left: 1px solid gray;
    	}


    	#country-list{
    		float:left;
    		list-style:none;
    		margin-top:-3px;
    		padding:0;
    		width:190px;
    		position: absolute;
    	}
		#country-list li{
			padding: 10px;
			background: #f0f0f0;
			border-bottom: #bbb9b9 1px solid;
			}
		#country-list li:hover{
			background:#ece3d2;
			cursor: pointer;
		}
    </style>
    <script type="text/javascript">
    	 $('.clockpicker').clockpicker();
    </script>
</head>
<body style="background-color: rgba(0, 0, 0, 0.12);">
	<?php
    include("MenuSimulador.php");
    ?>
	<div class="container">
		<br>
		<br>
		<div class="row">
			<form id="frmLogin">
				<!--********************Caracteristicas del Paquete****************************
				<div class="col-sm-12 " >
					<div class="panel panel-primary panel panel-heading">
						<div class="panel panel-heading"><h5>Caracteristicas del paquete</h5></div>
						<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">
							<div class="col-sm-4">
								<label>Tipo de Envio</label>
								<input type="text" class="form-control input-sm" id="email" name="envio">
							</div>	
							<div class="col-sm-4">
								<label>Tipo de Paquete</label>
								<input type="text" class="form-control input-sm" id="password" name="paquete">
							</div>
							<div class="col-sm-4">
								<label>Peso del Paquete</label>
								<input type="text" class="form-control input-sm" name="peso">
							</div>
							<div class="col-sm-4">
								<label>Largo del Paquete</label>
								<input type="text" class="form-control input-sm" name="largo">
							</div>
							<div class="col-sm-4">
								<label>Alto del Paquete</label>
								<input type="text" class="form-control input-sm" name="alto">
							</div>
							<div class="col-sm-4">
								<label>Ancho del Paquete</label>
								<input type="text" class="form-control input-sm" name="ancho">
							</div>						
						</div>
					</div>
				</div>
				-->
				<!--********************Caracteristicas del Vehiculos****************************-->
				<div class="col-sm-12">
					<label><h2><strong><center>Simulador de Rutas de Envío <strong>Flash Route</strong> </center></strong></h2></label>
					<div class="panel panel-primary panel panel-heading">
						<div class="panel panel-heading"><h5>Caracteristicas del Viaje</h5></div>
						<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">

						<!--*******************Variables del Vehiculo***************-->
						<div class="col-sm-6">
									<div class="panel panel-primary panel panel-heading">
										<div class="panel panel-heading" style="height: 40px;">
											<center>
												<h5>Variables del Vehiculo</h5>
											</center>
										</div>
										<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">

											<div class="col-sm-6">
												<label>Vehiculo</label>
												<select name="vehiculo" id="vehiculo" class="form-control form-control-sm" style="margin-bottom: 10px;">
														<option>Elija una opción</option>
														<option>Bicicleta</option>
														<option>Automovil</option>
														<option>Moto</option>
														<option>Camión</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>No. de Cilindros</label>
												<select name="cilindro" id="cilindro" class="form-control form-control-sm" style="margin-bottom: 10px;">
													<option>Elija una opcion</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Rendimiento</label>
												<select name="rendimiento" id="rendimiento" class="form-control form-control-sm" style="margin-bottom: 10px;">
												</select>
											</div>

											<div class="col-sm-6">
												<label>Combustible</label>
												<select name="combustible" id="combustible" class="form-control form-control-sm" style="margin-bottom: 10px;">
														<option>Elija una opción</option>
														<option>Magna 17.67 $/It</option>
														<option>Premium 19.20 $/It</option>
														<option>Diésel 18.74 $/It</option>
														<option>Gas 11.17 $/It</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Año de Antiguedad</label>
												<select name="año" id="año" class="form-control form-control-sm" style="margin-bottom: 10px;">
													<option>Elija una opción</option>
													<option>1-3 años</option>
													<option>4-6 años</option>
													<option>7-9 años</option>
													<option>10-12 años</option>
													<option>13-15 años</option>
													<option>17 o mas años</option>
												</select>
											</div>
											
											<div class="col-sm-6">
												<label>Ultima Fecha de Revisión</label>
												<select  name="añoRev" id="añoRev" class="form-control form-control-sm" style="margin-bottom: 10px;">
													<option>Elija una opción</option>
													<option>1-3 meses</option>
													<option>4-6 meses</option>
													<option>7-9 meses</option>
													<option>10-12 meses</option>
													<option>13-15 meses</option>
													<option>16-18 meses</option>
													<option>19-21 meses</option>
													<option>22-24 meses</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Kilometraje</label>
												<select name="kilometraje" id="kilometraje" class="form-control form-control-sm" style="margin-bottom: 10px;">
													<option>Elija una opción</option>
													<option>0-30mil km</option>
													<option>40-60mil km</option>
													<option>70-90mil km</option>
													<option>100-120mil km</option>
													<option>130-150mil km</option>
													<option>160-180mil km</option>
													<option>190-210mil km</option>
													<option>220-240mil km</option>
													<option>250-270mil km</option>
													<option>280-300mil km</option>
												</select>
											</div>
											


										</div>
									</div>

									
						</div>
						<!-- *********sub variables*********************************-->
								<div class="col-sm-6">
									<div class="panel panel-primary panel panel-heading">
										<div class="panel panel-heading" style="height: 40px;">
											<center>
												<h5>Variables de Entorno</h5>
											</center>
										</div>
										<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">
											<div class="col-sm-6">
												<label>Tipo de Zona</label>
												<select name="tipoZona" id="tipoZona" class="form-control form-control-sm">
													<option>Elija una opción</option>
													<option>Urbana</option>
													<option>Rural</option>
												</select>
											</div>
											<!--
											<div class="col-sm-6">
												<label>Zona</label>
												<select name="zona" id="zona" class="form-control form-control-sm">
													<option>Centro</option>
													<option>Lacustre</option>
													<option>Meseta Purépecha</option>
													<option>Oriente</option>
													<option>Occidente</option>
													<option>Costa</option>
												</select>
											</div>
											-->
											<div class="col-sm-6">
												<label>Carretera</label>
												<select name="carretera" id="carretera" class="form-control form-control-sm">
													<option>Elija una opción</option>
													<option>Carretera Federal</option>
													<option>Autopista Federal</option>
													<option>Carreteras Estatales</option>
													<option>Caminos Rurales</option>
													<option>Brecha Mejorada</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label>Estacion del Año</label>
												<select name="temporada" id="temporada" class="form-control form-control-sm">
													<option>Elija una opción</option>
													<option>Primavera</option>
													<option>Verano</option>
													<option>Otoño</option>
													<option>Invierno</option>
												</select>
											</div>
											<!--
											<div class="col-sm-6">
												<label>Clima</label>
												<select name="clima" id="clima" class="form-control form-control-sm">
													<option>Cálido Subhúmedo</option>
													<option>Templado Subhúmedo</option>
													<option>Seco y Semiseco</option>
													<option>Templado Húmedo</option>
													<option>Cálido Humedo</option>
												</select>
											</div>

											-->
											<!--
											<div class="col-sm-6">
												<label> Tipo Clima</label>
												<select name="tipoClima" id="tipoClima" class="form-control form-control-sm">
													<option>Soleado</option>
													<option>Nublado</option>
													<option>Despejado</option>
													<option>Lluvioso</option>
													<option>Ventoso</option>
													<option>Nevado</option>
													<option>Brumoso</option>
													<option>Mojado</option>
													<option>Seco</option>
													<option>Helado</option>
													<option>Humedo</option>
													<option>Caliente</option>
													<option>Calido</option>
													<option>Fresco</option>
													<option>Frío</option>
													<option>Lluvia</option>
													<option>Nieve</option>
												</select>
											</div>
											-->
										</div>
									</div>
								</div>
								
							<div class="col-sm-6">
								<div class="col-sm-12">
									<!--
								  	<div class="input-group clockpicker">
								  		<label>Inicio del Viaje</label>
									    <input type="text" class="form-control" value="09:30">
									    <span class="input-group-addon">
									        <span class="glyphicon glyphicon-time"></span>
									    </span>
									</div>
									-->
									<label>Inicio del Viaje</label>
									<select name="hora" id="hora" class="form-control form-control-sm" style="margin-bottom: 10px;">
										<option>Elija una opción</option>
										<option>8am-12pm</option>
										<option>1pm-7pm</option>
										<option>8pm-12am</option>
										<option>1am-7am</option>
									</select>
								</div>
								<br>
								<ol>
									<li class="frmSearch"">
										<label style="width: 60px;">Origen</label>
										<input style="width: 300px; margin-top: 10px;" type="text" name="origen" id="origen" placeholder="Ciudad, Delegacion, Lugar">
										<div id="suggesstion-box" style="position: absolute; left: 40px; top: 70px;"></div>
										
									</li>
									<li>
										<label style="width: 60px;">Destino</label>
										<input style="width: 300px;" type="text" name="destino" id="destino" placeholder="Ciudad, Delegacion, Lugar">
									</li>
								</ol>
								<input type="hidden" name="totalTiempo" id="totalTiempo">
								<input type="hidden" name="coordenadas" id="coor">
								<input type="hidden" name="a" id="a">
								<input type="hidden" name="b" id="b">
								<input type="hidden" name="c" id="c">
								<input type="hidden" name="d" id="d">
								<input type="hidden" name="e" id="e">
								<input style="width: 200px;" class='btn btn-success' type="button" name="agregarDir" id="agregarDir" value="Agregar Destino"></input>	
								
								
								<input style="width: 200px;" class='btn btn-danger' type="button" name="eliminarDir" id="eliminarDir" value="Borrar Destino"></input>
								
								<input style="width: 400px;  margin-top: 10px; height: 50px;"  class='btn btn-primary' type="button" name="buscarRuta" id="buscarRuta" value="Buscar Ruta"></input>
								
								
								
							</div>
										
						</div>
					</div>
				</div>
				<!--********************Caracteristicas del Viaje****************************
				<div class="col-sm-12 ">
					<div class="panel panel-primary panel panel-heading" >
						<div class="panel panel-heading"><h5>Caracteristicas del Vehiculo</h5></div>
						<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">
							
									
						</div>
					</div>
				</div>
				-->
			</form>
			<div class="col-sm-12">
					<label><h2><strong><center>Resultados</center></strong></h2></label>
					<div class="panel panel-primary panel panel-heading">
						<div class="panel panel-heading"><h5>Resultados de la Busqueda</h5></div>
						<div class="panel panel-body" style="background-color: rgba(0, 0, 0, 0.12);">
						<div class="col-sm-6">
							<div id="mapa" style="border- margin-top:900px; width: 100%; height:800px; position: relative; overflow: auto;">
								<label>estoy aqui</label>
							</div>
						</div>
						<div class="col-sm-6" style="">
							<div class="col-sm-12">
								<div class="panel panel-primary panel panel-heading">
									<div class="panel panel-heading"><h5>Ruta Sugerida</h5></div>
									<div class="panel panel-body" style="background: orange;">
										<div class="row">
											<div class="col-sm-3">
												<span>
													<strong>Tiempo</strong>
												</span>
												<br>
												<span>
													<strong  style="color: green;">
														<input type="text" id="tiempo" name="tiempo" disabled style="width: 80px; background: orange;  border: none;">
														<br>
														<span>h : min</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>
											
											
											<div class="col-sm-3">
												<span>
													<strong>Distancia</strong>
												</span>
												<br>
												<span>
													<strong  style="color: blue;">
														<input type="text" id="distancia" name="distancia" disabled style="width: 80px; background: orange;  border: none;">
														<br>
														<span>km</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>
											<!--
											<hr size="10"  align="left" style="color: yellow;" />
											-->
											<div class="col-sm-3">
												<span>
													<strong>Combustible</strong>
												</span>
												<br>
												<span>
													<strong  style="color: green;">
														<input type="text" id="combustible" name="combustible" disabled style="width: 60px; background: orange;  border: none;">
														<br>
														<span>mxn</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>

											<div class="col-sm-3">
												<span>
													<strong>Casetas</strong>
												</span>
												<br>
												<span>
													<strong  style="color: blue;">
														$00.00
														<br>
														<span>mxn</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>

											<div style="width: 80%; text-align: left; margin-top: 10px; font-size: 1.3em">
												Costo Total
												<span style="color: green;">
													<span>$</span>
													<input type="text" id="costoTotal" name="costoTotal" disabled style="width: 100px; background: orange;  border: none;">
												</span>
												
											</div>

											<div style="width: 50%; text-align: left; margin-top: 10px; font-size: 1.3em">
												Costos Aproximados Para:
												<span style="color: green;">
													<input type="text" id="tipoVehiculo" name="tipoVehiculo" disabled style="width: 80%; background: orange; margin-top: 5px;  border: none;">
												</span>
												<br>
												<span style="color: green;">
													<input type="text" id="rendVeh" name="rendVeh" disabled style="width: 80%; background: orange; border: none;">
												</span>
												
											</div>


										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-6">
								<input style="width: 400px;  margin-top: 10px; height: 50px; margin-bottom: 10px;"  class='btn btn-success' type="button" name="estimarRuta" id="estimarRuta" value="Estimar Ruta"></input>
						</div>
						<div class="col-sm-6" style="">
							<div class="col-sm-12">
								<div class="panel panel-primary panel panel-heading">
									<div class="panel panel-heading"><h5>Ruta Estimada</h5></div>
									<div class="panel panel-body" style="background: orange;">
										<div class="row">
											<div class="col-sm-3">
												<span>
													<strong>Tiempo</strong>
												</span>
												<br>
												<span>
													<strong  style="color: green;">
														<input type="text" id="tiempo1" name="tiempo1" disabled style="width: 60px; background: orange;  border: none;">
														<br>
														<span>h:min</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>
											
											
											<div class="col-sm-3">
												<span>
													<strong>Distancia</strong>
												</span>
												<br>
												<span>
													<strong  style="color: blue;">
														<input type="text" id="distancia1" name="distancia1" disabled style="width: 60px; background: orange;  border: none;">
														<br>
														<span>km</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>
											<!--
											<hr size="10"  align="left" style="color: yellow;" />
											-->
											<div class="col-sm-3">
												<span>
													<strong>Combustible</strong>
												</span>
												<br>
												<span>
													<strong  style="color: green;">
														<input type="text" id="combustible1" name="combustible1" disabled style="width: 60px; background: orange;  border: none;">
														<br>
														<span>mxn</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>

											<div class="col-sm-3">
												<span>
													<strong>Casetas</strong>
												</span>
												<br>
												<span>
													<strong  style="color: blue;">
														$00.00
														<br>
														<span>mxn</span>
													</strong>
												</span>
												<div class="separator"></div>
											</div>

											<div style="width: 80%; text-align: left; margin-top: 10px; font-size: 1.3em">
												Costo Total
												<span style="color: green;">
													<span>$</span>
													<input type="text" id="costoTotal1" name="costoTotal1" disabled style="width: 100px; background: orange;  border: none;">
												</span>
												
											</div>

											<div style="width: 50%; text-align: left; margin-top: 10px; font-size: 1.3em">
												Costos Aproximados Para:
												<span style="color: green;">
													<input type="text" id="tipoVehiculo1" name="tipoVehiculo1" disabled style="width: 80%; background: orange; margin-top: 5px;  border: none;">
												</span>
												<br>
												<span style="color: green;">
													<input type="text" id="rendVeh1" name="rendVeh1" disabled style="width: 80%; background: orange; border: none;">
												</span>
												
											</div>


										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
			</div>
		</div>	
	</div>
	<!--***********************Foter****************************-->
	
	<script src="FunctionSimulador.js"></script>
</body>
<footer class="page-footer font-small blue pt-4 mt-4" style="margin-top: 40px; height: 5%; background: rgb(0, 191, 255)">
		<!--*************Footer Likns*****************-->
	
			<div class="row">
				<div class="col-md-6 py-4">
					<div class="mb-2 flex-center">
						<a class="fb-ic">
							<!--<i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-3x"></i>-->
						</a>
					</div>
					
				</div>
			</div>
	
		<div class="footer-copyright text-center py-3">
			© 2018 Copyrigth:
		</div>
		
</footer>
</html>