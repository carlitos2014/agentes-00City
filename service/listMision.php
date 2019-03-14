<?php
include_once("../Sql/Conexion.php");
$query="SELECT vacantes.idVacante, vacantes.codigoVacante, 
vacantes.Estado, vacantes.fechaIni, vacantes.fechaFin, vacantes.requicitos, 
vacantes.idProveedor, vacantes.latitud, vacantes.longitud, proveedor.nameProveedor 
FROM vacantes, proveedor 
WHERE vacantes.idProveedor=proveedor.idProveedor 
AND vacantes.Estado='0'";

$result = mysql_query($query) or die("No existen registros");
$rows= array();

while ($r= mysql_fetch_assoc($result )){
$rows[]=$r;   
}
print json_encode($rows); 
?>