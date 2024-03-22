<?php
    function Arraymap($ARRAY){
        foreach($ARRAY AS $KEY=>$VALUE){
            echo"$KEY:$VALUE, ";
        }
    }
    function Methodparse($ARRAY){
        parse_str(file_get_contents("php://input"),$ARRAY);    
    }
    function Handlerequest($METHOD){
        switch($METHOD){
            case "POST":
                include("create.php");
            break;
            case "GET":
                include("read.php");
            break;
            case "PUT":
                include("update.php");
            break;
            case 'DELETE':
                include("delete.php");
            break;
        }
    }
?>