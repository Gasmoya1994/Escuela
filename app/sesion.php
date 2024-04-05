<form class="form" method="post">
    <h2>Iniciar Sesión</h2>
    <input type="hidden" name="table" value="usuarios">
    <label for="user">Ingrese correo o usuario</label>
    <input name="usuario" id="user" type="text" required>
    <label for="password">Ingrese su contraseña</label>
    <input name="password" id="password" type="password" required>
    <button>Ingresar</button>
</form>
<?php
include "config/dbconn.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    $SQL="select * from $table
        where (usuario = '$usuario' or Mail = '$usuario')
        and clave = '$password'";
    $RESULTS=$DBCONN->query($SQL);
    if($RESULTS->num_rows==1){
        session_start();
        $_SESSION["usuario"]=$usuario;
    }
}
?>
