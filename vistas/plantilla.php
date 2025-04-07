<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROYECTO HERMES CCRM</title>

 <!-- DataTables -->
 <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vistas/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  


  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
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
  <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>


</head>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<body class="hold-transition sidebar-mini login-page">

<?php

if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
  echo '<div class="wrapper">';

  // Lógica para manejar el cambio de estado
  if (isset($_GET["estado"]) && isset($_GET["id"])) {
      $id = intval($_GET["id"]); // Convertir el ID a entero
      $nuevoEstado = $_GET["estado"]; // Capturar el nuevo estado

      // Redirigir para reflejar los cambios
      if ($respuesta === "ok") {
          echo '<script>
              window.location = "index.php?ruta=sedes";
          </script>';
      } else {
          echo '<script>alert("Error al cambiar el estado.");</script>';
      }
  }

  echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.remove("login-page");
    });
  </script>';

  include "modulos/cabezote.php";
  include "modulos/menu.php";
  
  if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "sedes" ||
        $_GET["ruta"] == "fichas" ||
        $_GET["ruta"] == "permisos" ||
        $_GET["ruta"] == "inventario" ||
        $_GET["ruta"] == "recepcion" ||
        $_GET["ruta"] == "reservas" ||
        $_GET["ruta"] == "inmediatas" ||
        $_GET["ruta"] == "autorizaciones" ||
        $_GET["ruta"] == "vencidas" ||
        $_GET["ruta"] == "devoluciones" ||
        $_GET["ruta"] == "salidas" ||
        $_GET["ruta"] == "reportes" ||
        $_GET["ruta"] == "salir") {
      include "modulos/" . $_GET["ruta"] . ".php";
    } else {
      include "modulos/error404.php";
    }
  }

  include "modulos/footer.php";
  echo '</div>'; 

} else {
  include "modulos/login.php";
}

?>

<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/sedes.js"></script>


</body>
</html>