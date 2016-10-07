$(document).on("ready",inicio)
function inicio()
{
	mostrarDatos("");
	$("#txtBuscar").keyup(function(){
		buscar=$("#txtBuscar").val();
		mostrarDatos(buscar);
	});

	$("body").on("click","#tablaDatos button",function(event){
		idsele=$(this).attr("value");
		$.post(baseurla+"careas/mostrarA",{
			idsele
		},
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				id=item.idArea;
				nombre=item.nombreArea;
				descripcion=item.descripcion;
				responsable=item.responsable;
			});
			$('#id').val(id);
			$("#nombreArea").val(nombre);
			$("#descripcion").val(descripcion);
			$("#responsable").val(responsable);
		});
	});

	$("body").on("click","#tablaDatos a",function(event){
		event.preventDefault();
		idsele=$(this).attr("href");
		eliminar(idsele);
	});
}

function mostrarDatos(valor)
{
	$.ajax({
		url:baseurla+"careas/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros=eval(respuesta);
			$('#tablaDatos').html(
		'<tr>'+
        '<td class="text-center">Nombre Area</td>'+
        '<td class="text-center">Descripcion</td>'+
        '<td class="text-center">Responsable</td>'+
        '<td class="text-center">Opción</td>'+
        '</tr>');
			$.each(registros, function(i,item){
				$('#tablaDatos').append(
						'<tr>'+
						'<td>'+item.nombreArea+'</td>'+
						'<td>'+item.descripcion+'</td>'+
						'<td>'+item.responsable+'</td>'+
						'<td height=5 width=120><button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#editar" value="'+item.idArea+'" id="btnEditar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </button>'+ ' '+ 
						'<a class="btn btn-danger btn-ms" href="'+item.idArea+'" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>'+
						'</tr>'		
					);
			});
		}
	});
}

function eliminar(idsele)
{
	$.ajax({
		url:baseurla+"careas/eliminar",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}

	});
}
