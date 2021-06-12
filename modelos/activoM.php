<?php
    require_once "conexionBD.php";
    class ActivoM extends ConexionBD{
        #Consultamos los datos del usuario
        static public function MostrarM($user){
            $pdo = ConexionBD::cBD()->prepare("SELECT nombre, nombrep, paterno, materno, email FROM usuarios WHERE nombre=:nombre");
            $pdo -> bindParam(":nombre", $user, PDO::PARAM_STR);
            $pdo->execute();
            return $pdo->fetch();
            $pdo->close();
        }
        #Actualizamos el nombre de la empresa
        static public function EmpresaM($nombre){
            $pdo = ConexionBD::cBD()->prepare("UPDATE empresa SET nombre=:nombre WHERE id =1");
            $pdo -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
            if($pdo -> execute()){
                return "Bien";
            }else{
                return "Fracaso";
            }
        }
        #Consultamos el nombre de la empresa
        static public function NombreM(){
            $pdo = ConexionBD::cBD()->prepare("SELECT nombre FROM empresa");
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }
        #Actualizamos los datos de la empresa
        static public function ActualizarM($nombre, $datosC){
            $pdo = ConexionBD::cBD()->prepare("UPDATE usuarios SET nombre=:nombre, nombrep=:nombrep, paterno=:paterno,materno=:materno,email=:email WHERE  nombre =:nombreU");
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombrep", $datosC["nombrep"], PDO::PARAM_STR);
            $pdo -> bindParam(":paterno", $datosC["paterno"], PDO::PARAM_STR);
            $pdo -> bindParam(":materno", $datosC["materno"], PDO::PARAM_STR);
            $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombreU", $nombre, PDO::PARAM_STR);
            if($pdo->execute()){
                return "Bien";
            }else{
                return "Mal";
            }
        }
        // Obtener la url de la foto del  usuario
        static public function mostrarPerfilM($_user){
            $pdo = ConexionBD::cBD()->prepare("SELECT foto FROM usuarios WHERE Nombre=:user;");
            $pdo -> bindParam("user",$_user, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }
        #Guardamosla ruta de la foto del usuario
        static public function perfilM($_foto,$_user){
            $pdo = ConexionBD::cBD()->prepare("UPDATE `usuarios` SET foto=:foto WHERE Nombre=:user");
            $pdo ->bindParam("foto",$_foto , PDO::PARAM_STR);
            $pdo ->bindParam("user",$_user , PDO::PARAM_STR);

            if($pdo -> execute()){
                return "Bien";
            }else{
                return "Mal";
            }
        }
        #Consultamos los usuarios que se suscribieron
        static public function consultar_usu_registroM(){
            $pdo = ConexionBD::cBD()->prepare("SELECT usu_nom, usu_correo, est FROM tm_usuario");
            $pdo->execute();
            return $pdo->fetchAll();
            $pdo ->close();
        }
        #Actualizar el estado el usuario
        static public function update_estM($_estado, $_correo){
            $correo = $_correo;
            $estado = $_estado;
            $pdo = ConexionBD::cBD()->prepare("UPDATE tm_usuario SET est=:num WHERE usu_correo=:email;");
            $pdo -> bindParam("num", $estado, PDO::PARAM_STR);
            $pdo -> bindParam("email", $correo, PDO::PARAM_STR);

            if($pdo -> execute()){
                return  "Bien";
            }else{
                return "Mal";
            }

        }
        // Estadisticas
        static public function estadisticaE(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=1;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaF(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=2;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaM(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=3;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaA(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=4;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaMr(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=5;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaJ(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=6;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaJl(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=7;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaAg(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=8;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaS(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=9;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaO(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=10;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaN(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=11;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
        static public function estadisticaD(){
            $pdo = ConexionBD::cBD()->prepare("SELECT SUM(view) AS suma FROM estadistica WHERE moth=12;");
            $pdo -> execute();
            $mes = $pdo -> fetch();
            if($mes["suma"] == null){
                $mes["suma"] = 0;
            }
            return $mes;
        }
    }
?>