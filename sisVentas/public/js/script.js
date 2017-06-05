$("#registro").click(function(){
	var route = "http://localhost/sisVentas/public/almacen/categoria";
	var token = $("#token").val();
	var condicion = $("#condicion").val('1');
	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:$('#formulario').serialize()
		//document.location.href=='{{route("almacen.categoria")}}';
	});
});

