<?php
session_start();
#Inicias la varibale session y traemos los archivos controlador y modelos para hacer uso de las funciones
require_once "../controlador/activoC.php";
require_once "../controlador/correo.php";
require_once "../modelos/activoM.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Panel de control</title>
</head>
<body>
    <!--######  Menu de navegacion   ######--->
    <div class="topnav">
        <a>Bienvenid@ <?php echo $_SESSION["user"]; ?></a>
        <a href="panel.php?menu=inicio">Incio</a>
        <a href="panel.php?menu=perfil">Perfil</a>
        <a href="panel.php?menu=salir">Salir</a>
    </div>

    <div class="sidenav">
        <br>
        <br>
        <br>
        <ul>
            <li><a href="panel.php?menu=usuario">Usuarios</a></li>
            <li><a href="panel.php?menu=email">E-mail</a></li>
            <li>
                <a href="#">Estadisticas</a>
                <ul>
                    <li><a href="panel.php?menu=estadistica&selec=user">Por usuarios</a></li>
                    <li><a href="panel.php?menu=estadistica&selec=mes">Por mes</a></li>
                </ul>
            </li>
            <!-- <li><a href="panel.php?menu=estadistica">Estadisticas</a></li> -->
        </ul>
    </div>

    <!--###### DIV3 contenedor de los documentos html que llamamos con el menu ####-->
    <div id="div3">
        <!--A qui va el contenido-->
        <?php
            if(isset($_GET["menu"])){

                $menu = $_GET["menu"];
                switch ($menu) {
                    case 'inicio':
                        include 'inicio.php';
                    break;
                    case 'perfil':
                        include 'perfil.php';
                    break;
                    case 'salir':
                        require_once "salir.php";
                        $salir = new salir();
                        $salir -> cerrarSession();
                    break;
                    case 'usuario':
                        include_once "usuario.php";
                    break;
                    case 'email':
                        include_once "email.php";
                    break;
                    case 'estadistica':
                        include_once "estadisticas.php";
                    break;
                    default:
                        echo 'Bienvenido a tu Tablero';
                        break;
                }
            }else{
                echo 'Bienvenido a tu Tablero'; 
            }
            if(isset($_GET["estado"])){
                $estado = $_GET["estado"];
                $correo = $_GET["correo"];
                switch ($estado) {
                    case 0:
                        #Lllamar a la funcion que actualiza el estado
                        $update_est = new ActivoC();
                        $update_est -> update_estC($estado, $correo);
                    break;
                    case 1:
                        #Lllamar a la funcion que actualiza el estado
                        $update_est = new ActivoC();
                        $update_est -> update_estC($estado, $correo);
                    break;
                    
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </div>
</body>
</html>