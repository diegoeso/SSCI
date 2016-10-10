<div class="row">
  <div class="container text-center">
    <div class="row">
        <div class="col-xs-6 col-md-4">
          <h3 align="left">Asignación de Actividades</h3>
        </div>
        <div class="col-xs-12 col-md-8" align="right">
          <br>
          <label>Nombre: </label>
          <input type="text" name="txtBuscar" id="txtBuscar">
           <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscarA"><span class="glyphicon glyphicon-search"></span></a>
          <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Agregar <span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <br>
    
  </div>
</div>     
<div class="container">
  <div class="row container" >
    <table class="table table-bordered" id="tablaDatos">
      <!-- <thead>
        <tr>
          <td class="text-center">Prestador</td>
          <td class="text-center">Actividad</td>
          <td class="text-center">Status</td>
          <td class="text-center">Fecha Inicio</td>
          <td class="text-center">Opción</td>
        </tr>
      </thead>      -->         
    </table>          
  </div>
 </div>
 <!--Formulario de registro-->
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Asignación de Actividades</h4>
        </div>
      <div class="modal-body">
      <form action="<?php echo base_url()?>casignaciones/guardar" method="post">
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label>
                Prestador:
              </label> 
              <select name="cmbPrestador" id="cmbPresta" class="form-control" type="submit"></select>
            </div>
          </div>
          <div class="col-xs-6">
              <div class="form-group">
                <label>
                Actividad:
              </label> 
              <select name="cmbActividad" id="cmbActi" class="form-control" ></select>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label>Status:</label>
                <select name="cmbStatus" id="cmbStatus" class="form-control">
                  <option value="0">Urgente</option>
                  <option value="1">No urgente</option>
                </select> 
              <!--<input name="responsable" class="form-control">-->
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label>
                Fecha Inicio:
              </label> 
              <input type="date" name="txtFechaIni" id="txtFechaIni" class="form-control">
              <!--<textarea name="descripcion" class="form-control" rows="5"></textarea>-->
              </div>
            </div>
            <div class="col-xs-4">
              <!-- <div class="form-group"> -->
                <label>
                Fecha Termino:
              </label> 
              <input type="date" name="txtFechaTer" id="txtFechaTer" class="form-control">
              <!-- </div> -->
            </div>
          </div>
          <div class="row">
            
          </div>
          <div align="right">
             <input type="submit" value="Guardar" name="" class="btn btn-default">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre del formulario de registro -->
<!--Formulario de editar registro-->
  <div class="modal fade" tabindex="-1" role="dialog" id="editar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Asignación de Actividades</h4>
        </div>
      <div class="modal-body">
      <form action="<?php echo base_url()?>casignaciones/editar" method="post">
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <input type="text" class="hidden" id="id" name="id">
              <label>
                Prestador:
              </label> 
              <select name="cmbPrestadorsele" id="cmbPrestasele" class="form-control" type="submit"></select>
            </div>
          </div>
          <div class="col-xs-6">
              <div class="form-group">
                <label>
                Actividad:
              </label> 
              <select name="cmbActividadsele" id="cmbActisele" class="form-control" ></select>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label>Status:</label>
                <select name="cmbStatussele" id="cmbStatussele" class="form-control">
                  <option value="0">Urgente</option>
                  <option value="1">No urgente</option>
                </select> 
              <!--<input name="responsable" class="form-control">-->
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label>
                Fecha Inicio:
              </label> 
              <input type="date" name="txtFechaInisele" id="txtFechaInisele" class="form-control">
              <!--<textarea name="descripcion" class="form-control" rows="5"></textarea>-->
              </div>
            </div>
            <div class="col-xs-4">
              <!-- <div class="form-group"> -->
                <label>
                Fecha Termino:
              </label> 
              <input type="date" name="txtFechaTersele" id="txtFechaTersele" class="form-control">
              <!-- </div> -->
            </div>
          </div>
          <div class="row">
            
          </div>
          <div align="right">
             <input type="submit" value="Guardar" name="" class="btn btn-default">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- cierre del formulario de editar -->
  <script type="text/javascript">
    var baseurl = "<?php echo base_url();?>";
  </script>