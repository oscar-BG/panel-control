<div class="tabla_usuario">
    <h1>Usuarios registrados</h1>
    <table>
        <tr>
            <th>
                Usuario
            </th>
            <th>
                Correo
            </th>
            <th>
                Estado
            </th>
            <th>
                Cambiar 
            </th>
            <th>
                Enviar correo
            </th>
        </tr>
        <?php
            $mostrar = new ActivoC();
            $mostrar -> tabla_usuario();
        ?>
    </table>
</div>