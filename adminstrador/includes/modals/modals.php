
<div class="modal fade" id="modalAdmin" tabindex="-1"  role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span  aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="formAdmin"  name="formAdmin" >
          <div class="form-group">
            <label for="control-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>

          <div class="form-group">
            <label for="control-label">Primer Apellido</label>
            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno">
          </div>

          <div class="form-group">
            <label for="control-label">Segundo Apellido</label>
            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno">
          </div>

          <div class="form-group">
            <label for="control-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
          </div>

          <div class="form-group">
            <label for="control-label">Sexo</label>
            <input type="text" class="form-control" name="sexo" id="sexo">
          </div>
          
          
          <div class="form-group">
            <label for="control-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>

          <div class="form-group">
            <label for="listRol">Rol</label>
            <select  class="form-control"name="listRol" id="listRol">
              <option value="1">Adminstrador</option>
              <option value="2">Asistente</option>
            </select>
          </div>

          <div class="form-group">
            <label for="listRol">Estado</label>
            <select  class="form-control"name="listRol" id="listRol">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" type="subtmi">Guardar</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

