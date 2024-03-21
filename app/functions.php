<?php
    function Arraymap($ARRAY){
        foreach($ARRAY AS $KEY=>$VALUE){
            echo"$KEY:$VALUE, ";
        }
    }
    function Methodparse($ARRAY){
        parse_str(file_get_contents("php://input"),$ARRAY);
    }
?>