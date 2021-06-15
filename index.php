<?php
    session_start();
    require_once "controlador/rutasC.php";
    require_once "controlador/userC.php";
    require_once "controlador/correo.php";
    require_once "controlador/activoC.php";
    require_once "modelos/activoM.php";
    require_once "modelos/userM.php";
    
    #Primero archivo que se llama en el servidor inluye el panel
    $rutas = new RutasControlador();
    $rutas -> Login();
?>