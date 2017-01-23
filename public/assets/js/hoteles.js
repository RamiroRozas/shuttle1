$(document).ready(function(){
	Carga();
});

function Carga(){

	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $('#tablaHoteles > tbody');
	var route = "/shuttle1/public/hotelesA"; 

	$('#tablaHoteles > tbody').empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{	//console.log(value.nombre);
			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.razonSocial+"</td><td>"+value.ruc+"</td><td>"+value.direccion+"</td><td>"+value.telefono+"</td><td>"+value.email+"</td><td>"+value.tipo+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	
	});

}