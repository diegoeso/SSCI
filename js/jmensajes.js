$.post(baseurl+"cusuario/leerUsuarios",
		function(data){
			alert(data);
			var u = JSON.parse(data);
			$.each(u, function(i,item){
				$('#cboNombre').append(
						'<option value="'+item.idUsuario+'">'+item.nombre+'  '+item.apellidoPaterno+' '+item.apellidoMaterno+'</option>'	
					);
		});
});


