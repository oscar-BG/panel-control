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
        #Mostramos los usuarios registrados
        public function tabla_usuario(){
            $respuesta = ActivoM::consultar_usu_registroM();
            foreach ($respuesta as $key => $value) {
                if ($value["est"] == 1) {
                    echo '
                        <tr>
                            <td>'.$value["usu_nom"].'</td>
                            <td>'.$value["usu_correo"].'</td>
                            <td>Activo</td>
                            <td><a href="panel.php?estado=0&correo='.$value["usu_correo"].'">Dar de baja</a></td>
                            <td><a href="panel.php?menu=email&correo='.$value["usu_correo"].'">Enviar Correo</a></td>
                            </tr>
                            ';
                        }else{
                            echo '
                            <tr>
                            <td>'.$value["usu_nom"].'</td>
                            <td>'.$value["usu_correo"].'</td>
                            <td>Baja</td>
                            <td><a href="panel.php?estado=1&correo='.$value["usu_correo"].'">Activarlo</a></td>
                            <td><a href="panel.php?menu=email&correo='.$value["usu_correo"].'">Enviar Correo</a></td>
                        </tr>
                    ';
                }
            }
        }
        #Actualizar el estado del usuario
        public function update_estC($_estado, $_correo){
            $correo = $_correo;
            $estado = $_estado;
            $respuesta = ActivoM::update_estM($estado, $correo);
            if($respuesta == "Bien"){
                echo '
                    <script>
                        window.open("panel.php?menu=usuario","_self");
                    </script>
                ';
            }
        }
        //Mostrar estadisticas de los usuarios
        public function estadisticaC(){
            $enero = ActivoM::estadisticaE();
            $febrero = ActivoM::estadisticaF();
            $marzo = ActivoM::estadisticaM();
            $abril = ActivoM::estadisticaA();
            $mayo = ActivoM::estadisticaMr();
            $junio = ActivoM::estadisticaJ();
            $julio = ActivoM::estadisticaJl();
            $agosto = ActivoM::estadisticaAg();
            $septiembre = ActivoM::estadisticaS();
            $octubre = ActivoM::estadisticaO();
            $noviembre = ActivoM::estadisticaN();
            $diciembre = ActivoM::estadisticaD();
            echo '
            <div class="chart-wrap "> 
            <div class="title">Estadisticas Generales</div>
            <div class="grid">
                <div class="bar" style="--bar-value:'.$enero["suma"].'%;" data-name="Enero" title="Enero '.$enero["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$febrero["suma"].'%;" data-name="Febrero" title="Febrero '.$febrero["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$marzo["suma"].'%;" data-name="Marzo" title="Marzo '.$marzo["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$abril["suma"].'%;" data-name="Abril" title="Abril '.$abril["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$mayo["suma"].'%;" data-name="Mayo" title="Mayo '.$mayo["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$junio["suma"].'%;" data-name="Junio" title="Junio '.$junio["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$julio["suma"].'%;" data-name="Julio" title="Julio '.$julio["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$agosto["suma"].'%;" data-name="Agosto" title="Agosto '.$agosto["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$septiembre["suma"].'%;" data-name="Septiembre" title="Septiembre '.$septiembre["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$octubre["suma"].'%;" data-name="Octubre" title="Octubre '.$octubre["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$noviembre["suma"].'%;" data-name="Noviembre" title="Noviembre '.$noviembre["suma"].'%"></div>
                <div class="bar" style="--bar-value:'.$diciembre["suma"].'%;" data-name="Diciembre" title="Diciembre '.$diciembre["suma"].'%"></div>
            </div>
          </div>
            ';
        }
    }
?>