<?php
include('../../Sql/Conexion.php');

    $photo= $_FILES['photo_user']['name_photo'];
    $route_photo=$_FILES['photo_user']['tmp_name'];
    $destination="../../Img/photo_user";

if ($_SERVER['REQUEST_METHOD']==='POST') {

    
    $mail = $_POST['mail'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $codigo = $_POST['codigo'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $result= mysql_query("INSERT INTO usuario Values('','$nombre', '$mail', '$nombre_usuario', '$password', '$rol', '$apellido', '$codigo, '$route_photo')")
    or die ("error al inserta el registro.".mysql_error());
    echo(json_encode(["message"=>"Usuario ingresado"]));
header('location: ../../Web/index_usuarios.php');
}else{
    print_r(json_encode(["message"=> "requiere peticion Post"]));
}
?>