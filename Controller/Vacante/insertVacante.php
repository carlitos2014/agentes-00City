<?php
include('../../Sql/Conexion.php');
if ($_SERVER['REQUEST_METHOD']==='POST') {
          $estado=0;          
          $codigoVacante=$_POST['codigoVacante'];
          $latitud=$_POST['latitud'];
          $longitud=$_POST['longitud'];
          $sede=$_POST['sede'];
          $fechaIni=$_POST['fechaIni'];
          $fechaFin=$_POST['fechaFin'];
          $requicitos=$_POST['requicitos'];
          $idProveedor=$_POST['idProveedor'];

    $result= mysql_query("INSERT INTO vacantes Values('','$codigoVacante','$latitud', '$longitud', '$sede', '$estado','$fechaIni', '$fechaFin', '$requicitos','$idProveedor')")
    or die ("error al inserta el registro.".mysql_error());
    echo(json_encode(["message"=>"Mision Registrada"]));
header('location: ../../Web/index_Vacante.php');
}else{
    print_r(json_encode(["message"=> "requiere peticion Post"]));
}
?>