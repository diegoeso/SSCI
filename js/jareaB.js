/*$(document).on("ready",inicio);
$.post(baseurl+"careas/leeAreas",
function(data){
	var c=JSON.parse(data);
	$.each(c,function(i,item){
		$('#cboAreas').append('<option value="'+item.idArea+'">'+item.nombreArea+'</option>');
	});

});*/


$.post(baseurl+"careas/leeAreas",
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cboArea').append(
						'<option value="'+item.idArea+'">'+item.nombreArea+'</option>'	
					);
			});
		});