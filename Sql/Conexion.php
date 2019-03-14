<?php 
// Conectando, seleccionando la base de datos
$link = mysql_connect('127.0.0.1', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('final_ionic') or die('No se pudo seleccionar la base de datos');

 ?>
