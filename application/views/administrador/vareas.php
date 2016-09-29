<div class="row">
  <div class="container text-center">
    <div class="row">
        <div class="col-xs-6 col-md-4">
          <h3 align="left">Áreas</h3>
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
      <thead>
        <tr>
          <td class="text-center">Nombre Area</td>
          <td class="text-center">Descripcion</td>
          <td class="text-center">Responsable</td>
          <td class="text-center">Opción</td>
        </tr>
      </thead>              
    </table>          
  </div>
 </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Area</h4>
        </div>
      <div class="modal-body">
        <!--Formulario de registro-->
  
      <form action="<?php echo base_url()?>careas/guardar" method="post">
        <div class="row">
          <div class="col-xs-7">
            <div class="form-group">
              <label>
                Nombre del área:
              </label> 
              <input name="nombreArea" class="form-control" placeholder="Nombre del área">
            </div>
          </div>
          </div>
           <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label>
                Descripción:
              </label> 
              <textarea name="descripcion" class="form-control" rows="5" placeholder="Descripción"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-xs-7">
            <div class="form-group">
              <label>
                Responsable:
              </label> 
              <input name="responsable" class="form-control" placeholder="Responsable del área">
            </div>
          </div>
           
      </div>
      <div class="row">
         <?php echo validation_errors(); ?>
      </div>
      <div align="right">
          <input type="submit" value="Guardar" name="">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
      <!--<?php //validation_errors();?>-->
    </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    var baseurla = "<?php echo base_url();?>";
</script>