<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes de Equipos</title>
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
                        <h1>Solicitudes Vencidas</h1>
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
                                        <th>N° Solicitud</th>
                                        <th>Usuarios</th>
                                        <th>Fecha solicitud</th>
                                        <th>Número de serie</th>
                                        <th>Tipo</th>
                                        <th>Cantidad de objetos</th>
                                        <th>Fecha de entrega</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se generarán las filas dinámicamente -->
                                    <!-- Ejemplo de datos, reemplaza esto con tu lógica de backend -->
                                    <tr>
                                        <td>#1234567</td>
                                        <td>Alejo Claro<br>Aprendiz</td>
                                        <td>11/5/2025</td>
                                        <td>#8756483</td>
                                        <td>Video Beam</td>
                                        <td>02</td>
                                        <td>11/5/2025</td>
                                    </tr>
                                    <tr>
                                        <td>#1234568</td>
                                        <td>Zelda Millan<br>Instructor</td>
                                        <td>11/5/2025</td>
                                        <td>#8756483</td>
                                        <td>Equipo</td>
                                        <td>02</td>
                                        <td>11/5/2025</td>
                                    </tr>
                                    <tr>
                                        <td>#1234569</td>
                                        <td>Vegeto Osorio<br>Aprendiz</td>
                                        <td>11/5/2025</td>
                                        <td>#8756483</td>
                                        <td>Video Beam</td>
                                        <td>02</td>
                                        <td>11/5/2025</td>
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

</body>
</html>