$(document).ready(function(){
	/******************Agregar los kilometro por litro**********************/
	for (var i = 1.0; i < 80.5; i=i+0.5) {
		$("#rendimiento").append("<option values"+i+">"+i+" Km/lt"+"</option>");
	}
	/****************dependiendo del auto le ponemos los cilindros*********/
	$("#vehiculo").change(function(){
		//salert("entra");
		var selection= document.getElementById('cilindro');
		length=selection.options.length;
			while(length--){
			selection.remove(length);
		}
		var elegido=$(this).val();
		switch(elegido){
			case "Bicicleta":
				$("#cilindro").append("<option>Sin cilindros</option>");
			break;
			case "Automovil":
				$("#cilindro").append("<option>4 cilindros</option>");
				$("#cilindro").append("<option>6 cilindros</option>");
				$("#cilindro").append("<option>8 cilindros</option>");
			break;
			case "Moto":
				$("#cilindro").append("<option>1 cilindros</option>");
				$("#cilindro").append("<option>2 cilindros</option>");
			break;
			case "Camión":
				$("#cilindro").append("<option>4 cilindros</option>");
				$("#cilindro").append("<option>6 cilindros</option>");
				$("#cilindro").append("<option>8 cilindros</option>");
			break;
			break;
		}
	});

	/*******************************Agregar mas puntos de parada**********/
	var cont=0;
	var container = $(document.createElement("div"));

	$('#agregar1').click(function(){
		if (cont<=5) {
			cont=cont+1;
			$(container).append("<input type='text' id=nodo"+cont +" name=nodo"+cont+" placeholder='Ciudad, Delegacion, Lugar'/>");
			if (cont== 1) {

				var divSubmit = document.getElementById('fin');
				}
			$('#divR').after(container,divSubmit);
		} else {


		}
	});


	/********************Configuracion del Mapa****************************/
	
});



