<?php
    class ActivoC{
        #Mostramos los datos consultados de los usuarios
        public function MostrarC(){
            $user = $_SESSION["user"];
            $respuesta = ActivoM::MostrarM($user);
            
            echo '<label>Nombre de Usuario</label>
            <input type="text" name="nombre" value="'.$respuesta["nombre"].'">
            <label>Nombre</label>
            <input type="text" name="nombrep" value="'.$respuesta["nombrep"].'">
            <label>Primer apellido</label>
            <input type="text" name="paterno" value="'.$respuesta["paterno"].'">
            <label>Segundo apellido</label>
            <input type="text" name="materno" value="'.$respuesta["materno"].'">
            <label>E-mail</label>
            <input type="text" name="email" value="'.$respuesta["email"].'">
            <input type="submit" name="actualizarU" value="Guardar">';
        }
        #Actualizamos el nombre de la empresa
        public function EmpresaC($nombreE){
            $respuesta = ActivoM::EmpresaM($nombreE);
            if($respuesta == "Bien"){
                #redireccionar con javascritp
                echo "<script>
                        alert('Actualizado correctamente');
                        window.location= 'panel.php?menu=inicio';
                    </script>";
            }else{
                echo "Fracaso";
            }
        }
        #Consultamos el nombre de la empresa
        public function NombreC(){
            $respuesta = ActivoM::NombreM();
            $_SESSION["empresa"] = $respuesta["nombre"];
        }
        public function ActualizarC(){
            $nombre = $_SESSION["user"];
            $datosC = array("nombre" => $_POST["nombre"], "nombrep" => $_POST["nombrep"], "paterno" => $_POST["paterno"], "materno" => $_POST["materno"], "email" => $_POST["email"]);
            $respuesta = ActivoM::ActualizarM($nombre, $datosC);
            if($respuesta == "Bien"){
                #redireccionar con javascritp
                echo "<script>
                        alert('Datos actualizados correctamente');
                        window.location= 'panel.php?menu=inicio';
                    </script>";
            }
        }
    }
?>