<form action= "Eliminar_dulce.php" class="md-float-material form-material " id="frm_registrar"  enctype="multipart/form-data" method="POST" >

    <!-- Modal -->
    <div class="modal fade" id="eliminar_dulce" tabindex="-1" role="dialog" aria-labelledby="eliminar_dulce Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="eliminar_dulce Label">¿Realmente decea eliminar el elemento seleccionado?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    
          <input type="hidden" name="id_eliminar" id="id_eliminar"><br> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </form>