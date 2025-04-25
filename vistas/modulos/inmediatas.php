<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Solicitud Inmediata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inmediata</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Portátiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Portátiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Portátiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Portátiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- row  -->

            <div class="row">
                <!-- Left side - Equipos -->


                <div class="col-md-7">
                    <div class="card">

                        <div class="card-header">
                            <h1 class="card-title">EQUIPOS</h1>
                        </div>

                        <div class="card-body p-10">

                            <!-- SOLICITANTE -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="NumeroIdSolicitante" id="NumeroIdSolicitante" placeholder="Número" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <button class="btn btn-primary" id="btnBuscarSolicitante"><i class="fas fa-search"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="infoEquiposSolicitados d-none">

                                

                                <?php

                                //capturamos la fecha de hoy y la asignmaso a fechaInicio y fechaFin
                                $hoy = date("Y-m-d");
                                $respuesta = ControladorSolicitudes::ctrMostrarEquiposDisponible($hoy, $hoy);

                                ?>

                                <!-- TABLA DE EQUIPOS DISPONIBLES EN EL RANGO DE FECHAS SELECCIONADO  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="tblActivosSolicitar" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Descripción</th>
                                                    <th>Serial</th>
                                                    <th>Categoría</th>
                                                    <th>Ubicación</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Loop through the equipos and display them in the table
                                                foreach ($respuesta as $key => $value) {
                                                    echo '<tr>
                                                        <td>' . $value["descripcion"] . '</td>
                                                        <td>' . $value["etiqueta"] . '</td>
                                                        <td>' . $value["categoria_nombre"] . '</td>
                                                        <td>' . $value["ubicacion_nombre"] . '</td>
                                                        <td> <button class="btn btn-primary btn-sm btnAgregarEquipo recoverButton" idEquipoAgregar="' . $value["equipo_id"] . '"><i class="fas fa-plus"></i> Agregar</button></td>
                                                    </tr>';
                                                }



                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- d-none -->

                        </div>
                        <!-- card.body  -->
                    </div>
                    <!-- card  -->
                </div>
                <!-- col-md-7  -->

                <!-- Right side - Solicitud -->
                <div class="col-md-5">
                    <div class="card">

                        <div class="card-header">
                            <h1 class="card-title">SOLICITUD</h1>
                        </div>

                        <form action="" method="POST" id="idFormularioSolicitud">
                            <div class="card-body">

                                <!-- =============================================

                                    FORMULARIO DE SOLICITUD 

                            ============================================= -->



                                <!-- NOMBRE SOLICITANTE -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="hidden" name="idSolicitante" id="idSolicitante">
                                                <input type="text" class="form-control" name="nombreSolicitante" id="nombreSolicitante" placeholder="Nombre solicitante" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="infoEquiposSolicitados d-none">

                                    


                                    <div class="form-group nuevoEquipo">
                                        <!-- //contenido dinamico desde js -->
                                    </div>



                                    <!-- OBSERVACIONES  -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>Observaciones</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- d-none-->
                            </div>
                            <!-- card-body  -->

                            <div class="infoEquiposSolicitados d-none">

                                <div class="card-footer">

                                    <div class="action-buttons">
                                        <button type="button" class="btn btn-danger btnCancelarSolicitud">Cancelar</button>
                                        <button type="submit" class="btn btn-primary btnGuardarSolicitud">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- d-none-->



                        </form>




                    </div>

                    <div class="infoEquiposSolicitados d-none">

                        <div class="card">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalHistoricoSolicitudes">Historial</button>
                        </div>

                    </div>
                    <!-- d-none-->

                </div>





            </div>
            <!-- row  -->


        </div>

    </section>
</div>