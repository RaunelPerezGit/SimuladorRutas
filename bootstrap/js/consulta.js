$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'clases/buscarUser.php',
		type:'POST',
		dataType:'html',
		data:{consulta:consulta},
	})
	.done(function(respuesta){
		$('#datos').html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}
$(document).on('keyup','#cajaBusqueda', function(){
	var valor=$(this).val();
	if (valor!="") {
		buscar_datos(valor);
	} else {
		buscar_datos();
	}
});

$(document).on('click','#eliminar', function(){
	if (confirm('Esta seguro que desea eliminar este registro')) {
		var tel_cli=$(this).data('tel_cli');
		$.ajax({
			url:'clases/eliminarUser.php',
			type:'POST',
			data:{tel_cli:tel_cli,},
			success: function(data){
				buscar_datos();
				alert(data);
			}
		})

		
	};
})

getPersona = function(nombre){
	
	$('#nombre').val(nombre);
	//$('#apellidos').val(app);
	//$('#telefono').val(telefono);
	//$('#correo').val(correo);
  // $('#mcboOtro value(3)').prop('selected', true);
  //$('[name=mcboOtro]').val(7);
  
};