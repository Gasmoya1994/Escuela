<?php
include "config/dbconn.php";
$TABLA=$_GET["tabla"];
$COLUMNAS=$DBCONN->query("show columns from ".$TABLA);
$RESULTADOS=$DBCONN->query("select * from ".$TABLA);
function encabezados($ARRAY){
    while($ROW=$ARRAY->fetch_assoc()){
        echo "<th>".$ROW["Field"]."</th>";
    }
    echo "<th>acciones</th>";
}
function cuerpotabla($ARRAY){
    if($ARRAY->num_rows>0){
        while($ROW=$ARRAY->fetch_assoc()){
            echo "<tr>";
            foreach($ROW as $VALUE) echo "<td> $VALUE </td>";
            $id = isset($ROW['id']) ? 'id' : 'ID';
            echo "
            <td>
                <button data-id=".$ROW[$id]." class='btn btn-primary'>editar</button>
                <button data-id=".$ROW[$id]." class='btn btn-danger'>eliminar</button>
            </td>
            </tr>";
        }
    }
    else{
        echo "<tr> <td> NO SE ENCONTRARON RESULTADOS </td> </tr>";
    }
}
?>
<table class="table table-dark table-striped">
    <caption>Registros de <?php echo $TABLA ?> </caption>
    <thead>
        <?php encabezados($COLUMNAS) ?>
    </thead>
    <tbody>  
        <?php cuerpotabla($RESULTADOS) ?>
    </tbody>
</table>
<h2>Formulario</h2>
<?php
    include "forms/$TABLA.php";
?>