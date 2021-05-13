<div class="divContenedorServer">
    <div class="divSql">
        <a href="?select=db"><button type="button">CREAR BASE DE DATOS</button></a>
        <a href="?select=tb"><button type="button">CREAR TABLA</button></a>
    </div>
    
    <div class="divDB">
        <?php
            if(isset($_GET["select"])){
                $select = $_GET["select"];

                switch ($select) {
                    case 'db':
                        include_once 'createDB.html';
                    break;
                    case 'tb':
                        include_once 'createTable.php';
                    break;
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </div>
</div>
