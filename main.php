<?php
echo "<main class='row mx-auto p-3'>";
echo "<h2 class='welcome'>BIENVENIDO AL SITIO, ".$_SESSION['usuario'] ."</h2>";
include "app/index.php";
echo "</main>";
?>
