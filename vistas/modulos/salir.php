<?php
    // Limpiar todas las variables de sesión
    $_SESSION = array();
    
    // Destruir la sesión
    session_destroy();
    
    // Redirigir al usuario a la página de inicio
    echo '<script> window.location = "index.php"; </script>';
?>