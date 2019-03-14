<?php

include('../../Sql/Conexion.php');



if (isset($_POST["id_usu"])) {
    $id_usu = $_POST["id_usu"];
} else {
    $id_usu = "";
}

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
} else {
    $mail = "";
}

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
} else {

    $nombre = "";
}

if (isset($_POST['apellido'])) {

    $apellido = $_POST['apellido'];
} else {

    $apellido = "";
}

if (isset($_POST['codigo'])) {

    $codigo = $_POST['codigo'];
} else {

    $codigo = "";
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

$idUpdate = $_POST["idUpdate"];

//echo $idUpdate;
//        die();

if (isset($idUpdate)) {
    $result = mysql_query("update usuario set mail='$mail', nombre='$nombre', nombre_usuario='$nombre_usuario',password='$password', rol='$rol', apellido='$apellido', codigo='$codigo' WHERE id_usu='$idUpdate'")or die ("error al inserta el registro.".mysql_error());
    echo(json_encode(["message"=>"Usuario ingresado"]));

    header('location: ../../Web/index_usuarios.php');
} else {

    echo "No se puedo actualizar el registro";
}
?>