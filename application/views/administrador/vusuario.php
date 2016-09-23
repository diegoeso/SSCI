		<div class="row">
			<!--TABLA DE VISUALIZACOIN DE DATOS-->
			<div class="container text-center" >
		 		<div class="cols-xs-5">
		         	<h1 align="left">Usuarios</h1>        
		         	<div class="col-xs-13" align="right">
		         		<br>
		         		<label>Nombre:</label>
		         		<input type="text" name="nombre">          		         				         		
		         		<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscar"><span class="glyphicon glyphicon-search"></span></a>
		    	     	<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>		    	     	 
		    		</div>
		    		<br>
					<div class="cols-xs-13">
						<div class="row" >
							<table class="table table-bordered" id="tablaDatos">
								<thead>
									<tr>
										<td class="text-center">Nombre</td>
										<td class="text-center">Correo electrónico</td>
										<td class="text-center">Teléfono</td>
										<td id="tel" class="text-center">Area asignada</td>
										<td class="text-center">Editar</td>
									</tr>
								</thead>							
								<tbody>	

								</tbody>										
							</table>					
						</div>
					</div>				
				</div>
			</div>
<!--FINDE TABLA DE VISUALIZACION DE DATOS-->


	<!--FORMULARIO AGREGAR DATOS-->

	<div class="modal fade" tabindex="1" role="dialog" id="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">Nuevo usuario de servicio social</h4>
	      		</div>
	    		<div class="modal-body">
	      		<!--Formulario de registro-->	
					<form name ="usuario" id="datos_usuario" method="POST" action="<?php echo base_url()?>cusuario/guardar"> 
						<div class="row">
							<div class="col-xs-6"x>
								<div class="form-group" align="left">
									<label>Nombre:</label> 
									<input type="text" class="form-control" id="nombre_usuario" name="txtnombre">
									<label>Apellido paterno:</label> 
									<input type="text" class="form-control" id="apellido_paterno" name="txtap">
									<label>Apellido materno:</label> 
									<input type="text" class="form-control" id="apellido_materno" name="txtam">
									<label>Sexo:</label>
									Hombre <input type="radio" name="sexo" value="H" id="sexo_hombre" >
									Mujer <input type="radio" name="sexo" value="M" id="sexo_mujer"><br>
									<label>Matricula:</label> 
									<input type="text" class="form-control" id="matricula_usuario" name="txtmatricula">
									<label>Correo electrónico:</label> 
									<input type="text" class="form-control" id="correo_usuario" name="txtcorreo">
									<label>Institución de procedencia:</label>
									<input type="text" name="txtinstitucion" class="form-control" id="institucion_usuario">
									<label>Semestre:</label> 
									<input type="number" class="form-control" id="semestre_usuario" name="txtsemestre">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group" align="left">
									<label>Teléfono:</label> 
									<input type="tel" class="form-control" id="telefono_usuario" name="txttelefono">
									<label>Fecha de alta:</label>
									<input type="date"  class="form-control" id="fecha_alta" name="txtalta">
									<label>Fecha de inicio:</label>
									<input type="date"  class="form-control" id="fecha_inicio" name="txtinicio">
									<label>fecha de término:</label>
									<input type="date" class="form-control"  id="fecha_fin" name="txtfin">
									<label>Tipo de usuario:</label><br>
									<select name="ctipousuario">										
										<option value="1">Servicio social</option>
										<option value="0">Administrador</option>
									</select><br>
									<label>Nombre de usuario:</label>
									<input type="text" class="form-control" name="txtuser" id="user_usuario">
									<label>Contraseña:</label><br>
									<input type="password" name="txtpassword" id="pass_usuario"><br>
									<label>Area:</label><br>
									<select id="combo_areas" name="careas">
										<option value="1">Desarrollo de software</option>
										<option value="2">Software</option>
										<option value="3">Telecomunicaciones</option>
										<option value="4">Redes</option>
										<option value="5">Mixto</option>
									</select>									
								</div>
							</div>
						</div>
						<div class="modal-footer">	        	
	        				<input type="submit" value="Guardar" name="">
	      				</div>
					</form>
				</div>
	      		
	    	</div>
	  	</div>
	</div>


	</div>
	 </div>
	<!-- FIN DEl NAV DE CONTENEDOR PRINPAL-->
	<script charset ="utf-8">
		function agregar_fila(){
			var table;
			var longi = document.getElementById("nombre_usuario").value.length;
			var row;
			var cel1;
			var cel2;
			var cel3;
			var cel4;
			var cel5;
			var cont = 1;			
			if(document.getElementById("nombre_usuario").value.length==0){
				alert("Ingresa nombre");				
			}else{
				if(document.getElementById("apellido_paterno").value.length==0){
					alert("Ingresa apellido paterno");								
				}else{
					if(document.getElementById("apellido_materno").value.length==0){
						alert("Ingresa apellido materno");									
					}else{
						var table = document.getElementById("tablaDatos");
							var filas = document.getElementById("tablaDatos").rows.length;							
							//alert(cont);
							row = table.insertRow(cont+1);
							cel1 = row.insertCell(0);
							cel2 = row.insertCell(1);
							cel3 = row.insertCell(2);
							cel4 = row.insertCell(3);
							cel5 = row.insertCell(4);
							cel1.innerHTML = document.getElementById("nombre_usuario").value+" "+document.getElementById("apellido_paterno").value+" "+document.getElementById("apellido_materno").value; 
							cel2.innerHTML = document.getElementById("correo_usuario").value;
							cel3.innerHTML = document.getElementById("telefono_usuario").value;
							cel4.innerHTML  = document.getElementById("areas").value;
							//cel5.innerHTML = utf+e031;
							cont = cont + 1;		
						/*if(document.getElementById("sexo_mujer").selected == false || document.getElementById("sexo_mujer").selected==false){
							alert("Selecciona sexo")
						}else{
											
						}*/

					}
				}
			}
		}

		function validar_datos(){
			var cont = 1;			
			var row = table.insertRow(cont);
			var cel5 = row.insertCell(4);
			if (document.getElementById("nombre_usuario").value==null) {
				cel5.innerHTML = "texto vacio";

			}
		}
	</script>	