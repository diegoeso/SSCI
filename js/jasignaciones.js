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
						'<option value="'+item.idUsuario+'">'+item.nombre+'</option>'	
					);
		});
});

