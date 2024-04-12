<?php
include "config/dbconn.php";
$TABLA=$_GET["tabla"];
$COLUMNAS=$DBCONN->query("show columns from ".$TABLA);
$RESULTADOS=$DBCONN->query("select * from ".$TABLA);
function encabezados($ARRAY){
    while($ROW=$ARRAY->fetch_assoc()){
        echo "<th>".$ROW["Field"]."</th>";
    }
}
function cuerpotabla($ARRAY){
    if($ARRAY->num_rows>0){
        while($ROW=$ARRAY->fetch_assoc()){
            echo "<tr>";
            foreach($ROW as $VALUE)
            echo "<td> $VALUE </td>";
            echo "</tr>";
        }
    }
    else{
        echo "<tr> <td> NO SE ENCONTRARON RESULTADOS </td> </tr>";
    }
}
?>
<table>
    <caption>Registros de <?php $TABLA ?> </caption>
    <thead>
        <tr>
            <?php encabezados($COLUMNAS) ?>
        </tr>
    </thead>
    <tbody>  
        <?php cuerpotabla($RESULTADOS) ?>
    </tbody>
</table>