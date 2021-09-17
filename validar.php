<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "userbiblioteca";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn)
{
die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE nombre = '$nombre'and password = '$pass'");
$nr = mysqli_num_rows($query);
mysqli_data_seek ($query, 0);
		$extraido= mysqli_fetch_array($query);

if($nr)
{
		

		if($extraido['identificador'] == 2 )
		{
			header("Location: iniciobi.html");
		}
		else if($extraido['identificador'] == 1 )
		{
			header("Location: Administrador.html");
		}
		else if($extraido['identificador'] == 3 )
		{
			header("Location: Empleado.html");
		}
		else{
		echo "- Nombre: ".$extraido['nombre']."<br/>";

		echo "- Apellidos: ".$extraido['password']."<br/>";
		echo "- Identificador: ".$extraido['identificador']."<br/>";
		}

}
else 
{
	echo'<script type="text/javascript">
    	
		
	if(confirm("Usuario no existe, Quieres Registrarte?"))
	{
		document.location="index.html";
	}
		else
	{
		alert("Operacion Cancelada");
	}

    </script>';
	
	

}
?>