<?php
include "config/dbconn.php";
Arraymap($_GET);
$COLUMNAS=$DBCONN->query("show columns from ".$_GET["tabla"]);
$RESULTADOS=$DBCONN->query("select * from ".$_GET["tabla"]);
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
    <caption>Registros de <?php $_GET["tabla"] ?> </caption>
    <thead>
        <tr>
            <?php encabezados($COLUMNAS) ?>
        </tr>
    </thead>
    <tbody>  
        <?php cuerpotabla($RESULTADOS) ?>
    </tbody>
</table>