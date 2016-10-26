$(document).on("ready",inicio)
function inicio()
{
	actividades();
	prestadores();
	actividades2();
	prestadores2();
	mostrarA("");
	$("#txtBuscar").keyup(function(){
		buscar=$("#txtBuscar").val();
		mostrarA(buscar);
	});

	$("body").on("click","#tablaDatos button",function(event){
		idsele=$(this).attr("value");
		$.post(baseurl+"casignaciones/mostrarA",{
			idsele
		},
		function(data){
			// alert(data);
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				id=item.idAsignacion;
				status=item.status;
				// fechaRegistro=item.fechaRegistro;
				fechaInicio=item.fechaInicio;
				fechaFin=item.fechaFin;
				idUsuario=item.idUsuario;
				cmbActisele=item.idActividad;
			});
			$('#id').val(id);
			$('#cmbPrestasele').val(idUsuario);
			$('#cmbActisele').val(cmbActisele);
			$("#cmbStatussele").val(status);
			// $("#txtdateRegsele").val(fechaRegistro);
			$("#txtFechaInisele").val(fechaInicio);
			$("#txtFechaTersele").val(fechaFin);

		});
	});
	$("body").on("click","#tablaDatos a",function(event){
		event.preventDefault();
		idsele=$(this).attr("href");
		alert(idsele);
		eliminar(idsele);
	});

}


function actividades()
{
	$.post(baseurl+"cactividades/leeActividades",
		function(data){
			// alert(data);
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cmbActi').append(
						'<option value="'+item.idActividad+'">'+item.nombreActividad+'</option>'
					);
		});
	});
}
function prestadores()
{
	$.post(baseurl+"cusuario/mostrarUsuario",
			function(data){
				//alert(data);
				var u = JSON.parse(data);
				$.each(u, function(i,item){
					$('#cmbPresta').append(
							'<option value="'+item.idUsuario+'">'+item.nombre+'  '+item.apellidoPaterno+' '+item.apellidoMaterno+'</option>'	
						);
			});
	});
}




function actividades2()
{
	$.post(baseurl+"cactividades/leeActividades",
		function(data){
			// alert(data);
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cmbActisele').append(
						'<option value="'+item.idActividad+'">'+item.nombreActividad+'</option>'
					);
		});
	});
}

function prestadores2()
{
	$.post(baseurl+"cusuario/mostrarUsuario",
			function(data){
				//alert(data);
				var u = JSON.parse(data);
				$.each(u, function(i,item){
					$('#cmbPrestasele').append(
							'<option value="'+item.idUsuario+'">'+item.nombre+'  '+item.apellidoPaterno+' '+item.apellidoMaterno+'</option>'	
						);
			});
	});
}

function mostrarA(valor)
{
	$.ajax({
		url:baseurl+'casignaciones/mostrar',
		type:'POST',
		data:{buscar:valor},
		success:function(respuesta){
			console.log(respuesta);
			var registro=eval(respuesta);
			$('#tablaDatos').html(
			'<tr>'+
				'<td class="text-center">Prestador</td>'+
	          	'<td class="text-center">Actividad</td>'+
	          	'<td class="text-center">Status</td>'+
	          	'<td class="text-center">Fecha Inicio</td>'+
	          	'<td class="text-center">Área</td>'+
	          	'<td class="text-center">Opción</td>'+
			'</tr>');
			$.each(eval(respuesta), function(i,item){
				if (item.status==0) {
						var stado="Urgente"	
						}else
						{
							var stado="No urgente"
						}
				$('#tablaDatos').append(
					'<tr>'+
						'<td>'+item.nombre+'</td>'+
						'<td>'+item.nombreActividad+'</td>'+ 
						'<td>'+stado+'</td>'+
						'<td>'+item.fechaInicio+'</td>'+
						'<td>'+item.nombreArea+'</td>'+
						'<td height=5 width=120><button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#editar" value="'+item.idAsignacion+'" id="btnEditar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </button>'+ ' '+ 
						'<a class="btn btn-danger btn-ms" href="'+item.idAsignacion+'" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>'+
						'</tr>'
					);
			});
		}
	});
}

function eliminar(idsele)
{
	$.ajax({
		url:baseurla+"casignaciones/eliminar",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarA("");
		}

	});
}
