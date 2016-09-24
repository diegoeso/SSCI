$('#btnBuscarA').click(function(){
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
						'<td>'+''+'</td>'+
						'</tr>'		
					);
			});
		});
});