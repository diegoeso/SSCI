$.post(baseurl+"careas/leeAreas",
		function(data){
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				$('#cboArea').append(
						'<option value="'+item.idArea+'">'+item.nombreArea+'</option>'	
					);
		});
});

$('#cboArea').change(function(){
	$('#cboArea option:selected').each(function(){
		var id = $('#cboArea').val();
		alert(id);
	});
});