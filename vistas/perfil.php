<div class="divContenedor">
    <div class="divperfil">
        <img src="imagenes/perfil.png" alt="Perfil" width="100%">
        <input type="file" name="cfoto">
    </div>
    <div class="divform">
        <form action="" method="POST">
            <?php
                $mostra = new ActivoC();
                $mostra -> MostrarC();
            ?>
        </form>
    </div>
    <div class="divEm">
        <form action="" method="POST">
            <label>Nombre de la empresa</label>
            <input type="text" name="empresa" placeholder="Nuevo nombre" require>
            <label>Logo</label>
            <input type="file" name="myLogo">
            <input type="submit" name="actualizar" value="Actualizar">
        </form>
    </div>
</div>
<?php
    if(isset($_POST["actualizar"])){
        $name = $_POST["empresa"];
        $actualizar = new ActivoC();
        $actualizar->EmpresaC($name);
    }elseif (isset($_POST["actualizarU"])){
        $actualizarU = new ActivoC();
        $actualizarU -> ActualizarC();
    }
?>

