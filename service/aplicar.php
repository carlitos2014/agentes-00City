<?php
include_once("../Sql/Conexion.php");

$estado=1;
$id_usu = $_REQUEST["id_usu"];
$idVacante = $_REQUEST["idVacante"];
$base64 =$_REQEST["base64"];
$descMision =$_REQEST["descMision"];

$destino="../../Img/foto_mision/".$foto;
	$insert="INSERT INTO completar_mision Values('','$idVacante', '$descMision', '$destino', '$id_usu','$base64')")
    or die ("error al inserta el registro.".mysql_error());
    $result2=mysql_query("UPDATE vacantes SET Estado='$estado'");
	if(!mysql_query($insert)) { 
 die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error());
} else{ 
 echo "Data Inserted Successully!!!";
} */
?>