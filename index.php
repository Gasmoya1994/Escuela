<?php
include "config/dbconn.php";
?>
<form action="app/" method="post">
    <label for="usuario">Ingrese su usuario</label>
    <input name="usuario" id="usuario" type="text">
    <label for="correo">Ingrese su correo</label>
    <input name="correo_electronico" id="correo" type="email">
    <button>enviar</button>
</form>
