<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Panel de control</title>
</head>
<body>
    <div class="topnav">
        <a>Bienvenid@ <?php echo $_SESSION["user"]; ?></a>
        <a href="panel.php?menu=inicio">Incio</a>
        <a href="panel.php?menu=perfil">Perfil</a>
        <a href="panel.php?menu=salir">Salir</a>
    </div>

    <div class="sidenav">
        <a href="panel.php?menu=sql">Sql server</a>
        <a href="#">Maria DB</a>
        <a href="#">Tablas</a>
        <a href="#">Usuarios</a>
        <a href="#">Chat</a>
        <a href="#">Errores</a>
        <a href="#">Estadisticas</a>
    </div>

    <div id="div3">
        <!--A qui va el contenido-->
        <?php
            if(isset($_GET["menu"])){

                $menu = $_GET["menu"];
                switch ($menu) {
                    case 'inicio':
                        include 'inicio.html';
                    break;
                    case 'perfil':
                        include 'perfil.php';
                    break;
                    case 'salir':
                        require_once "salir.php";
                        $salir = new salir();
                        $salir -> cerrarSession();
                    break;
                    case 'sql':
                        include_once "serversql.php";
                    break;
                    default:
                        break;
                }
            }elseif (isset($_GET["select"])) {
                $select = $_GET["select"];

                switch ($select) {
                    case 'db':
                        include_once "serversql.php";
                    break;
                    case 'tb':
                        include_once "serversql.php";
                    break;
                    
                    default:
                        # code...
                        break;
                }
            }elseif(isset($_GET["guardar"])){
                $guardar = $_GET["guardar"];

                switch ($guardar) {
                    case 'db':
                        require_once "../controlador/userC.php";
                        $update = new UserC();
                        $update->UpdateEC();
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