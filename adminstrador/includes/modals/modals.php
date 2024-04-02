<!-- MODAL USUARIO -->
<div class="modal fade" id="modalUsuario" tabindex="-1"  role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUsuario" name="formUsuario">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>

          <div class="form-group">
            <label for="apellidoPaterno">Primer Apellido</label>
            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno">
          </div>

          <div class="form-group">
            <label for="apellidoMaterno">Segundo Apellido</label>
            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno">
          </div>

          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
          </div>

          <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" name="sexo" id="sexo">
          </div>
          
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>

          <div class="form-group">
            <label for="listRol">Rol</label>
            <select class="form-control" name="listRol" id="listRol">
              <option value="1">Administrador</option>
              <option value="2">Profesor</option>
              <option value="3">Estudiante</option>
            </select>
          </div>

          <div class="form-group">
            <label for="listEstado">Estado</label>
            <select class="form-control" name="listEstado" id="listEstado">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
