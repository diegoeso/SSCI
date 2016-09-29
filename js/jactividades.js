
	$('#tablaDatos').html(
		'<tr>'+
				'<td class="text-center">Nombre</td>'+
				'<td class="text-center">Descripción</td>'+
				'<td class="text-center">Fecha Registro</td>'+
				'<td class="text-center">Fecha Inicio</td>'+
				'<td id="tel" class="text-center">Fecha Termino</td>'+
				'<td class="text-center">Área</td>'+
				'<td class="text-center">Opcion</td>'+

			'</tr>');
	$.post(baseurl+"cactividades/leeActividades",
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#tablaDatos').append(
						'<tr>'+
						'<td>'+item.nombreActividad+'</td>'+
						'<td>'+item.descripcion+'</td>'+
						'<td>'+item.fechaRegistro+'</td>'+
						'<td>'+item.fechaInicio+'</td>'+
						'<td>'+item.fechaTermino+'</td>'+
						'<td>'+item.idArea+'</td>'+
						'<td height=5 width=160><button type="button" class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#editar" value="'+item.idActividad+'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button>'+ ' '+ 
						'<button type="button" class="btn btn-danger btn-xs" value="'+item.idActividad+'"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button></td>'+
						'</tr>'		
					);
			});
		});

$('#txtBuscar').keyup(function(){
	$('#tablaDatos').html(
		'<tr>'+
				'<td class="text-center">Nombre</td>'+
				'<td class="text-center">Descripción</td>'+
				'<td class="text-center">Fecha Registro</td>'+
				'<td class="text-center">Fecha Inicio</td>'+
				'<td id="tel" class="text-center">Fecha Termino</td>'+
				'<td class="text-center">Área</td>'+
				'<td class="text-center">Opcion</td>'+
			'</tr>');
	$.post(baseurl+"cactividades/cargaDatos",{ },
		function(data){
			var d=JSON.parse(data);
			$('#tablaDatos').append(
						'<tr>'+
						'<td>'+item.nombreActividad+'</td>'+
						'<td>'+item.descripcion+'</td>'+
						'<td>'+item.fechaRegistro+'</td>'+
						'<td>'+item.fechaInicio+'</td>'+
						'<td>'+item.fechaTermino+'</td>'+
						'<td>'+item.idArea+'</td>'+
						'</tr>'		
					);
		});
});


$.post(baseurl+"cactividades/leeActividades",
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cmbActividad').append(
						'<option value="'+item.idActividad+'">'+item.nombreActividad+'</option>'	
					);
		});
});

