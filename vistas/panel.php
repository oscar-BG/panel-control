<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <style>
        * {
            box-sizing: border-box;
            }
            body{
                margin: 0;
            }

            /*## A QUI VA EL CONTENIDO ##*/
            #div3
            {
                background-color: white;
                padding-left: 210px;
                padding-top: 90px;
            }
            
            /*## Barra de Menu ##*/
            /* Aplicar a la barra de navegacion superior */
            .topnav {
                position:fixed;
                overflow: hidden;
                width: 100%;
                left: 200px;
                background-color: #333;
               
            }

            /* Aplicar estilos a los enlaces de navegacion superior */
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 20px 20px;
                text-decoration: none;
            }

            /* Cambios de color */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }


            /*##  menu lateral ##*/
            /* Estilo de navegación lateral */
            .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            }


            /* Enleces de navegacion lateral */
            .sidenav a {
            color: white;
            padding: 16px;
            text-decoration: none;
            display: block;
            }

            /* Cambios de color */
            .sidenav a:hover {
            background-color: #ddd;
            color: black;
            }

            /*### Elementos Inicio ###*/

            .divContenedor{
                width: 95%;
                height: auto;
            }
            .divem{
                float:left;
                width:30%;
                height: auto;
                margin:5px;
                padding:5px;
                
            }
            .divem p{
                text-align:center;
                font-size:30px;
                padding:20px;
            }

            /*### Perfil ###*/
            .divperfil{
                float: left;
                width:30%;
                height: 500px;
                background-color: grey;
                border: 1px solid black;
                
            }
            .divform{
                float:left;
                margin-left: 20px;
                padding:5px;
            }
    </style>
</head>
<body>
    <div class="topnav">
        <a>Bienvenid@ <?php echo $_SESSION["user"]; ?></a>
        <a href="panel.php?menu=inicio">Incio</a>
        <a href="panel.php?menu=perfil">Perfil</a>
        <a href="panel.php?menu=salir">Salir</a>
    </div>

    <div class="sidenav">
        <a href="#">Sql server</a>
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
                        include 'perfil.html';
                    break;
                    case 'salir':
                        require_once "salir.php";
                        $salir = new salir();
                        $salir -> cerrarSession();
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