<?php
$ENLACES=array(
    "cerrar_sesion" => session_abort(),
    "capacitaciones" => "cursos",
    "alumnos" => "usuarios"
);

?>
<nav class="navbar navbar-dark navbar-expand-md bg-dark p-2">
    <a class="navbar-brand" href="#">escuela</a>
    <button data-bs-target=".navbar-nav" data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-icon"></button>
    <ul class="navbar-nav navbar-collapse collapse">
        <?php
        foreach($ENLACES as $KEY => $VALUE){
            echo "<li> <a class='nav-link' href='$VALUE'>$KEY</a></li>";
        }
        ?>
    </ul>
</nav>
