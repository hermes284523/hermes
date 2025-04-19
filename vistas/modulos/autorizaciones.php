<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizaciones</title>
    <!-- Vincular CSS de AdminLTE y Bootstrap -->
    <link rel="stylesheet" href="path/to/adminlte.min.css">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .checkbox-group {
            display: flex;
            gap: 10px; /* Espacio entre los checkboxes */
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Autorizaciones</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Usuarios</th>
                                        <th>Fecha solicitud</th>
                                        <th>Fecha de reserva</th>
                                        <th>Fecha de entrega</th>
                                        <th>Autorizaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se generarán las filas dinámicamente -->
                                    <!-- Ejemplo de datos, reemplaza esto con tu lógica de backend -->
                                    <tr>
                                        <td>Cristian Orozco</td>
                                        <td>11/5/2025</td>
                                        <td>18/6/2025</td>
                                        <td>18/6/2025</td>
                                        <td>
                                            <div class="checkbox-group">
                                                <input type="checkbox" id="auth1_1">
                                                <input type="checkbox" id="auth1_2">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Ver</button>
                                            <button class="btn btn-primary btn-sm">Documento</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luis Hernei</td>
                                        <td>11/5/2025</td>
                                        <td>18/6/2025</td>
                                        <td>18/6/2025</td>
                                        <td>
                                            <div class="checkbox-group">
                                                <input type="checkbox" id="auth2_1">
                                                <input type="checkbox" id="auth2_2">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Ver</button>
                                            <button class="btn btn-primary btn-sm">Documento</button>
                                        </td>
                                    </tr>
                                    <!-- Agrega más filas según sea necesario -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- Vincular JS de AdminLTE y Bootstrap -->
<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
<script src="path/to/adminlte.min.js"></script>
</body>
</html>