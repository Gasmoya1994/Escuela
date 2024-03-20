<?php
parse_str(file_get_contents("php://input"),$_DELETE);
foreach($_DELETE as $KEY=>$VALUE){
    echo"$KEY=$VALUE";
}
?>