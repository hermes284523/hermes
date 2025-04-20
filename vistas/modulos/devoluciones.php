<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>devoluciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">inicio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="tblSedes" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>identificacion</th>
                      <th>Nombre/rol</th>
                      <th>ficha</th>
                      <th>fecha</th>
                      <th>placa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>123456</td>
                      <td>Juan Perez / Admin</td>
                      <td>F123</td>
                      <td>2023-10-01</td>
                      <td>ABC123</td>
                    </tr>
                    <tr>
                      <td>789012</td>
                      <td>Maria Lopez / User</td>
                      <td>F456</td>
                      <td>2023-10-02</td>
                      <td>XYZ789</td>
                    </tr>
                    <tr>
                      <td>345678</td>
                      <td>Carlos Ruiz / Manager</td>
                      <td>F789</td>
                      <td>2023-10-03</td>
                      <td>LMN456</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <div class="card-footer d-flex justify-content-end ml-2">
      <button  class="btn btn-danger float-right mr-2 ml-2" data-toggle="modal" data-target="#modalMalEstado">
        Mal Estado
      </button>
      <button  class="btn btn-success float-right" data-toggle="modal" data-target="#modalBuenEstado" >
        Buen Estado
      </button>
    </div>
</div>