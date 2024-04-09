<div class="modal fade" id="formularioNota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Nueva nota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="formNota">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese título" required>
          </div>
          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="5" class="form-control" placeholder="Ingrese descripción" required></textarea>
          </div>
          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de entrega</label>
            <input type="date" class="form-control" name="fecha" id="fecha" required>
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select" required>
              <option value="">Seleccione Estado</option>
              <option value="0">Pendiente</option>
              <option value="1">Entregado</option>
            </select>
          </div>

        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">
            Crear Nota <i class="fa-solid fa-file-circle-plus"></i>
        </button>
        </form>
      </div>
    </div>
  </div>
</div>