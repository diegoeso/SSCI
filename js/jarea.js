

	$('#tablaDatos').html(
		'<tr>'+
        '<td class="text-center">Nombre Area</td>'+
        '<td class="text-center">Descripcion</td>'+
        '<td class="text-center">Responsable</td>'+
        '<td class="text-center">Opción</td>'+
        '</tr>');
	$.post(baseurla+"careas/leeAreas",
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#tablaDatos').append(
						'<tr>'+
						'<td>'+item.nombreArea+'</td>'+
						'<td>'+item.descripcion+'</td>'+
						'<td>'+item.responsable+'</td>'+
						'<td height=5 width=160><button type="button" class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#editar" value="'+item.idArea+'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button>'+ ' '+ 
						'<button type="button" class="btn btn-danger btn-xs" value="'+item.idArea+'"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button></td>'+
						'</tr>'		
					);
			});
		});
