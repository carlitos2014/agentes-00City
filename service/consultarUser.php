<?php
include_once("../Sql/Conexion.php");

$nameUser = $_REQUEST["nameUser"];
$pass =$_REQUEST["password"];

$queryUser="SELECT usuario.id_usu, usuario.nombre_usuario, usuario.nombre, usuario.password FROM usuario WHERE nombre_usuario='$nameUser'
 AND password='$pass'";


$result = mysql_query($queryUser) or die("No existen registros");

$rows= array();
while ($r= mysql_fetch_assoc($result)){
$rows[]=$r;   
}
print json_encode($rows); 
?>