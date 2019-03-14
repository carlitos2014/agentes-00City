<?php

include('../../Sql/Conexion.php');




//if (isset($_POST["identificacion"])) {
//    $identificacion = $_POST["identificacion"];
//} else {
//    $identificacion = "";
//}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
} else {

    $nombre = "";
}

if (isset($_POST['nombre_usuario'])) {

    $nombre_usuario = $_POST['nombre_usuario'];
} else {

    $nombre_usuario = "";
}

if (isset($_POST['password'])) {

    $password = $_POST['password'];
} else {

    $password = "";
}

if (isset($_POST['rol'])) {

    $rol = $_POST['rol'];
} else {

    $rol = "";
}

$idDelete=$_GET["idDelete"];

if (isset($idDelete)) {
    
$result = mysql_query("DELETE FROM usuario WHERE id_usu='$idDelete'");
header('location: ../../Web/index_usuarios.php');
    
}else {
    
    echo  "No se pudo eliminar el registro";
}


?>
