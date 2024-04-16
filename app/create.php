<?php
    include "config/dbconn.php";
    $SQL = Arraymap($_POST);
    if($DBCONN->query($SQL) == TRUE){
        echo "registro agregado con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    };
?>