<?php
include "functions.php";
parse_str(file_get_contents("php://input"),$_PUT);
Arraymap($_PUT);
?>