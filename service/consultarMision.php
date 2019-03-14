<?php
include_once("../Sql/Conexion.php");
$codigoVacante = $_REQUEST["codigoVacante"];

$query="SELECT vacantes.idVacante, vacantes.codigoVacante, 
vacantes.Estado, vacantes.fechaIni, vacantes.fechaFin, 
vacantes.requicitos, vacantes.latitud, vacantes.longitud, 
vacantes.idProveedor, proveedor.nameProveedor 
FROM vacantes, proveedor 
WHERE vacantes.idProveedor=proveedor.idProveedor AND vacantes.codigoVacante='$codigoVacante'";

$result = mysql_query($query) or die("No existen registros");
$rows= array();
while ($r= mysql_fetch_assoc($result )){
$rows[]=$r;   
}
print json_encode($rows); 
?>

