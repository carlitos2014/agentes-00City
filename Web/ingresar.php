<?php

include '../Sql/Conexion.php';

$name = $_POST['username'];
$pass = $_POST['password'];

session_start();

if (empty($name) || empty($pass)) {

    header("Location:..\index.php");
    echo "nombre de usuario o contraseña invalidos";
}

//Vos sos un mkn -.- esas barras de directorio estaban al reves
//$x="SELECT * FROM usuario WHERE nombre_usuario='".$name."'";
//echo $x;
//die();

$result = mysql_query("SELECT * FROM usuario WHERE nombre_usuario='" . $name . "'");



//$row = mysql_fetch_array($result,MYSQL_ASSOC);
//var_dump($row);
//die();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

    if ($row['password'] == $pass) {

//echo $row['password'];
//echo $pass;

        $_SESSION['name'] = $name;
        header("Location: .\home.php");
        
//        if(){
//            
//            
//        }
        $_SESSION['rol']=$row['rol'];
        //die();
    } else {
        header("Location:..\index.php");
        echo "nombre";
        exit();
    }

    if ($row['password'] !== $pass) {
        header("Location:..\index.php");
        echo "invalidos";
        exit();
    }
}
?>