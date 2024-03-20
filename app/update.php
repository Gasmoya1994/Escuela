<?php
parse_str(file_get_contents("php://input"),$_PUT);
foreach($_PUT as $KEY=>$VALUE){
    echo"$KEY=$VALUE";
}
?>