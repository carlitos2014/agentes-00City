<?php
include_once("../Sql/Conexion.php");

//$id=$_REQUEST["id"];

$query = 'SELECT * FROM usuario';
$result = mysql_query($query) or die("No existen registros");

//$result= mysqli_query($link , "SELECT * FROM propietario")or die ("No existen registros");
$rows= array();
while ($r= mysql_fetch_assoc($result )){
$rows[]=$r;   

}
print json_encode($rows); 
?>