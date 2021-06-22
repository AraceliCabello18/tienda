

<!-- Modal -->
<div class="modal fade" id="modalActualizarAccesorios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Accesorios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizaAccesorios" method="post" onsubmit="return agregarNuevoAccesorios()">
            <label for="modelou">Modelo</label>
            <input type="text" class="form-control" id="modelou" name="modelou" required>
            <label for="descripcionu">Descripcion</label>
            <input type="text" class="form-control" id="descripcionu" name="descripcionu" required>
            <label for="preciou">precio</label>
            <input type="text" class="form-control" id="preciou" name="preciou" required>
            <br>
            <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>