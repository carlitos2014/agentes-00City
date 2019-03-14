<?php
include_once("../Sql/Conexion.php");
$idUsuario = $_REQUEST["idUsuario"];
$idVacante = $_REQUEST["idVacante"];

$query="SELECT vacantes.idVacante, vacantes.codigoVacante, vacantes.fechaFin, vacantes.fechaIni, vacantes.foto, vacantes.idCategoria, vacantes.latitud, vacantes.longitud, vacantes.idPrograma, vacantes.idVacante, vacantes.nombreEmpresa, vacantes.requicitos, vacantes.sede, programas.nombrePrograma FROM vacantes, usuario, programas, aplicar WHERE usuario.id_usu=aplicar.idUsuario and vacantes.idVacante=aplicar.idVacante and vacantes.idPrograma=programas.idPrograma AND aplicar.idUsuario='$idUsuario' AND aplicar.idVacante='$idVacante'";

$result = mysql_query($query) or die("No existen registros");
$rows= array();
while ($r= mysql_fetch_assoc($result)){
$rows[]=$r;   
}
print json_encode($rows); 
?>