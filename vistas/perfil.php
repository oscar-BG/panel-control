<?php require_once "../controlador/userC.php" ?>
<div class="divContenedor">
    <div class="divperfil">
        <img src="imagenes/perfil.png" alt="Perfil" width="100%">
        <input type="file" name="cfoto">
    </div>
    <div class="divform">
        <form action="" method="POST">
            <label>Nombre de Usuario</label>
            <input type="text" name="usuario" value="root">
            <label>Nombre</label>
            <input type="text" name="name" value="Oscar">
            <label>Primer apellido</label>
            <input type="text" name="paterno" value="Bautista">
            <label>Segundo apellido</label>
            <input type="text" name="materno" value="Gaytan">
            <label>E-mail</label>
            <input type="text" name="email" value="example@example.com">
            <input type="button" name="editar" value="Editar">
            <input type="button" name="guardarU" value="Guardar">
        </form>
    </div>
    <div class="divEm">
        <form action="" method="POST">
            <label>Nombre de la empresa</label>
            <input type="text" name="empresa" placeholder="Nuevo nombre" require>
            <label>Logo</label>
            <input type="file" name="myLogo">
            <input type="button" name="editar" value="Editar">
            <a href="?guardar=db"><button type="button">guardar</button></a>
        </form>
    </div>
</div>

