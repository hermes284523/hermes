<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-info" data-toggle="modal" data-target="#agregarUsuarioModal">Agregar Usuario</button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Usuarios Registrados</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tblUsuarios" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Ficha</th>
                            <th>Estado</th>
                            <th>Último ingreso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = ""; 
                        $dbname = "usuarios";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Conexión fallida: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM modulousu";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["identificacion"] . "</td>";
                                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td>" . $row["rol"] . "</td>";
                                echo "<td>" . $row["ficha"] . "</td>";
                                
                               
                                $estado = "activo"; 
                                
                                echo "<td>";
                                if ($estado == "activo") {
                                    echo '<button class="btn btn-success btn-xs btnActivarUsuario" id="'.$row["id"].'" estadoUsuario="inactivo">Activo</button>';
                                } else {
                                    echo '<button class="btn btn-danger btn-xs btnActivarUsuario" id="'.$row["id"].'" estadoUsuario="activo">Inactivo</button>';
                                }
                                echo "</td>";
                                
                                echo "<td>" . $row["ultimo_ingreso"] . "</td>";
                                
                                echo "<td>
                                        <div class='btn-group'>
                                            <button class='btn btn-info btn-xs btnVerUsuario' idUsuario='".$row["id"]."' data-toggle='modal' data-target='#verUsuarioModal'><i class='fas fa-eye'></i></button>
                                            <button class='btn btn-warning btn-xs btnEditarUsuario' idUsuario='".$row["id"]."' data-toggle='modal' data-target='#editarUsuarioModal'><i class='fas fa-edit'></i></button>
                                            <button class='btn btn-primary btn-xs btnHistorialUsuario' idUsuario='".$row["id"]."' data-toggle='modal' data-target='#historialUsuarioModal'><i class='fas fa-history'></i></button>
                                        </div>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>No se encontraron usuarios registrados</td></tr>";
                        }
                        
                        // Cerrar conexión
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal para Agregar Usuario -->
<div class="modal fade" id="agregarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarUsuarioModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Ingrese el número de identificación">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre completo">
          </div>
          <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol">
              <option value="">Seleccione un rol</option>
              <option value="administrador">Administrador</option>
              <option value="instructor">Instructor</option>
              <option value="aprendiz">Aprendiz</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ficha">Ficha</label>
            <input type="number" class="form-control" id="ficha" name="ficha" placeholder="Ingrese el número de ficha">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Editar Usuario -->
<div class="modal fade" id="editarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="hidden" id="idUsuarioEdit" name="idUsuarioEdit">
          <div class="form-group">
            <label for="identificacionEdit">Identificación</label>
            <input type="text" class="form-control" id="identificacionEdit" name="identificacionEdit" placeholder="Ingrese el número de identificación">
          </div>
          <div class="form-group">
            <label for="nombreEdit">Nombre</label>
            <input type="text" class="form-control" id="nombreEdit" name="nombreEdit" placeholder="Ingrese el nombre completo">
          </div>
          <div class="form-group">
            <label for="rolEdit">Rol</label>
            <select class="form-control" id="rolEdit" name="rolEdit">
              <option value="">Seleccione un rol</option>
              <option value="administrador">Administrador</option>
              <option value="instructor">Instructor</option>
              <option value="aprendiz">Aprendiz</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fichaEdit">Ficha</label>
            <input type="number" class="form-control" id="fichaEdit" name="fichaEdit" placeholder="Ingrese el número de ficha">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Ver Usuario -->
<div class="modal fade" id="verUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="verUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verUsuarioModalLabel">Detalles del Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Identificación:</label>
          <p id="verIdentificacion"></p>
        </div>
        <div class="form-group">
          <label>Nombre:</label>
          <p id="verNombre"></p>
        </div>
        <div class="form-group">
          <label>Rol:</label>
          <p id="verRol"></p>
        </div>
        <div class="form-group">
          <label>Ficha:</label>
          <p id="verFicha"></p>
        </div>
        <div class="form-group">
          <label>Último Ingreso:</label>
          <p id="verUltimoIngreso"></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Historial Usuario -->
<div class="modal fade" id="historialUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="historialUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="historialUsuarioModalLabel">Historial de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Detalles</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Editar Usuario -->
<div class="modal fade" id="editarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" id="idUsuarioEdit" name="idUsuarioEdit">
                    <div class="form-group">
                        <label for="identificacionEdit">Identificación</label>
                        <input type="text" class="form-control" id="identificacionEdit" name="identificacionEdit" placeholder="Ingrese el número de identificación">
                    </div>
                    <div class="form-group">
                        <label for="nombreEdit">Nombre</label>
                        <input type="text" class="form-control" id="nombreEdit" name="nombreEdit" placeholder="Ingrese el nombre completo">
                    </div>
                    <div class="form-group">
                        <label for="rolEdit">Rol</label>
                        <select class="form-control" id="rolEdit" name="rolEdit">
                            <option value="">Seleccione un rol</option>
                            <option value="administrador">Administrador</option>
                            <option value="instructor">Instructor</option>
                            <option value="aprendiz">Aprendiz</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fichaEdit">Ficha</label>
                        <input type="number" class="form-control" id="fichaEdit" name="fichaEdit" placeholder="Ingrese el número de ficha">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Ver Usuario -->
<div class="modal fade" id="verUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="verUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verUsuarioModalLabel">Detalles del Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Identificación:</label>
                    <p id="verIdentificacion"></p>
                </div>
                <div class="form-group">
                    <label>Nombre:</label>
                    <p id="verNombre"></p>
                </div>
                <div class="form-group">
                    <label>Rol:</label>
                    <p id="verRol"></p>
                </div>
                <div class="form-group">
                    <label>Ficha:</label>
                    <p id="verFicha"></p>
                </div>
                <div class="form-group">
                    <label>Último Ingreso:</label>
                    <p id="verUltimoIngreso"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Historial Usuario -->
<div class="modal fade" id="historialUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="historialUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="historialUsuarioModalLabel">Historial de Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Acción</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody id="historialUsuarioTabla">
                            <!-- Aquí se cargaría dinámicamente el historial del usuario -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Incluye Font Awesome para los iconos si no lo has incluido ya en tu layout principal -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
