<?php
    #require_once "../modelos/userM.php";
    class UserC{
        public function IngresoC(){
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $_SESSION["user"] = $user;
            $repuesta = UserM::IngresoM($user);

            if($repuesta["Nombre"] == $user && $repuesta["clave"] == $pass){
                header("location:../../../vistas/panel.php");
            }else{
                echo "<script>
                        alert('Credenciales incorrectos');
                    </script>";
            }
        }
        public function EditarC(){
            $user = $_SESSION["user"];
            $tablaBD = "usuarios";

            $respuesta = UserM::EditarUserM($user, $tablaBD);
            
            echo '
            <label>Nombre de Usuario</label>
            <input type="text" name="usuario" value="'.$respuesta["nombre"].'">
            <label>Nombre</label>
            <input type="text" name="name" value="'.$respuesta["nombrep"].'">
            <label>Primer apellido</label>
            <input type="text" name="paterno" value="'.$respuesta["paterno"].'">
            <label>Segundo apellido</label>
            <input type="text" name="materno" value="'.$respuesta["materno"].'">
            <label>E-mail</label>
            <input type="text" name="email" value="'.$respuesta["email"].'">
            <input type="button" name="editar" value="Editar">
            <input type="button" name="guardarU" value="Guardar">
            ';
        }
        public function UpdateEC(){
            $name = $_POST["empresa"];
            $respuesta = UserM::UpdateEM($name);

            if($respuesta == "Bien"){
                header("location:inicio.html");
            }
        }
    }
?>