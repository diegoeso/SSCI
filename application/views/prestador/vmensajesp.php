<div class="row">
  <div class="container text-center">
    <div class="row">
        <div class="col-xs-6 col-md-4">
          <h3 align="left">Mensajes</h3>
        </div>
        <div class="col-xs-12 col-md-8" align="right">
          <br>
          <label>Nombre: </label>
          <input type="text" name="txtBuscar" id="txtBuscar">
           <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="" id="btnBuscarA"><span class="glyphicon glyphicon-search"></span></a>
          <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal"> Nuevo <span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <br>
    
  </div>
     </div>
<section class="container">
    <div class="row">
    <div class="col-md-12">
            <div class="panel-body">
            <table class=" table table-hover table-responsive table-bordered" id="tablaDatos">
                <tr>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Destinatario</th>
                   <th class="text-center">Actividad</th>
                   <th class="text-center">Fecha</th>
                   <th class="text-center">Hora</th>
                  <th class="text-center">Descripción</th>
                </tr>
              </table>
            </div>
        </div>
    </div>  
</section>
<!-- registrar datos -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div>
      <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Mensaje</h4>
            </div>
          <div class="modal-body">
              <!--Formulario de registro-->
              <div class="row">
                <form method="post" action="<?php echo base_url()?>cactividades/guardar">
                <div class="col-xs-7">
                    <div class="from-gruop" align="left">
                      <label>Actividad</label>
                    <select class="form-control" name="cboActividades" id="cboActividades">
                      
                    </select>
                      <input name="txtid" class="hidden" value="<?php echo $this->session->userdata('s_idUsuario')?>"> 
                    </div>
                  </div>                  
                  <div class="col-xs-12 form-group" align="left">
                    <label>Mensaje</label>
                    <textarea type="text" name="txtmensaje" class="form-control"></textarea>  
                    <div align="right">
                    <br>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> -->
                  </div>
                  <div class=""><input class="btn-default" type="submit" value="Enviar" name=""></div>
                  </div>
              </form>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var baseurl =" <?php echo base_url(); ?>";
</script>

  </body>
<script type="text/javascript">
  var idU =" <?php echo $this->session->userdata('s_idUsuario');?>";
</script>
