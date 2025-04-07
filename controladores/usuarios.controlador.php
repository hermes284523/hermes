<?php

class ControladorUsuarios{

    public function ctrIngresoUsuario(){

        if (isset($_POST["ingUsuario"])){
            if (preg_match('/^[a-zA-Z0-9_]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuario"; // Cambiado a singular
                $item = "usuario"; // Cambiado a minúscula
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
                
                // Verificar que $respuesta sea un array antes de acceder a sus elementos
                if($respuesta && $respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["clave"] == $_POST["ingPassword"]){
                    
                    $_SESSION["iniciarSesion"] = "ok";
                    echo '<script>

                        window.location = "inicio";

                    </script>';
                }else{

                    echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

                }

            }

        }
    }
}

?>