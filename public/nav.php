<?php
include "config/dbconn.php";
$TABLAS=$DBCONN->query("show tables");
function listartablas($ARRAY){
    while($ROW=$ARRAY->fetch_assoc()){
        echo "
        <li>
            <a class='nav-link' href='?tabla=".$ROW["Tables_in_escuela"]."'>"
            .$ROW["Tables_in_escuela"].
            "</a> 
        </li>";
    }
} 

?>
<nav class="navbar navbar-dark navbar-expand-md bg-dark p-2">
    <a class="navbar-brand" href="#">escuela</a>
    <button data-bs-target=".navbar-nav" data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-icon"></button>
    <ul class="navbar-nav navbar-collapse collapse">
        <?php
        listartablas($TABLAS);
        ?>
    </ul>
</nav>
