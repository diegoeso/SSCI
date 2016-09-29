$.post(baseurl+"cactividades/leeActividades",
		function(data){
			alert(data);
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cmbActi').append(
						'<option value="'+item.idActividad+'">'+item.nombreActividad+'</option>'	

					);
		});
});

$.post(baseurl+"cusuario/leerUsuarios",
		function(data){
			alert(data);
			var u = JSON.parse(data);
			$.each(u, function(i,item){
				$('#cmbPresta').append(
						'<option value="'+item.idUsuario+'">'+item.nombre+'  '+item.apellidoPaterno+' '+item.apellidoMaterno+'</option>'	
					);
		});
});

$('#tablaAsignacion').html(
		'<tr>'+
			'<td class="text-center">Prestador</td>'+
          	'<td class="text-center">Actividad</td>'+
          	'<td class="text-center">Status</td>'+
          	'<td class="text-center">Fecha Inicio</td>'+
          	'<td class="text-center">Opción</td>'+
		'</tr>');
	$.post(baseurl+"casignaciones/cargaAsignacion",
		function(data){
			var a = JSON.parse(data);
			$.each(a, function(i,item){
				$('#tablaDatos').append(
						'<tr>'+
						'<td>'+item.u.nombre+'</td>'+
						'<td>'+item.b.nombreActividad+'</td>'+
						'<td>'+item.a.status+'</td>'+
						'<td>'+item.a.fechaInicio+'</td>'+
						'<td>'+item.r.nombreArea+'</td>'+
						'</tr>'		
					);
			});
		});