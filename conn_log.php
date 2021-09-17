<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "UserBiblioteca";

$conn = mysqli_connect($dbhost, dbuser, dbpass, dbname);

if(!$conn)
{
	die("No hay conexion".mysqli_connet_error());
}


?>