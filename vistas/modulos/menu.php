<!-- Main Sidebar Container -->
<nav class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Logo y nombre del sistema -->
        <div class="text-center py-3">
            <img src="vistas/img/logo.png" alt="logo" style="height: 70px; width: 70px; border-radius: 50%;">
            <p style="font-weight: bold; margin-top: 10px;">HERMES</p>
        </div>

        <!-- Usuario -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/img/albert.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
            </div>
            <div class="info">
                <a href="#" class="d-block">Camilo Osorio</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Inicio -->
                <li class="nav-item">
                    <a href="inicio" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>

                <!-- Administrar -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Administrar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="sedes" class="nav-link">
                                <i class="fas fa-building nav-icon"></i>
                                <p>Sedes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="fichas" class="nav-link">
                                <i class="fas fa-id-card nav-icon"></i>
                                <p>Fichas</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Usuarios -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuarios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="usuarios" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="permisos" class="nav-link">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Permisos</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Equipos -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Equipos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="inventario" class="nav-link">
                                <i class="fas fa-box-open nav-icon"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="recepcion" class="nav-link">
                                <i class="fas fa-concierge-bell nav-icon"></i>
                                <p>Recepción/Traspaso</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Solicitudes -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Solicitudes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="reservas" class="nav-link">
                                <i class="fas fa-calendar-check nav-icon"></i>
                                <p>Reservas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="inmediatas" class="nav-link">
                                <i class="fas fa-bolt nav-icon"></i>
                                <p>Inmediatas</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Autorizar -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Autorizar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="autorizaciones" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Autorizaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="vencidas" class="nav-link">
                                <i class="fas fa-exclamation-circle nav-icon"></i>
                                <p>Solicitudes vencidas</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Devoluciones -->
                <li class="nav-item">
                    <a href="devoluciones" class="nav-link">
                        <i class="fas fa-undo nav-icon"></i>
                        <p>Devoluciones</p>
                    </a>
                </li>

                <!-- Salidas -->
                <li class="nav-item">
                    <a href="salidas" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Salidas</p>
                    </a>
                </li>

                <!-- Reportes -->
                <li class="nav-item">
                    <a href="reportes" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Reportes</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</nav>