$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'clases/buscarSer.php',
		type:'POST',
		dataType:'html',
		data:{consulta:consulta},
	})
	.done(function(respuesta){
		$('#datosPro').html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}
$(document).on('keyup','#cajaBusquedaPro', function(){
	var valor=$(this).val();
	if (valor!="") {
		buscar_datos(valor);
	} else {
		buscar_datos();
	}
});

$(document).on('click','#verRuta', function(){
		var cve_ser=$(this).data('cve_ser');
		$.ajax({
			url:'http://localhost/ProyectoTucanReturn/consultaServicio.php',
			type:'POST',
			dataType:'html',
			data:{cve_ser:cve_ser,},
			success: function(data){
				$('#mapa').html(data);
			}
		})
		
})


//$(document).on('click','#eliminarS', function(){
	//if (confirm('Esta seguro que desea eliminar este registro ')) {
	//	var tel_cli=$(this).data('tel_cli');
	//	$.ajax({
	//		url:'clases/eliminarVehCon.php',
	//		type:'POST',
	//		data:{tel_cli:tel_cli,},
	//		success: function(data){
	//			buscar_datos();
	//			alert(data);
	//		}
	//	})
//
		
	//};
//})


