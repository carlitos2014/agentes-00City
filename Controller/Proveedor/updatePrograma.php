<?php
include('../../Sql/Conexion.php');
if (isset($_POST["idPrograma"])) {
    $idPrograma = $_POST["idPrograma"];
} else {
    $idPrograma = "";
}
if (isset($_POST['nombrePrograma'])) {
    $nombrePrograma = $_POST['nombrePrograma'];
} else {
    $nombrePrograma = "";
}
$idUpdate = $_POST["idPrograma"];
//echo $idUpdate;
//        die();
if (isset($idUpdate)) {
    $result = mysql_query("update programas set nombrePrograma='$nombrePrograma' WHERE idPrograma='$idUpdate'")or die ("error al inserta el registro.".mysql_error());
    echo(json_encode(["message"=>"Programa Actualizado"]));
    header('location: ../../Web/index_programa.php');
} else {
    echo "No se puedo actualizar el registro";
}
?>