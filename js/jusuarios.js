	
//$('#myModal').modal({ backdrop: 'static', keyboard: false })
$(document).on("ready", inicioUsuarios)
function inicioUsuarios(){
	mostrarDatosU("");
	$("#txtBuscarU").keyup(function(){
		buscarU =$ ("#txtBuscarU").val();	
		mostrarDatosU(buscarU);
	});
	$("form").submit(function(event){
		//event.preventDefault();
	});

	$("body").on("click", "#tablaDatosU button", function(event){
		idsele=$(this).attr("value");				
		$.post(baseurla+"cusuario/mostrarUsuarioSolo",{
			idsele
		},
		function(data){			 
			var r = JSON.parse(data);
			$.each(r, function(i,item){
				id = item.idUsuario;
				nombre = item.nombre;
				paterno = item.apellidoPaterno;
				materno = item.apellidoMaterno;
		 		sexo = item.sexo;
		 		matricula = item.matricula;
		 		correo = item.correo;
		 		procedencia = item.institucionProcedencia;
		 		semestre = item.semestre;
		 		telefono = item.telefono;
		 		alta = item.fechaAlta;
		 		inicio = item.fechaInicio;
		 		termino = item.fechaTermino;
		 		tipo = item.tipoUsuario;
		 		user = item.user;
		 		pass = item.password;
		 		inicial = item.passInicial;
		 		area = item.idArea;
			});			
			switch(sexo){
				case 'H': document.getElementById('sexoseleh').checked = true;
					break;
				case 'M': document.getElementById('sexoselem').checked = true;
			}
			$('#id').val(id);
			$('#txtnombresele').val(nombre);
			$('#txtapsele').val(paterno);
			$('#txtamsele').val(materno);
			$('#sexosele').val(sexo);
			$('#txtmatriculasele').val(matricula);
			$('#txtcorreosele').val(correo);
			$('#txtinstitucionsele').val(procedencia);
			$('#txtsemestresele').val(semestre);
			$('#txttelefonosele').val(telefono);
			$('#txtaltasele').val(alta);
			$('#txtiniciosele').val(inicio);
			$('#txtfinsele').val(termino);
			$('#ctipousuariosele').val(tipo);
			$('#txtusersele').val(user);
			$('#txtpasswordsele').val(pass);
			$('#cboAreasele').val(area);
		});

	});
	$("body").on("click","#tablaDatosU a",function(event){
		event.preventDefault();
		idsele=$(this).attr("href");		
		eliminar(idsele);
	});
}

function mostrarDatosU(valor)
{
	$.ajax({		
		url:baseurla+"cusuario/mostrarUsuario",
		type:"POST",
		data:{buscarU:valor},
		success:function(respuesta){			
			var registros=eval(respuesta);
			$('#tablaDatosU').html(
		'<tr>'+
			'<td class="text-center">Nombre</td>'+
			'<td class="text-center">Correo electrónico</td>'+
			'<td class="text-center">Teléfono</td>'+
			'<td id="tel" class="text-center">Area asignada</td>'+
			'<td class="text-center">Editar</td>'+
		'</tr>');
			$.each(registros, function(i,item){
				$('#tablaDatosU').append(
						'<tr>'+
						'<td align ="center">'+item.nombre+' '+item.apellidoPaterno+' '+item.apellidoMaterno+'</td>'+
						'<td align ="center">'+item.correo+'</td>'+
						'<td align ="center">'+item.telefono+'</td>'+
						'<td align ="center">'+item.nombreArea+'</td>'+												
						'<td height=5 width=120><button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#editar" value="'+item.idUsuario+'" id="btnEditar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </button>'+ ' '+ 
						'<a class="btn btn-danger btn-ms" href="'+item.idUsuario+'" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>'+
						'</tr>'		
					);
			});
		}
	});
}

function eliminar(idsele)
{	
	$.ajax({
		url:baseurla+"cusuario/eliminar",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatosU("");
		}

	});
}



