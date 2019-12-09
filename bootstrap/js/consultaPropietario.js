$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'clases/buscarPro.php',
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

$(document).on('click','#eliminar', function(){
	if (confirm('Esta seguro que desea eliminar este registro')) {
		var tel_pro=$(this).data('tel_pro');
		$.ajax({
			url:'clases/eliminarPro.php',
			type:'POST',
			data:{tel_pro:tel_pro,},
			success: function(data){
				buscar_datos();
				alert(data);
			}
		})

		
	};
})

