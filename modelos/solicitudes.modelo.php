<?php

require_once "conexion.php";

class ModeloSolicitudes{

    static public function mdlMostrarEquiposDisponible($fechaInicio, $fechaFin){
        
        $stmt = Conexion::conectar()->prepare("SELECT e.*,
                                                    c.nombre AS categoria_nombre,
                                                    u.nombre AS ubicacion_nombre,
                                                    us.nombre AS cuentadante_nombre
                                                FROM 
                                                    equipos e
                                                JOIN 
                                                    categorias c ON e.categoria_id = c.categoria_id
                                                JOIN 
                                                    ubicaciones u ON e.ubicacion_id = u.ubicacion_id
                                                JOIN 
                                                    usuarios us ON e.cuentadante_id = us.id_usuario                                                
                                                WHERE e.id_estado = 1 OR (
                                                    e.id_estado = 3 AND NOT EXISTS (
                                                        SELECT 1
                                                        FROM prestamos p
                                                        JOIN detalle_prestamo dp ON p.id_prestamo = dp.id_prestamo
                                                        WHERE dp.equipo_id = e.equipo_id
                                                        AND p.tipo_prestamo = 'Reservado'
                                                        AND (
                                                            (p.fecha_inicio BETWEEN :fechaInicio AND :fechaFin) OR
                                                            (p.fecha_fin BETWEEN :fechaInicio AND :fechaFin) OR
                                                            (:fechaInicio BETWEEN p.fecha_inicio AND p.fecha_fin) OR
                                                            (:fechaFin BETWEEN p.fecha_inicio AND p.fecha_fin)
                                                        )
                                                    )
                                                )"
                                            );
                                            

        $stmt->bindParam(":fechaInicio", $fechaInicio, PDO::PARAM_STR);
        $stmt->bindParam(":fechaFin", $fechaFin, PDO::PARAM_STR);
        

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return "vacio";
        }

        $stmt->close();
        $stmt = null;
    } // fin del metodo mdlMostrarEquiposDisponible


    static public function mdlMostrarHistorial($tabla, $item, $valor){
        if ($item != null) {
            // continue;
            $stmt = Conexion::conectar()->prepare("SELECT *  FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }

    static public function mdlMostrarDetalleHistorial($tabla, $item, $valor){
        if ($item != null) {
            var_dump($item, $valor);
            // continue;
            $stmt = Conexion::conectar()->prepare("SELECT *  FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }

    static public function mdlGuardarSolicitud($tabla, $datos){

        $conexion = Conexion::conectar();

        try{
            $conexion->beginTransaction();

            $stmt = $conexion->prepare("INSERT INTO $tabla (usuario_id, tipo_prestamo, fecha_inicio, fecha_fin, estado_prestamo, motivo) VALUES (:usuario_id, :tipo_prestamo, :fechaInicio, :fechaFin, :estado_prestamo, :motivo)");
            $stmt->bindParam(":usuario_id", $datos["idSolicitante"], PDO::PARAM_INT);
            $stmt->bindParam(":tipo_prestamo", $datos["tipo_prestamo"], PDO::PARAM_STR);
            $stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
            $stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);
            $stmt->bindParam(":estado_prestamo", $datos["estado_prestamo"], PDO::PARAM_STR);
            $stmt->bindParam(":motivo", $datos["observaciones"], PDO::PARAM_STR);
            $stmt->execute();

            $idPrestamo = $conexion->lastInsertId();

            foreach ($datos["equipos"] as $equipo) {
                $stmt2 = $conexion->prepare("INSERT INTO detalle_prestamo (id_prestamo, equipo_id, estado) VALUES (:id_prestamo, :equipo_id, 'asignado')", );
                $stmt2->bindParam(":id_prestamo", $idPrestamo, PDO::PARAM_INT);
                $stmt2->bindParam(":equipo_id", $equipo, PDO::PARAM_INT);
                $stmt2->execute();
            }

            $conexion->commit();
            return "ok";

        }catch(PDOException $e){
            $conexion->rollBack();
            return "error";
        }       
        
    } //metodo mdlGuardarSolicitud

}//ModeloSolicitudes
