<?php
    function Arraymap($ARRAY){
        extract($ARRAY);
        $SQL = " INSERT INTO ";
        $SQL.=  " $tabla SET ";
        switch($tabla){
            case "asignaturas":
                $SQL.="
                ID_usuario = '$ID_usuario', 
                ID_materia = '$ID_materia', 
                Dias = '$Dias', 
                Horario = '$Horario'";
            break;
            case "calificaciones":
                $SQL.="
                ID_Asignatura = '$ID_Asignatura', 
                Nota = '$Nota', 
                Trimestre = '$Trimestre', 
                Fecha = '$Fecha'";
            break;
            case "datos_usuarios":
                $SQL.="
                id_Usuario = '$id_usuario',
                Nombre = '$nombre',
                Apellido = '$apellido',
                Tipo_Documento = '$tipo_documento',
                Numero_Documento = '$numero_documento',
                Direccion = '$direccion',
                id_Nacionalidad = '$id_nacionalidad'";
            break;
            case "usuarios":
                $SQL.="
                usuario = '$Usuario', 
                Mail = '$correo',
                clave = '$clave'";
            break;
            default:
                $SQL.="
                Nombre = '$nombre', 
                Descripcion = '$descripcion'";
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