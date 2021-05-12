<?php
    require_once 'conexionBD.php';
    class UserM extends ConexionBD{
        static public function IngresoM($user){

            $pdo = ConexionBD::cBD()->prepare("SELECT Nombre, clave FROM usuarios WHERE Nombre=:nombre");
            $pdo -> bindParam(":nombre", $user, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }
        //Mostrar usuarios
        static public function EditarUserM($user, $tablaBD){
            $pdo = ConexionBD::cBD()->prepare("SELECT nombre, nombrep, paterno, materno, email FROM usuarios WHERE nombre=:user");
            $pdo->bindParam(":user", $user, PDO::PARAM_STR);
            $pdo->execute();
            return $pdo->fetch();
            $pdo->close();
        }
        //Actualizar Empresa
        static public function UpdateEM($name){
            $ruta = "imagen.jpg";
            $pdo = ConexionBD::cBD()->prepare("UPDATE empresa SET name=:nombre,ubicacion=:ruta");
            $pdo->binParam(":nombre", $name, PDO::PARAM_STR);
            $pdo->bindParam(":ruta", $ruta, PDO::PARAM_STR);
            if($pdo->execute()){
                return  "Bien";
            }else{
                return "Mal";
            }
        }
    }
?>