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
$idDelete=$_GET["idPrograma"];
if (isset($idDelete)) {    
$result = mysql_query("DELETE  FROM programas WHERE idPrograma='$idDelete'");
header('location: ../../Web/index_programa.php');    
}else {    
    echo  "No se pudo eliminar el registro";
}
?>