/*******************************Agregar Destinos Para La ruta********************/
$(document).ready(function(){
	var contador=0;
	$("#agregarDir").click(function(){
		if (contador<3) {
			contador++;
			$("ol").append('<li><label style="width: 63px;">Destino'+contador+'</label><input style="width: 300px;" type="text" name="destino'+contador+'" id="destino'+contador+'" placeholder="Ciudad, Delegacion, Lugar"></li>');
		} else {
			alert("solo puedes agregar tres elementos como maximo");
		}
		
	});
	$("#eliminarDir").click(function(){
		if (contador>0) {
			contador--;
			$("ol li:last").remove();
		} else {
			alert("eliminaste todo lo que agregaste");s
		}
		
	});
});
/*******************************Metodos Para mostrar el mapa********************/
$(document).ready(function(){

	/************Obtener las Direcciones que digitaron***********************/
	/*function initMap(){
      Map options
      var options = {
        zoom:8,
        center:{lat:42.3601,lng:-71.0589}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('mapa'), options);
  	}*/
	
			var divMapa=document.getElementById('mapa');
            navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
            function fn_mal(){}
            function fn_ok(rta){
                var lat=rta.coords.latitude;
                var lon=rta.coords.longitude;
                var gLatLon=new google.maps.LatLng(lat,lon);
                //dibujando el mapa
                var objConfig={
                    zoom:17,
                    center:gLatLon
                };
                var gMapa=new google.maps.Map(divMapa, objConfig);
                }//instancia de un mapa para dibujar
            
                //obteniendo las coordenas de los puntos de parada
                /*var coordenas=document.getElementById("coordenadas").value;
                var vectorCoordenandas=coordenadas.split("¿");
                if (vectorCoordenandas) {
                	var par1=vectorCoordenandas[0].split("?");
                	var par2=vectorCoordenandas[1].split("?");
                
                
                /*var par3=vectorCoordenandas[2].split("?");
                var par4=vectorCoordenandas[3].split("?");
                var par5=vectorCoordenandas[4].split("?");*/

                /*
                 var zitacuaro={lat:19.43612, lng:-100.35733}; 
                var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: zitacuaro,
         			 title: 'Hello World!'
       				 });


                
                var almoloya={lat:19.3666652, lng:-99.7666636};
                var marker1 = new google.maps.Marker({
         			 map: gMapa,
          			position: almoloya,
         			 title: 'Hello World!'
       				 });
                var chicago = {lat: 19.7007800, lng: -101.1844300};
                var marker2 = new google.maps.Marker({
         			 map: gMapa,
          			position: chicago,
         			 title: 'Hello World!'
       				 });

                }*/

             	/*
        		 var zitacuaro={lat:19.43612, lng:-100.35733}; 
			        var almoloya={lat:19.3666652, lng:-99.7666636};
                 var directionsDisplay = new google.maps.DirectionsRenderer({
			          map: gMapa
			        });

			        // Set destination, origin and travel mode.
			        var request = {
			          destination: almoloya,
			          origin: zitacuaro,
			          travelMode: 'DRIVING'
			        };

			        // Pass the directions request to the directions service.
			        var directionsService = new google.maps.DirectionsService();
			        directionsService.route(request, function(response, status) {
			          if (status == 'OK') {
			            // Display the route on the map.
			            directionsDisplay.setDirections(response);
			          }
			        });
			    
			        var chicago = {lat: 19.7007800, lng: -101.1844300};
        			var indianapolis = {lat:19.3666653, lng:-99.7666634};

			        var directionsDisplay1 = new google.maps.DirectionsRenderer({
			          map: gMapa
			        });
			        var request1={
			        	 destination: chicago,
			          	 origin: indianapolis,
			         	 travelMode: 'DRIVING'
			        };


			        var directionsService1 = new google.maps.DirectionsService();
			        directionsService1.route(request1, function(response, status) {
			          if (status == 'OK') {
			            // Display the route on the map.
			            directionsDisplay1.setDirections(response);
			          }
			        });
			    }*/
                /*
                var longiLat=new google.maps.LatLng(19.4324566,-100.3553251);
                var objConfigMarker={
                    position:longiLat,
                    map:gMapa,
                    title:'estoy aqui',
                    animation:google.maps.Animation.DROP,
                    draggable:true
                };
                var trafficLayer = new google.maps.TrafficLayer();
        		trafficLayer.setMap(gMapa);

                //agregando el primer marcador
                var marker=new google.maps.Marker(objConfigMarker);
                marker.setMap(gMapa);
                var gCoder=new google.maps.Geocoder();
                
                var objInformation={
                    address:'la%palma%zitacuaro'
                };
                gCoder.geocode(objInformation, fn_coder);
                var coor=new google.maps.LatLng(19.2826078,-99.65565909999999);
                function fn_coder(datos){
                   
                   var config={
                       map:gMapa,
                       position:coor,
                       title:'nada',
                       animation:google.maps.Animation.DROP,
                       draggable:true
                   };
                   //agregando el segundo marcador
                    var gMarkerDV=new google.maps.Marker(config);
                    gMarkerDV.setMap(gMapa);
                }
                var objConfigDR={
                    map:gMapa,
                    draggable:true
                };
                
                //transando la ruta de los dos marques aqui altermaos ok
                var objConfigDS={
                    origin:longiLat,
                    destination:coor,
                    travelMode:google.maps.TravelMode.DRIVING

                };
                var ds=new google.maps.DirectionsService();
                var dr=new google.maps.DirectionsRenderer(objConfigDR);
                ds.route(objConfigDS, fnRutear);
                function fnRutear(resultados, status){
                    if(status=='OK'){
                        dr.setDirections(resultados);
                    }else{
                        alert('Eroor'+status);
                    }
                }*/
            
            
});
/****************************Buscar Direcciones origen***************************/
$(document).ready(function(){
	$("#origen").keyup(function(){
		$.ajax({
			type:"POST",
			url:"BuscarDirecciones.php",
			data:'keyword='+$(this).val(),

			beforeSend: function(){
			$("#origen").css("background","#FFF");
			}
		})
		.done(function(data){

				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#origen").css("background","#FFF");
		})
	});
});



function selectCountry(val) {
	$("#origen").val(val);
	$("#a").val(val);
	$("#suggesstion-box").hide();
}
/****************************Buscar Direcciones destino***************************/
$(document).ready(function(){
	$("#destino").keyup(function(){
		$.ajax({
			type:"POST",
			url:"BuscarDirecciones.php",
			data:'keyword1='+$(this).val(),

			beforeSend: function(){
			$("#destino").css("background","#FFF");
			}
		})
		.done(function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#destino").css("background","#FFF");
		})
	});
});

function selectCountry1(val) {
	$("#destino").val(val);
	$("#b").val(val);
	$("#suggesstion-box").hide();
}

/****************************Buscar Direcciones destino1***************************/
$(document).on('keyup','#destino1', function(){
		$.ajax({
			type:"POST",
			url:"BuscarDirecciones.php",
			data:'keyword2='+$(this).val(),

			beforeSend: function(){
			$("#destino1").css("background","#FFF");
			}
		})
		.done(function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#destino1").css("background","#FFF");
		})
});

function selectCountry2(val) {
	$("#destino1").val(val);
	$("#c").val(val);
	$("#suggesstion-box").hide();
}

/****************************Buscar Direcciones destino2***************************/
$(document).on('keyup','#destino2', function(){
		$.ajax({
			type:"POST",
			url:"BuscarDirecciones.php",
			data:'keyword3='+$(this).val(),

			beforeSend: function(){
			$("#destino2").css("background","#FFF");
			}
		})
		.done(function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#destino2").css("background","#FFF");
		})
});

