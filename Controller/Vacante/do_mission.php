<?php
include('../../Sql/Conexion.php');
//if ($_SERVER['REQUEST_METHOD']==='POST') {
          $estado=1;
          $id_usu=1;
          $id=$_REQUEST['id'];
          $descMision=$_POST['descMision'];
          $foto= $_FILES['foto']['name'];
          $ruta= $_FILES['foto']['tmp_name'];
          $destino="../../Img/foto_mision/".$foto;
          $type = pathinfo($destino, PATHINFO_EXTENSION);
          $data = file_get_contents($destino);
          $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            if (!empty($base64)){
            copy($ruta, $base64); 
                     $result= mysql_query("INSERT INTO completar_mision Values('','$id', '$descMision', '$destino', '$id_usu','$base64')")
    or die ("error al inserta el registro.".mysql_error());

    $result2=mysql_query("UPDATE vacantes SET Estado='$estado'");

    echo(json_encode(["message"=>"Vacante Registrada"]));
header('location: ../../Web/index_Vacante.php');
}else{
    print_r(json_encode(["message"=> "requiere peticion Post"]));
}
?>

