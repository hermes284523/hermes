<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reservas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Reservas</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- Info Box 1 -->
      <div class="col-12 col-sm-4 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-laptop"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Portatiles</span>
            <span class="info-box-number">630</span>
          </div>
        </div>
      </div>

      <!-- Info Box 2 -->
      <div class="col-12 col-sm-4 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-video"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">VideoBeam</span>
            <span class="info-box-number">25</span>
          </div>
        </div>
      </div>

      <!-- Info Box 3 -->
      <div class="col-12 col-sm-4 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-tv"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Televisores</span>
            <span class="info-box-number">5</span>
          </div>
        </div>
      </div>

      <!-- Info Box 4 -->
      <div class="col-12 col-sm-4 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-cogs"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Equipos</span>
            <span class="info-box-number">45</span>
          </div>
        </div>
      </div>
    </div>

    <!-- contenedor flex para Equipos y Solicitud -->
    <div class="d-flex flex-wrap justify-content-start">
      <!-- tabla de equipos -->
      <div class="p-2" style="flex: 1; min-width: 300px;">
        <!-- TABLE: LATEST ORDERS (Primera tabla) -->
        <div class="col-12 col-md-12 order-1 order-md-1">
          <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title text-blue font-weight-bold">Equipos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Descripcion</th>
                      <th>Disponibles</th>
                      <th>Acciones</th>
                      <th></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $item = null;
                    $valor = null;
                    $reservas = ControladorReservas::ctrMostrarReservas($item, $valor);
                    foreach ($reservas as $key => $value) {
                      echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $value["descripcion"] . '</td>
                        <td>' . $value["disponibles"] . '</td>
                        
                        
                        <td>';

                      echo '<button class="btn btn-success btn-xs btnReserva recuperar" idReserva="' . $value["id"] . '"><i class="fas fa-plus"></i>Agregar</button>';


                      echo '<td>
                                <button class="btn btn-default btn-xs btnEditarSede" idSede="' . $value["id"] . '" data-toggle="modal" data-target="#modalDetalle"><i class="fas fa-file-alt"></i></button>
                            </td>
                        </tr>';
                    }
                    ?>


                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>





        <!-- tabla de herramientas -->

        <!-- TABLE: LATEST ORDERS (Segunda tabla) -->
        <div class="col-12 col-md-12 order-2 order-md-3">
          <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title text-blue font-weight-bold">Herramientas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 ">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Descripcion</th>
                      <th>Disponibles</th>
                      <th>Acciones</th>
                      <th></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $item = null;
                    $valor = null;
                    $reservas_h = ControladorReservas::ctrMostrarReservasH($item, $valor);
                    foreach ($reservas_h as $key => $value) {
                      echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $value["descripcion"] . '</td>
                        <td>' . $value["disponibles"] . '</td>
                        
                        
                        <td>';

                      echo '<button class="btn btn-success btn-xs btnReservaH devolver" idHerramienta="' . $value["id_herramienta"] . '" estadoSede="Inactiva"><i class="fas fa-plus"></i>Agregar</button>';


                      echo '<td>
                                <button class="btn btn-default btn-xs btnEditarSede" idSede="' . $value["id_herramienta"] . '" data-toggle="modal" data-target="#modalDetalle"><i class="fas fa-file-alt"></i></button>
                            </td>
                        </tr>';
                    }
                    ?>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>

      <!-- tabla de solicitud -->
      <div class="col-12 col-md-6 order-3 order-md-2">
        <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title text-blue font-weight-bold">Solicitud</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0 ">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="nuevoProducto">


                  <style>
                    /* Botón sin color de fondo y borde */
                    /* Botón con fondo de color */
                    .circle-icon-small-transparent {
                      display: inline-flex;
                      align-items: center;
                      justify-content: center;
                      width: 30px;
                      height: 30px;
                      border-radius: 50%;
                      /* Hace que el botón sea circular */
                      background-color: #d3d3d3;
                      /* Color de fondo azul (puedes cambiarlo) */
                      color: white;
                      /* Color del icono (blanco) */
                      font-size: 16px;
                      /* Tamaño pequeño para el icono */
                      border: 1px solid #d3d3d3;
                      /* Borde azul oscuro (puedes cambiarlo) */
                    }
                  </style>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="form-group">
          <textarea id="inputDescription" class="form-control" rows="4" placeholder="Observaciones"></textarea>
        </div>
        <div class="col-12 witch-12 d-flex justify-content-end">
          <button type="submit" value="cancelar" class="btn btn-danger w-25 mr-3">Cancelar</button>
          <button type="submit" value="aceptar" class="btn btn-success w-25 ">Aceptar</button>
        </div>
        <div class="col-12 witch-12 p-3 d-flex justify-content-end">
          <button type="submit" value="historial" class="btn btn-dark w-100 p-100">Historial</button>
        </div>
        <!-- /.card -->
      </div>
    </div>






  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->