function selectCountry3(val) {
	$("#destino2").val(val);
	$("#d").val(val);
	$("#suggesstion-box").hide();
}

/****************************Buscar Direcciones destino3***************************/
$(document).on('keyup','#destino3', function(){
		$.ajax({
			type:"POST",
			url:"BuscarDirecciones.php",
			data:'keyword4='+$(this).val(),

			beforeSend: function(){
			$("#destino3").css("background","#FFF");
			}
		})
		.done(function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#destino3").css("background","#FFF");
		})
});

function selectCountry4(val) {
	$("#destino3").val(val);
	$("#e").val(val);
	$("#suggesstion-box").hide();
}

/*****************seleccionar la opcion*************/
$(document).on('click','#buscarRuta', function(){ //


		var origen=document.getElementById('a').value;
		var destino=document.getElementById('b').value;
		var destino1=document.getElementById('c').value;
		var destino2=document.getElementById('d').value;
		var destino3=document.getElementById('e').value;
		var vehiculo=document.getElementById('vehiculo').value;
		var cilindros=document.getElementById('cilindro').value;
		var direcciones=origen+"|"+destino+"|"+destino1+"|"+destino2+"|"+destino3;
		$.ajax({
			type:"POST",
			url:"BuscarRutas.php",
			dataType:'html',
			data:{direcciones:direcciones},
		})

		.done(function(data){
			//alert(JSON.stringify(data));
			//alert(data);
			var datos=data.split("#");
			$("#tiempo").val(datos[1]);
			$("#distancia").val(datos[0]);
			$("#tipoVehiculo").val(vehiculo);
			$("#rendVeh").val(cilindros);
			$("#totalTiempo").val(datos[3]);
			var rendimiento=document.getElementById('rendimiento').value;
			var combustible=document.getElementById('combustible').value;
			//var tiempoTotal=datos[3];
			alert(rendimiento);
			var rendChido=rendimiento.split(" ");
			var precioGas=0;
			if (combustible=="Magna 17.67 $/It") {
				precioGas=17.67;
			}
			if (combustible=="Premium 19.20 $/It") {
				precioGas=19.20;
			}
			if (combustible=="Diésel 18.74 $/It") {
				precioGas=18.74;
			}
			if (combustible=="Gas 11.17 $/It") {
				precioGas=11.17;
			}
			//distancia*preciogas/rendimiento;
			var kmTotal=datos[0];
			var costoTotal=(kmTotal*precioGas)/parseFloat(rendChido[0]);
			
			
			$("#costoTotal").val(costoTotal);

			//variables para la ruta;
			var c=datos[2];
			document.getElementById('coor').value=c;

			var coordenas=document.getElementById('coor').value;
			

		/**********Mapa************************/
		
		var divMapa=document.getElementById('mapa');
            navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
            function fn_mal(){}
            function fn_ok(rta){
                var lat=rta.coords.latitude;
                var lon=rta.coords.longitude;
                var gLatLon=new google.maps.LatLng(lat,lon);
                //dibujando el mapa
                var objConfig={
                    zoom:17,
                    center:gLatLon
                };
                var gMapa=new google.maps.Map(divMapa, objConfig);//instancia de un mapa para dibujar

                //obteniendo las coordenas de los puntos de parada
                
                var coordenadas=document.getElementById('coor').value;
                alert("estoy en el mapa "+coordenadas);
                var vectorCoordenandas=coordenadas.split("¿");
               alert("son las coordenadas "+coordenadas);
                if (vectorCoordenandas[0]!="") {
                	var par1=vectorCoordenandas[0].split("?");
                	var punto1 = {lat: parseFloat(par1[0]), lng: parseFloat(par1[1])};
                	var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: punto1,
         			 title: 'A'
       				 });
                	/*alert("entra a esta pendejada 1");
                	var par1=vectorCoordenandas[0].split("?");
                	var par2=vectorCoordenandas[1].split("?");
                	

                 	var punto1 = {lat: parseFloat(par1[0]), lng: parseFloat(par1[1])};
       			 	var punto2 = {lat: parseFloat(par2[0]), lng: parseFloat(par2[1])};
                 	var directionsDisplay = new google.maps.DirectionsRenderer({
			          map: gMapa
			        });

			        // Set destination, origin and travel mode.
			        var request = {
			          destination: punto2,
			          origin: punto1,
			          travelMode: 'DRIVING'
			        };

			        // Pass the directions request to the directions service.
			        var directionsService = new google.maps.DirectionsService();
			        directionsService.route(request, function(response, status) {
			          if (status == 'OK') {
			            // Display the route on the map.
			            directionsDisplay.setDirections(response);
			          }
			        });*/
			    }
			    if (vectorCoordenandas[1]!="") {
			    	var par2=vectorCoordenandas[1].split("?");
                	var punto2 = {lat: parseFloat(par2[0]), lng: parseFloat(par2[1])};
                	var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: punto2,
         			 title: 'B'
       				 });
			    	
			    	/*var par3=vectorCoordenandas[1].split("?");
                	var par4=vectorCoordenandas[2].split("?");
                	alert("entra a esta pendejada 2"+"lat "+par3+" lon"+par4);

                 	var punto3 = {lat: parseFloat(par3[0]), lng: parseFloat(par3[1])};
       			 	var punto4 = {lat: parseFloat(par4[0]), lng: parseFloat(par4[1])};
                 	var directionsDisplay1 = new google.maps.DirectionsRenderer({
			          map: gMapa
			        });

			        // Set destination, origin and travel mode.
			        var request1 = {
			          destination: punto4,
			          origin: punto3,
			          travelMode: 'DRIVING'
			        };

			        // Pass the directions request to the directions service.
			        var directionsService1 = new google.maps.DirectionsService();
			        directionsService1.route(request1, function(response, status) {
			          if (status == 'OK') {
			          	alert("entro a ruta");
			            // Display the route on the map.
			            directionsDisplay1.setDirections(response);
			          }
			        });*/
			    }
                if (vectorCoordenandas[2]!="" ) {
                	var par3=vectorCoordenandas[2].split("?");
                	var punto3 = {lat: parseFloat(par3[0]), lng: parseFloat(par3[1])};
                	var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: punto3,
         			 title: 'C'
       				 });
                }
                if (vectorCoordenandas[3]!="") {
                	var par4=vectorCoordenandas[3].split("?");
                	var punto4 = {lat: parseFloat(par4[0]), lng: parseFloat(par4[1])};
                	var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: punto4,
         			 title: 'D'
       				 });
                }
                if (vectorCoordenandas[4]!="" ) {
                	var par5=vectorCoordenandas[4].split("?");
                	var punto5 = {lat: parseFloat(par5[0]), lng: parseFloat(par5[1])};
                	var marker = new google.maps.Marker({
         			 map: gMapa,
          			position: punto5,
         			 title: 'E'
       				 });
                }
            }
		})
});

