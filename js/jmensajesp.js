$(document).on("ready",inicio)

function inicio()
{
	// $.post(baseurl+"casignaciones/nombreA",
	// 	function(data){
	// 		// alert(data);
	// 		// var r = JSON.parse(data);
	// 		var r=eval(data);
	// 		$.each(r, function(i,item){
	// 			$('#cboActividades').append(
	// 					'<option value="'+item.idAsignacion+'">'+item.nombreActividad+'</option>'	
	// 				);
	// 	});
	// });

	$.ajax({
		url:baseurl+"casignaciones/nombreA",
		type:"POST",
		data:{},
		success:function(respuesta){
			var r=eval(respuesta);
			$.each(r, function(i,item){
				$('#cboActividades').append(
						'<option value="'+item.idAsignacion+'">'+item.nombreActividad+'</option>'	
				);
			});	
		}
	});
}

// function actividades()
// {

// }