$(document).on("ready",inicio)
function inicio()
{
	mostrar("");
	$("#txtBuscar").keyup(function(){
		buscar=$("#txtBuscar").val();
		mostrar(buscar);
	});
	$("body").on("click","#tablaDatos button",function(event){
		idsele=$(this).attr("value");
		$.post(baseurla+"cactividades/mostrarA",{
			idsele
		},
		function(data){
			// alert(data);
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				id=item.idActividad;
				nombre=item.nombreActividad;
				descripcion=item.descripcion;
				fechaRegistro=item.fechaRegistro;
				fechaInicio=item.fechaInicio;
				fechaTermino=item.fechaTermino;
				idArea=item.idArea;
				nombreArea=item.nombreArea;
			});
			$('#id').val(id);
			$('#txtnombre').val(nombre);
			$("#cboArea").val(idArea);
			
			$("#txtdescripcion").val(descripcion);
			$("#txtdateReg").val(fechaRegistro);
			$("#txtdateIni").val(fechaInicio);
			$("#txtdateTer").val(fechaTermino);

		});
	});

	$("body").on("click","#tablaDatos a",function(event){
		event.preventDefault();
		idsele=$(this).attr("href");
		eliminar(idsele);
	});
}


function mostrar(valor)
{
	$.ajax({
		url:baseurl+"cactividades/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			var registro=eval(respuesta);
			$('#tablaDatos').html(
				'<tr>'+
					'<td class="text-center" >Nombre</td>'+
					'<td class="text-center">Descripción</td>'+
					'<td class="text-center">Fecha Registro</td>'+
					'<td class="text-center">Fecha Inicio</td>'+
					'<td id="tel" class="text-center">Fecha Termino</td>'+
					'<td class="text-center">Área</td>'+
					'<td class="text-center">Opcion</td>'+
				'</tr>'			
				);
				$.each(registro, function(i,item){
				$('#tablaDatos').append(
					'<tr>'+	
						'<td>'+item.nombreActividad+'</td>'+
						'<td>'+item.descripcion+'</td>'+
						'<td>'+item.fechaRegistro+'</td>'+
						'<td>'+item.fechaInicio+'</td>'+
						'<td>'+item.fechaTermino+'</td>'+
						'<td>'+item.nombreArea+'</td>'+
						'<td height=5 width=120><button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#editar" value="'+item.idActividad+'" id="btnEditar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </button>'+ ' '+ 
						'<a class="btn btn-danger btn-ms" href="'+item.idActividad+'" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>'+
					'</tr>'	
					);
			});
		}
	});
}

function eliminar(idsele)
{
	$.ajax({
		url:baseurla+"cactividades/eliminar",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrar("");
		}

	});
}
