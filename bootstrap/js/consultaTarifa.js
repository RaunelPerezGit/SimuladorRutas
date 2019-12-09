$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'clases/buscarTarifa.php',
		type:'POST',
		dataType:'html',
		data:{consulta:consulta},
	})
	.done(function(respuesta){
		$('#datosTar').html(respuesta);
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
