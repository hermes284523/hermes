<?php

    require_once "conexion.php";

    Class ModeloSedes{
        static public function mdlMostrarSedes($tabla, $item, $valor){
            if($item != null){
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                $stmt -> bindParam(":" . $item, $valor, PDO::PARAM_INT);
                $stmt -> execute();
                return $stmt -> fetch();
            } else {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
                $stmt -> execute();
                return $stmt -> fetchAll();
            }

            $stmt -> close();
            $stmt = null;
        }

        static public function mdlCrearSedes($tabla, $datos){
            try{
                $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_sede, direccion, descripcion) VALUES (:nombre_sede, :direccion, :descripcion)");
                $stmt -> bindParam(":nombre_sede", $datos["nombre_sede"], PDO::PARAM_STR);//Verifica y asegura que no sea un sql injection
                $stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);//:direccion la variable preparada
                $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);//Verifica y asegura que no sea un sql injection

                if($stmt->execute()){
                    return "ok";
                } else {
                    $errorInfo = $stmt->errorInfo();
                    return "Error:" . $errorInfo[2];//[2] retorna el tipo de
                }

            } catch (PDOException $e){
                return "Error:" . $e->getMessage();
            } finally {
                $stmt -> closeCursor();
                $stmt = null;
            }
        }

        static public function mdlEditarSede($tabla, $datos){
            try{
                $sql = "UPDATE $tabla SET nombre_sede = :nombre  , direccion = :direccion  , descripcion = :descripcion  WHERE id_sede = :id  " ;
                $stmt = Conexion::conectar()->prepare($sql);
                $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
                $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
                $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
                $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

                if($stmt->execute()){
                    return "ok";
                }else{
                    return "error";
                }
            }catch (PDOException $e){
                return "error :". $e->getMessage();
            }finally{
                $stmt -> closeCursor();
                $stmt = null;
            }
        }

        static public function mdlCambiarEstadoSede($valorId, $valorEstado){
            $stmt = Conexion::conectar()->prepare("UPDATE sedes SET estado=:estado WHERE id_sede = :id_sede");
            $stmt->bindParam("id_sede", $valorId, PDO::PARAM_INT);
            $stmt->bindParam("estado", $valorEstado, PDO::PARAM_STR);

            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }

            $stmt->closeCursor();
            $stmt = null;

        }
    }

?>