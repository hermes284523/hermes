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


    <!-- tabla de equipos -->
    <div class="row">
      <!-- TABLE: LATEST ORDERS (Primera tabla) -->
      <div class="col-12 col-md-6"> <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
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
                    <th>Descripcion</th>
                    <th>Disponibles</th>
                    <th>Acciones</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a class="text-dark">Portatil</a></td>
                    <td>12</td>
                    <td>
                      <!-- Botón con efecto hover y active -->
                      <button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i> Agregar</button>
                    </td>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>

                  </tr>

                  <tr>
                    <td><a class="text-dark">Televisor</a></td>
                    <td>6</td>
                    <td><button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i>
                        Agregar</button></td>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>
                  </tr>
                  <tr>
                    <td><a class="text-dark">VideoBeam</a></td>
                    <td>7</td>
                    <td><button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i>
                        Agregar</button></td>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

      <!-- tabla de solicitud -->
      <div class="col-12 col-md-6"> <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title text-blue font-weight-bold">Solicitud</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a class="text-dark">Portatil</a></td>
                    <td><button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>
                      <strong>1</strong> <!-- Número en negrilla -->
                      <button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>
                    </td>
                    <td>
                      <button class="badge badge-danger btn btn-sm btn-danger"><i class="fas fa-times"></i>
                        <!-- Icono de eliminar --></button>
                    </td>
                  </tr>

                  <tr>
                    <td><a class="text-dark">Televisor</a></td>
                    <td><button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>
                      <strong>1</strong> <!-- Número en negrilla -->
                      <button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>
                    </td>
                    <td>
                      <button class="badge badge-danger btn btn-sm btn-danger"><i class="fas fa-times"></i>
                        <!-- Icono de eliminar --></button>
                    </td>
                  </tr>
                  <tr>
                    <td><a class="text-dark">VideoBeam</a></td>
                    <td><button class="circle-icon-small-transparent"><i class="fas fa-minus"></i></button>
                      <strong>1</strong> <!-- Número en negrilla -->
                      <button class="circle-icon-small-transparent"><i class="fas fa-plus"></i></button>
                    </td>
                    <td>
                      <button class="badge badge-danger btn btn-sm btn-danger"><i class="fas fa-times"></i>
                        <!-- Icono de eliminar --></button>
                    </td>
                  </tr>

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
        <!-- /.card -->
      </div>
    </div>

    <!-- tabla de herramientas -->
    <div class="row">
      <!-- TABLE: LATEST ORDERS (Segunda tabla) -->
      <div class="col-12 col-md-6"> <!-- Columna que ocupa la mitad en pantallas medianas y grandes -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title text-blue font-weight-bold">Herramientas</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>Descripcion</th>
                    <th>Disponibles</th>
                    <th>Acciones</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a class="text-dark">Cable HDMI</a></td>
                    <td>12</td>
                    <td>
                      <!-- Botón con efecto hover y active -->
                      <button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i> Agregar</button>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>
                    </td>
                  </tr>

                  <tr>
                    <td><a class="text-dark">Kit Herramientas</a></td>
                    <td>6</td>
                    <td><button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i>
                        Agregar</button></td>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>
                  </tr>
                  <tr>
                    <td><a class="text-dark">Extension</a></td>
                    <td>7</td>
                    <td><button class="badge badge-dark btn btn-sm btn-dark"><i class="fas fa-plus"></i>
                        Agregar</button></td>
                    <td><span class="ml-2"><i class="fas fa-file-alt"></i></span></td>
                  </tr>
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





  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->