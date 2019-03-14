<?php
include_once("../Sql/Conexion.php");
//$id_usu = $_REQUEST["id_usu"];
$nombre_usuario = $_REQUEST["nombre_usuario"];
$query="SELECT usuario.id_usu, vacantes.fechaIni, vacantes.fechaFin, 
vacantes.requicitos, vacantes.latitud, vacantes.idProveedor, vacantes.longitud, completar_mision.id_usu, vacantes.idVacante, 
completar_mision.idVacante, vacantes.Estado, proveedor.nameProveedor
FROM completar_mision, usuario, vacantes, proveedor
WHERE usuario.nombre_usuario='$nombre_usuario' and proveedor.idProveedor=vacantes.idProveedor
AND usuario.id_usu=completar_mision.id_usu 
AND vacantes.idVacante=completar_mision.idVacante and vacantes.Estado='1'";

$result = mysql_query($query) or die("No existen registros");
$rows= array();

while ($r= mysql_fetch_assoc($result )){
$rows[]=$r;   
}
print json_encode($rows); 
?>