<form action= "Agregar_dulce.php" class="md-float-material form-material " id="frm_registrar"  enctype="multipart/form-data" method="POST" >

    <!-- Modal -->
    <div class="modal fade" id="agregar_dulce" tabindex="-1" role="dialog" aria-labelledby="agregar_dulce Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="agregar_dulce Label">Datos del dulce</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    
        
          <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="file" id="imagen"  name="imagen" class="form-control" required="">
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="text" id="nombre"  name="nombre" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nombre</label>
                                            </div>
                                        </div>

                                 </div>
                                
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="text" id="descripcion"  name="descripcion" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Descripcion</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="text" id="origen"  name="origen" class="form-control" required="">
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