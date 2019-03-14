<?php
include('../../Sql/Conexion.php');
$estado=1;
$nombre = $_POST['nameProvedor'];
$logo= $_FILES['logo']['name'];
$ruta= $_FILES['logo']['tmp_name'];
$destino="../../Img/logo_prov/".$logo;
$type = pathinfo($destino, PATHINFO_EXTENSION);
$data = file_get_contents($destino);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
if (!empty($base64)){
copy($ruta, $base64);	

mysql_query("INSERT INTO proveedor Values('','$nombre', '$destino','$base64')")
or die ("error al inserta el registro.".mysql_error());
    echo(json_encode(["message"=>"Programa ingresado"]));
}else {exit();}
header('location: ../../Web/index_progrmas.php');    
?>