<?php

  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hermes 2847523 Beta</title>

    
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  
    <!-- daterange picker -->
    <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">      
    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
    <!-- mi css -->
    <link rel="stylesheet" href="vistas/css/plantilla.css">

    <!-- ================================================================================================== -->    
    
    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- DataTables  & Plugins  -->
    <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="vistas/plugins/jszip/jszip.min.js"></script>
    <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- InputMask -->
    <script src="vistas/plugins/moment/moment.min.js"></script>
    <script src="vistas/plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- date-range-picker -->
    <script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
    
    <!-- SweetAlert2 -->
    <!-- <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="vistas/dist/js/demo.js"></script>   -->

</head>



<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->


<?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {


    echo '<script>
      document.addEventListener("DOMContentLoaded", function() {
        document.body.classList.remove("login-page");
      });
    </script>';




    echo '<div class="wrapper">';
    include "modulos/cabezote.php";
    include "modulos/menu.php";

    if (isset($_GET["ruta"])) {
      if ($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "fichas" ||
          $_GET["ruta"] == "sedes" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "roles" ||
          $_GET["ruta"] == "modulos" ||
          $_GET["ruta"] == "permisos" ||
          $_GET["ruta"] == "inventario" ||
          $_GET["ruta"] == "recepcion" ||
          $_GET["ruta"] == "solicitudes" ||
          $_GET["ruta"] == "solicitudesold" ||
          $_GET["ruta"] == "autorizaciones" ||
          $_GET["ruta"] == "vencidas" ||
          $_GET["ruta"] == "devoluciones" ||
          $_GET["ruta"] == "salidas" ||
          $_GET["ruta"] == "reportes" ||
          $_GET["ruta"] == "desactivado" ||
          $_GET["ruta"] == "salir") {

            include "modulos/".$_GET["ruta"].".php";
      } else {
        include "modulos/error404.php";
      }
    }
    
    include "modulos/footer.php";
    echo '</div>';
    echo '<!-- ./wrapper -->';
  } else {
    include "modulos/login.php";
  }
    ?>




  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/sedes.js"></script>
  <script src="vistas/js/fichas.js"></script>
  <script src="vistas/js/roles.js"></script>
  <script src="vistas/js/permisos.js"></script>
  <script src="vistas/js/modulos.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/solicitudes.js"></script>
</body>
</html>
