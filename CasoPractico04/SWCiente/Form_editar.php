
<form action= "Actualizar_dulce.php" class="md-float-material form-material " id="frm_registrar"  enctype="multipart/form-data" method="POST" >

<!-- Modal -->
<div class="modal fade" id="modificar_dulce" tabindex="-1" role="dialog" aria-labelledby="modificar_dulce Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modificar_dulce Label">Modificar datos del dulce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <input type="hidden" name="id_e" id="id_e"><br> 
      <input type="hidden" name="img_e" id="img_e"><br> 
      <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="file" id="imagen_e"  name="imagen_e" class="form-control" required="">
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" id="nombre_e"  name="nombre_e" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Nombre</label>
                                        </div>
                                    </div>

                             </div>
                            
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" id="descripcion_e"  name="descripcion_e" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" id="origen_e"  name="origen_e" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Origen</label>
                                        </div>
                                    </div>
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
</form>