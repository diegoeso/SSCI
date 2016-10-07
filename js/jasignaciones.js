$(document).on("ready",inicio)
function inicio()
{
	mostrarA(1);
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

	$.post(baseurl+"cusuario/leerUsuarios",
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

function mostrarA(valor)
{
	$.ajax({
		url:baseurl+'casignaciones/mostrar',
		type:'POST',
		data:{buscar:valor},
		success:function(respuesta){
			console.log(respuesta);
			var registro=eval(respuesta);
			html="";
			html= "<table class='table table-bordered' id='tablaDatos'> <thead>";
      		html+="<tr> <td class='text-center'>Prestador</td> <td class='text-center'>Actividad</td> <td class='text-center'>Status</td> <td class='text-center'>Fecha Inicio</td> <td class='text-center'>Opción</td> </tr>";
        	html+="</thead></table>  "
       
			for (var i = 0; i < registro.length; i++) {
				html+="<tr><td>"+registro[i]["idAsignacion"]+"</td><td>"+registro[i]["status"]+"</td><td>"+registro[i]["fechaRegistro"]+"</td><td>"+registro[i]["fechaInicio"]+"</td><td>"+registro[i]["fechaFin"]+"</td><td>"+registro[i]["idUsuario"]+"</td><td>"+registro[i]["idActividad"]+"</td></tr>"
			};
		}
							// var registro=eval(respuesta);
			// var registro=JSON.parse(respuesta);
			// $('#tablaDatos').html(
			// '<tr>'+
			// 	'<td class="text-center">Prestador</td>'+
	  //         	'<td class="text-center">Actividad</td>'+
	  //         	'<td class="text-center">Status</td>'+
	  //         	'<td class="text-center">Fecha Inicio</td>'+
	  //         	'<td class="text-center">Opción</td>'+
			// '</tr>');
			// $.each(eval(respuesta), function(i,item){
			// 	$('#tablaDatos').append(
			// 		'<tr>'+
			// 			'<td>'+item.idAsignacion+'</td>'+
			// 			'<td>'+item.status+'</td>'+
			// 			// '<td>'++'</td>'+
			// 			// '<td>'++'</td>'+
			// 			// '<td>'++'</td>'+
			// 			'</tr>'
			// 		);
			// });
		// }
	});
}
// $('#tablaAsignacion').html(
// 		'<tr>'+
// 			'<td class="text-center">Prestador</td>'+
//           	'<td class="text-center">Actividad</td>'+
//           	'<td class="text-center">Status</td>'+
//           	'<td class="text-center">Fecha Inicio</td>'+
//           	'<td class="text-center">Opción</td>'+
// 		'</tr>');
// 	$.get(baseurl+"casignaciones/mostrar",
// 		function(data){
// 			alert(data);
// 			var a=eval(data);
// 			// var a = JSON.parse(data);
// 			$.each(a, function(i,item){
// 				$('#tablaAsignacion').append(
// 						'<tr>'+
// 						'<td>'+item.u.nombre+'</td>'+
// 						'<td>'+item.b.nombreActividad+'</td>'+
// 						'<td>'+item.a.status+'</td>'+
// 						'<td>'+item.a.fechaInicio+'</td>'+
// 						'<td>'+item.r.nombreArea+'</td>'+
// 						'</tr>'		
// 					);
// 			});
// 		});