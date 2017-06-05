$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#dato");
	var route = "http://localhost/sisVentas/public/almacen/categorias";

	$("#dato").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.idcategoria+"</td><td>"+value.nombre+"</td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombre+"</td><td><button value="+value.idcategoria+" OnClick='Mostrar(this);' class='btn btn-primary'data-toggle='modal' data-target='#myModal'>Editar</button> <button value="+value.idcategoria+" OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>");
		});

	});
}

//tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.descripcion+"</td></tr>");