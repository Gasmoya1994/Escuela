<?php
$HOST="localhost";
$USER="localadmin";
$PASS="conect";
$DB="escuela";

//CONEXION CON BASE DE DATOS
$DBCONN=new mysqli($HOST,$USER,$PASS,$DB);
if($DBCONN->connect_error) 
die("error de conexion ".$DBCONN->connect_error);
?>

