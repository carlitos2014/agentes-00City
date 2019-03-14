<?php
include_once("../Sql/Conexion.php");

	$estado=1;
	$base64="prueba2";
	$descMision="Prueba";
	$id_usu = $_REQUEST["id_usu"];
	$idVacante = $_REQUEST["idVacante"];
	//$descMision =$_REQEST["descMision"];

    $target_dir = "images/";
    /*
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["photo"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
		if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}

	*/

	$insert="INSERT INTO completar_mision Values('','$idVacante', '$descMision', '$target_dir', '$id_usu','$base64')")
    or die ("error al inserta el registro.".mysql_error());
    $result2=mysql_query("UPDATE vacantes SET Estado='$estado'");
	if(!mysql_query($insert)) { 
 die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error());
} else{ 
 echo "Data Inserted Successully!!!";
} 




?>