/***********************estimar ruta***************************************/
$(document).on('click','#estimarRuta', function(){
	/*********Datos de La Ruta*********************/
		var origen=document.getElementById('a').value;
		var destino=document.getElementById('b').value;
		var destino1=document.getElementById('c').value;
		var destino2=document.getElementById('d').value;
		var destino3=document.getElementById('e').value;
		/*************Variables de Entrada*****************************/
		/*****Vehiculo************/
		var vehiculo=document.getElementById('vehiculo').value;
		var cilindros=document.getElementById('cilindro').value;
		var rendimiento=document.getElementById('rendimiento').value;
		var combustible=document.getElementById('combustible').value;
		var fabricacion=document.getElementById('año').value;
		var añoRev=document.getElementById('añoRev').value;
		//var revision=document.getElementById('añoRev').value;
		/*********Entorno********/
		var tipoZona=document.getElementById('tipoZona').value;
		//var zona=document.getElementById('zona').value;
		//var clima=document.getElementById('clima').value;
		var carretera=document.getElementById('carretera').value;
		var estacion=document.getElementById('temporada').value;
		//var tipoCLima=document.getElementById('tipoClima').value;
		var costoTotal=document.getElementById('costoTotal').value;
		var hora=document.getElementById('hora').value;
		var kilometraje=document.getElementById('kilometraje').value;
		var totalTiempo=document.getElementById('totalTiempo').value;
		var distancia=document.getElementById('distancia').value;
		var rend=rendimiento.split(" ");
		if (combustible=="Magna 17.67 $/It") {

		}
		if (combustible=="Premium 19.20 $/It") {
			
		}
		if (combustible=="Diésel 18.74 $/It") {
			
		}
		if (combustible=="Gas 11.17 $/It") {
			
		}

		//redifinir temporalmente las variables de tiempo y costo
		//totalTiempo=220;
		//costoTotal=120;
		var variables=vehiculo+"*"+fabricacion+"*"+añoRev+"*"+tipoZona+"*"+carretera+"*"+estacion+"*"+kilometraje+"*"+costoTotal+"*"+totalTiempo+"*"+hora+"*"+origen;
		alert(variables);
		$.ajax({
			type:"POST",
			url:"rutas.php",
			dataType:'html',
			data:{variables:variables},
		})

		.done(function(data){
			alert(data);
			var datos=data.split("&");
			$("#tiempo1").val(datos[0]);
			$("#distancia1").val(distancia);
			$("#tipoVehiculo1").val(vehiculo);
			$("#rendVeh1").val(cilindros);
			$("#costoTotal1").val(datos[1]);
		})
});