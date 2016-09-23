$('#btnBuscar').click(function(){
	//alert('usa botonaaaa');
	$.post(baseurl+"cusuario/leerUsuarios", 
		function(data){
			 var p =  JSON.parse(data);
			 $.each(p, function(i,item){
			 	$('#tablaDatos').append(
			 		'<tr>'+
						'<td>'+item.nombre+'</td>'+
						'<td>'+item.correo+'</td>'+
						'<td>'+item.telefono+'</td>'+
						'<td>'+item.apellidoPaterno+'</td>'+
						'<td>'+''+'</td>'+
					'</tr>'
					);
			 });
	});
});