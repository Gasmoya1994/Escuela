<?php
    function Arraymap($ARRAY){
        extract($ARRAY);
        $SQL = " INSERT INTO $tabla";
        switch($tabla){
            case "asignaturas":
                $SQL.="(ID_usuario, ID_materia, Dias, Horario) VALUES ('$ID_usuario', '$ID_materia', '$Dias', '$Horario')";
            break;
            case "calificaciones":
                $SQL.="(ID_Asignatura, Nota, Trimestre, Fecha) VALUES ('$ID_Asignatura', '$Nota', '$Trimestre', '$Fecha')";
            break;
            case "datos_usuarios":
                $SQL.="(id_Usuario, Nombre, Apellido, Tipo_Documento, Numero_Documento, Direccion, id_Nacionalidad
                ) VALUES ('$id_Usuario', '$Nombre', '$Apellido', '$Tipo_Documento', '$Numero_Documento', '$Direccion', '$id_Nacionalidad'
                )";
            break;
            case "usuarios":
                $SQL.="(usuario, Mail, clave) VALUES ('$usuario', '$Mail', '$clave')";
            break;
            default:
                $SQL.="(Nombre, Descripcion) VALUES ('$nombre', '$descripcion')";
        }
        return $SQL;
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
    function checksession(){
        session_start();
        $url=$_SERVER["PHP_SELF"];
        if(isset($_SESSION["usuario"]) && !is_null($_SESSION["usuario"])){
            include "public/nav.php";
            include "main.php";
        }
        else{
            session_destroy();
            include "app/sesion.php";
        }
    }
?>